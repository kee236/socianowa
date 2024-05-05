<?php

namespace App\Http\Controllers\bots;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;

class FacebookController extends Controller
{
  public function redirectToFacebook()
  {
      try {
          return Socialite::driver('facebook')->redirect();
      } catch (\Exception $e) {
          // Log the error or handle it as needed
          return redirect()->route('login')->with('error', 'Failed to redirect to Facebook for authentication.');
      }
  }
    public function handleFacebookCallback(Request $request)
    {
        try {
            // Retrieve user information from Facebook after authentication
            $facebookUser = Socialite::driver('facebook')->user();

            // Check if the user exists in your application
            $existingUser = User::where('email', $facebookUser->getEmail())->first();

            if ($existingUser) {
                // User exists, log them in
                auth()->login($existingUser);
            } else {
                // User does not exist, create a new user
                $newUser = User::create([
                    'name' => $facebookUser->getName(),
                    'email' => $facebookUser->getEmail(),
                    // Additional fields as needed
                ]);

                // Log in the new user
                auth()->login($newUser);

                // Optional: Store or link the Facebook page to the user in your database
                if (property_exists($facebookUser, 'user')) {
                    $facebookPage = $facebookUser->user['accounts']['data'][0];
                    $newUser->update(['facebook_page_id' => $facebookPage['id']]);
                }

                // Redirect the user to the dashboard or any other desired route
                return redirect()->route('/');
            }
        } catch (\Exception $e) {
            // Handle exceptions (e.g., user denied authorization)
            return redirect()->route('login')->with('error', 'Facebook authentication failed.');
        }
    }
}
