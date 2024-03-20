<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

use App\Models\User;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    protected function login(Request $request)
    {
        $this->validateLogin($request);
      

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // if successful, then redirect to their intended location
             
            return redirect('dashboard')->with('success','Login Success successfully!');
          }
          // if unsuccessful, then redirect back to the login with the form data
        return redirect()->back()->with("error","Invalid Email or Password!");
    }

    function validateLogin(Request $request)
    {
        $request->validate([
            'email'     => 'required|email',
            'password'  => 'required|string',
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }

    // public function forgetPass()
    // {
    //     return view('auth.forgetpass');
    // }

    // public function forgetPassSubmit(Request $request)
    // {
    //     $request->validate([
    //         'email'     => 'required|email|exists:users'
    //     ]);

    //     $token = Str::random(64);
    //     DB::table('password_reset')->insert([
    //         'email' => $request->email,
    //         'token' => $token
    //     ]);

    //     // Mail::send('email.forget-password-email', ['token' => $token], function($message) use($request){
    //     //     $message->to($request->email);
    //     //     $message->from(env('MAIL_FROM_ADDRESS'), env('APP_NAME'));
    //     //     $message->subject('Fixture Cloud Reset Password');
    //     // });

    //     return redirect('forget-pass')->with('success','Password Reset Email send successfully!');

    // }

    // public function resetPass($token)
    // {
    //     return view('admin.auth.resetnewpass',['token' => $token]);
    // }

    // public function resetPassSubmit(Request $request)
    // {
    //     $request->validate([
    //         'email' => 'required|email|exists:users',
    //         'password' =>'min:6|required|confirmed',
    //         'password_confirmation'=>'required|min:6'
    //          ]);

    //          $update = DB::table('password_reset')->where(['email' => $request->email, 'token' => $request->token])->first();

    //          if(!$update){
    //              return back()->withInput()->with('error', 'Invalid token!');
    //          }

    //      User::where('email', $request->email)->update(['password'=>Hash::make($request->password),'password_text'=>$request->password]);


    //     // Delete password_resets record
    //      DB::table('password_reset')->where(['email'=> $request->email])->delete();

    //      return redirect('login')->with('success','User Password Updated successfully!');

    // }



}
