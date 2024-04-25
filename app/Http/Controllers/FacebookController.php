<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;

class FacebookController extends Controller
{
    public function handleFacebookCallback(Request $request)
    {
        try {
            // Retrieve user information from Facebook after authentication
            $user = Socialite::driver('facebook')->user();

            // Check if the user exists in your application
            $existingUser = User::where('email', $user->getEmail())->first();

            if ($existingUser) {
                // User exists, log them in
                auth()->login($existingUser);
            } else {
                // User does not exist, create a new user
                $newUser = User::create([
                    'name' => $user->getName(),
                    'email' => $user->getEmail(),
                    // Additional fields as needed
                ]);

                // Log in the new user
                auth()->login($newUser);
            }

            // Redirect the user to the dashboard or any other desired route
            return redirect()->route('/');
        } catch (\Exception $e) {
            // Handle exceptions (e.g., user denied authorization)
            return redirect()->route('login')->with('error', 'Facebook authentication failed.');
        }
    }
}
