<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\AdminUser;
use App\Models\Job;
use App\Models\Invoice;
use App\Models\Doctor;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\ForgetPasswordMail;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use DB;
use Illuminate\Support\Facades\Http;

class DashboardController extends Controller
{
    public function index()
    {
        $data['user_count']=Doctor::where('status', '1')->count();
        return view('panel.content.dashboard', $data);
    }
    
    
    
    
     protected function creates(Request $request)
    {
        //dd($request->all());
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
       
        return redirect()->back()->with("success", "You have registered successfully ! ");
       
    }
    
     public function profile()
    {
        $data['user_count']=User::where('status', 'active')->count();
         $data['user']=auth()->user();
         
    return view('panel.content.profile', $data);
    }
    
    
     protected function saveProfile(Request $request)
    {
        //dd($request->all());
         $user = auth()->user();
        $values = $request->validate([
            "first_name" => 'nullable|string|max:50',
              "last_name" => 'nullable|string|max:50',
            "email" => "required|email",
            "phone" => "nullable|numeric|digits:10",
             "abn" => "nullable|string", 
             "account_name" => "nullable|string",
              "account_no" => "nullable|string",
               "bsb" => "nullable|string",
            
        ]);
      
        
        //dd( $newformat);

        $user->fill($values);
        
       

        $user->save();
       
        return redirect()->back()->with("success", "Profile is updated successfully ! ");
       
    }
    
    public function password()
    {
        $data['user_count']=User::where('status', 'active')->count();
         $data['user']=auth()->user();
         
    return view('panel.content.password', $data);
    }
    public function changePassword(Request $request)
    {
        $changed = false;
        $values = $request->validate([

            "old_password"=>"required",
            "password"=>"required|min:6|different:old_password",
            "con_password"=>"required|same:password",

        ]);

        if(!Hash::check($request->old_password, auth()->user()->password)){
            return back()->with("error","Old Password Doesn't match!");
        }


        #Update the new Password
        AdminUser::whereId(auth()->user()->id)->update([
            'password' =>Hash::make($request->password)
        ]);

        return redirect()->back()->with("success", "Password changed successfully!");

    }
    
        public function submitForgetPasswordForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:admin_users',
        ]);
        $user=AdminUser::where('email',$request->email)->first();
        //dd($user->user_role_id);
        

        $token = Str::random(64);

        DB::table('password_reset_tokens')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now()
          ]);
          $data = [
              'token' => $token,
          ];


      Mail::to('souvik.pal@3raredynamics.com')->send(new ForgetPasswordMail($data));

        return redirect()->back()->with('success','We have e-mailed your password reset link!');
    }
    
     public function showResetPasswordForm($token) {
       //dd($setting);
       $data['token']=$token;
       //dd( $data['token']);
        return view('panel.auth.forgetPasswordLink', $data);
     }
     public function submitResetPasswordForm(Request $request)
     {

//dd($request->token);
         $request->validate([
             'email' => 'required|email|exists:admin_users',
             'password' => 'required|string|min:6|confirmed',
             'password_confirmation' => 'required'
         ]);

         $user=AdminUser::where('email',$request->email)->first();
        

         $updatePassword = DB::table('password_reset_tokens')
                             ->where([
                               'email' => $request->email,
                               'token' => $request->token
                             ])
                             ->first();

         if(!$updatePassword){
             return back()->withInput()->with('error', 'Invalid token!');
         }

         $user = AdminUser::where('email', $request->email)
                     ->update(['password' => Hash::make($request->password)]);

         DB::table('password_reset_tokens')->where(['email'=> $request->email])->delete();

         return redirect()->route('login')->with('success', 'Your password has been changed!');
     }
     

}
