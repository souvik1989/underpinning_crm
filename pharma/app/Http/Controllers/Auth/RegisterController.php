<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AdminUser;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


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
    protected $redirectTo = '/';

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
    //   return Validator::make($data, [
    //     'first_name' => ['required', 'string', 'max:255'],
    //         'email' => ['required', 'string', 'email', 'max:255', 'unique:admin_users'],
    //          'password' => ['required', 'string', 'min:6', 'confirmed'],
    //      ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
      protected function creates(Request $request)
    {
        dd($request->all());
         $user = new AdminUser();
        $values = $request->validate([
            "first_name" => 'required|string|max:50',
              "last_name" => 'required|string|max:50',
            "email" => "required|email|unique:admin_users,email",
            "phone" => "required|numeric|digits:10",
            "password" => "required|min:6",
            "con_password" => "required|min:6|same:password",
        ]);
      
        
        //dd( $newformat);

        $user->fill($values);
        
       

        $user->save();
       
        return redirect()->route('dashboard')->with("success", "You have registered successfully ! ");
       
    }
  
}
