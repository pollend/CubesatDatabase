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

    //use AuthenticatesUsers;
    use RegistersUsers;
    use ThrottlesLogins;

    protected $auth;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => ['getLogout', 'resendEmail', 'activateAccount']]);
    }




    /**
    * Get a validator for an incoming registration request.
    *
    * @param  array  $data
    * @return \Illuminate\Contracts\Validation\Validator
    */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
         $validator = $this->validator($request->all());

        if ($validator->fails())
        {
            return Response::json($validator->messages(), 400);
        }
        $user = $this->create($request->all());
        $this->guard()->login($user);

         return Response::json();
    }



    // public function postLogin(Request $request)
    // {
    //     $validator = $this->validator($request->all());
    //     if ($validator->fails()) {
    //         $this->throwValidationException(
    //             $request, $validator
    //         );
    //     }

        
    // }

    // public function postRegister(Request $request)
    // {
    //     $validator = $this->validator($request->all());

    //     if ($validator->fails()) {
    //         $this->throwValidationException(
    //             $request, $validator
    //         );
    //     }

    //     $user = new User;
    //     $user->name = $request->input("name");
    //     $user->name = $request->input("email");
    //     $user->password =  bcrypt($request->input("password"));
    //     if($user->save())
    //     {

    //         return response()->json(['result' => 'success']);
    //     }
    //      return response()->json(['result' => 'failed']);

    // }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
