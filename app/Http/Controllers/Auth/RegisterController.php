<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Teacher;
use App\Client;
use App\Mail\Welcome;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        if(isset($data['account-type'])){
            $user = new User;
            $user->name = $data['name'];
            $user->email = $data['email'];
            $user->password = Hash::make($data['password']);
            $user->username = preg_replace('/\s/', '', strtolower($data['name']) ). mt_rand(11, 9999);
            if($data['account-type'] == 'teacher'){
                $user->type = 'teacher';
            }else{
                $user->type = 'client';
            } 
            $user->save();

            \Mail::to($user)->send(new Welcome($user));

            if($data['account-type'] == 'teacher'){
                $user->type = 'teacher';
                $teacher = new Teacher;
                $teacher->user_id = $user->id;
                $teacher->save();

            }elseif ($data['account-type'] == 'client') {
                $user->type = 'client';
                $client = new Client;
                $client->user_id = $user->id;
                $client->save();
            }

        }
        return $user; 
    }
}
