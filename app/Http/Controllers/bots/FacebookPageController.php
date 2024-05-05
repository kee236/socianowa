<?php

namespace App\Http\Controllers\bots;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Facebook\Facebook;

class FacebookPageController extends Controller
{
    /**
     * Connect Facebook Pages to the App.
     *
     * The connectPages method is responsible for handling the logic to connect
     * Facebook pages to the app. This may involve fetching the user's pages
     * using the Facebook Graph API and storing relevant information in the database.
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
            return redirect()->route('login')->with('error', 'User authentication failed.');
        }

        // Retrieve user's Facebook access token from the database
        $accessToken = $user->facebook_access_token;

        if (!$accessToken) {
            return redirect()->route('dashboard')->with('error', 'User does not have a Facebook access token.');
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

            return response()->view('pages.connect', ['pages' => $pages]);
        } catch (\Facebook\Exceptions\FacebookResponseException $e) {
            // Handle API errors (e.g., invalid permissions, expired token)
            return redirect()->route('dashboard')->with('error', 'Facebook API error: ' . $e->getMessage());
        } catch (\Facebook\Exceptions\FacebookSDKException $e) {
            // Handle SDK errors (e.g., connection issues)
            return redirect()->route('dashboard')->with('error', 'Facebook SDK error: ' . $e->getMessage());
        } catch (\Exception $e) {
            // Handle other exceptions
            return redirect()->route('dashboard')->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }
}
