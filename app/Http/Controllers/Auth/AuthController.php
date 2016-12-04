<?php

namespace App\Http\Controllers\Auth;

use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades;
use Illuminate\Auth\Events\Registered;
use App\Models\User;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Session;

use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;


class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    //use RegistersUsers;
    use ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => ['getLogout', 'resendEmail', 'activateAccount']]);
        $this->middleware('jwt.authenticate',['except' => ['postLogout','postLogin', 'resendEmail', 'activateAccount','postRegiser']]);
    }



    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postRegiser(Request $request)
    {
        $validator = Validator::make($request->all(), [
        'name' => 'required|max:255',
        'email' => 'required|email|max:255|unique:users',
        'password' => 'required|confirmed|min:6',
        ]);

        if ($validator->fails())
        {
            return Response::json($validator->messages(), 400);
        }

        $user  = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
        ]);

        event(new Registered($user));

        $token = JWTAuth::fromUser($user);
        return response()->json(['token' => $token,'user'=> $user]);
    }

    public function postLogin(Request $request)
    {

        $validator = Validator::make($request->all(), [ 'email' => 'required', 'password' => 'required' ]);
        

        // If the class is using the ThrottlesLogins trait, we can automatically throttle
        // the login attempts for this application. We'll key this by the username and
        // the IP address of the client making these requests into this application.
        if ($this->hasTooManyLoginAttempts($request)) {
            //event(new Lockout($request));

            $seconds = $this->limiter()->availableIn(
                $this->throttleKey($request)
            );

            $message = Lang::get('auth.throttle', ['seconds' => $seconds]);

            return Response::json(['error' =>  [$message]],410);
        }

        if ($validator->fails())
        {
            return Response::json($validator->messages(), 401);
        }

        try {
            $credentials = $request->only('email', 'password');
            // attempt to verify the credentials and create a token for the user
            if (! $token = JWTAuth::attempt($credentials)) {
                $this->incrementLoginAttempts($request);

                return response()->json(['error' => ['invalid_credentials']], 401);
            }
        } catch (JWTException $e) {
             $this->incrementLoginAttempts($request);

            // something went wrong whilst attempting to encode the token
            return response()->json(['error' => 'could_not_create_token'], 401);
        }

       return response()->json(['token' => $token,'user'=> JWTAuth::toUser($token)]);
    }

    public function postValidate(Request $request,$user)
    {

         return $user;

    }

    public function postLogout(Request $request)
    {
        return response()->json(['result' => JWTAuth::invalidate($request->input('token'))]);
    }

    public function username()
    {
        return "email";
    }



}
