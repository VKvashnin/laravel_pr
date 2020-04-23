<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
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

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectToFacebookProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function providerFacebookCallback()
    {
        $userDataFromFacebook = Socialite::driver('facebook')->user();

        //dd($user);

        $name = $userDataFromFacebook->getName();
        $email = $userDataFromFacebook->getName();

        $user = User::where(['email'=>$email])->first();

        if (!$user)
        {
            $password = Str::random(12);;
            $user = User::create(
                [
                    'login' => $name,
                    'email' => $email,
                    'password' => Hash::make($password)
                ]
            );
        }

        if (Auth::login($user))
        {
            return response()->redirectTo($this->redirectTo);
        }

        return response()->redirectTo('/login');

    }
}
