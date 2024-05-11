<?php

namespace App\Http\Controllers\bots;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use App\Models\FacebookPage;
use Facebook\Facebook;

class FacebookController extends Controller
{
    /**
     * Redirect the user to the Facebook authentication page.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function redirectToFacebook()
    {
        try {
            return Socialite::driver('facebook')->redirect();
        } catch (\Exception $e) {
            // Log the error or handle it as needed
            return redirect()->route('facebook.login')->with('error', 'Failed to redirect to Facebook for authentication.');
        }
    }

    /**
     * Handle callback from Facebook authentication.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
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
            }

            // Redirect to Facebook page connection process
            return $this->connectPages($request);
        } catch (\Exception $e) {
            // Handle exceptions (e.g., user denied authorization)
            return redirect()->route('facebook.login')->with('error', 'Facebook authentication failed.');
        }
    }

    /**
     * Connect Facebook Pages to the App.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\Response
     */
    public function connectPages(Request $request)
    {
        // Get the authenticated user
        $user = $request->user();

        // Check if user is authenticated
        if (!$user) {
            return redirect()->route('facebook.login')->with('error', 'User authentication failed.');
        }

        // Retrieve user's Facebook access token from the database
        $accessToken = $user->facebook_access_token;

        if (!$accessToken) {
            return redirect()->route('/')->with('error', 'User does not have a Facebook access token.');
        }

        try {
            // Initialize Facebook SDK
            $fb = new Facebook([
                'app_id' => config('services.facebook.client_id'),
                'app_secret' => config('services.facebook.client_secret'),
                'default_graph_version' => 'v12.0',
            ]);

            // Set default access token for making requests
            $fb->setDefaultAccessToken($accessToken);

            // Fetch user's pages using Facebook Graph API
            $response = $fb->get('/me/accounts');
            $pages = $response->getGraphEdge()->asArray();

            // Store or process the fetched pages as needed (e.g., store in database)
              foreach ($pages as $page) {
                // Store the page in the database
                FacebookPage::create([
                    'user_id' => $user->id,
                    'page_id' => $page['id'],
                    'page_name' => $page['name'],
                    'facebook_access_token' => $page['access_token'], // Assuming 'access_token' is the key for the token

                ]);
            }

            return response()->view('pages.connect', ['pages' => $pages]);
        } catch (\Facebook\Exceptions\FacebookResponseException $e) {
            // Handle API errors (e.g., invalid permissions, expired token)
            return redirect()->route('/')->with('error', 'Facebook API error: ' . $e->getMessage());
        } catch (\Facebook\Exceptions\FacebookSDKException $e) {
            // Handle SDK errors (e.g., connection issues)
            return redirect()->route('/')->with('error', 'Facebook SDK error: ' . $e->getMessage());
        } catch (\Exception $e) {
            // Handle other exceptions
            return redirect()->route('/')->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }
}
