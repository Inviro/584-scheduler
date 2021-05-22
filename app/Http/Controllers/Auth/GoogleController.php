<?php

namespace App\Http\Controllers\Auth;

use Socialite;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class GoogleController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    /**
     * Redirects to provider following successful OAuth
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Obtain the user information from Google.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {

        try {
            $user = Socialite::driver('google')->user();
        } catch (\Exception $e) {
            return redirect('/home');
        }
        
        // check if they're an existing user
        $existingUser = User::where('email', $user->email)->first();        
        if($existingUser){
            // log them in
            auth()->login($existingUser, true);
        } else {
            // create a new user
            $newUser                    = new User;
            $newUser->name              = $user->name;
            $newUser->email             = $user->email;
            $newUser->google_id         = $user->id;
            // Creates a random cryptographically secure password that is 20 characters long
            // Uses https://www.php.net/manual/en/function.random-bytes.php
            $newUser->password          = Hash::make(Str::random(20));
            $newUser->email_verified_at = date('Y-m-d H:i:s'); // Setting email verification time since it is verified by Google
            $newUser->save();
            auth()->login($newUser, true);
        }
        return redirect()->to('/home');
    }
}
