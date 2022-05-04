<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class adminController extends Controller
{
    public function index(){
        // dd('hi');
        return view('admin.login');
    }
   /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function adminLogin(Request $request)
    {
        // $password = \Hash::make($request['password']);
        // $email= $request->email_id;
        // DB::table('admin_user')->insert([
        //     'name' => 'amit',
        //     'email_id' => $email,
        //     'password' => $password,
        //     'plain_pass' => $request['password']
        // ]);
        // dd('hi');
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // $test=( Auth::guard('admin')->attempt( $credentials));
        //  dd( $credentials, $test);
        // if(Auth::guard('admin')->attempt(['email_id'=> $request->email_id,'password'=> $request->password])) {
        if(Auth::guard('admin')->attempt( $credentials)) {
            $request->session()->regenerate();
            // return redirect()->intended('dashboard');
            return redirect()->route('admin.dashboard');

        }

        return back()->withErrors([
            'email_id' => 'The credentials do not match our records.',
        ]);
    }

    public function adminDashboard()
    {
        return view('admin.adminHome');
    }

    public function adminLogout(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login');
    }

   
}
