<?php

namespace App\Http\Controllers\Admins;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use Session;
use Auth;

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


    public function showLoginForm(Request $request) {
        if (Auth::guard('admins')->check()) {
            return view('admin.home');
        }
        return view('admin.login');
    }

    public function store(Request $request)
    {
        $arr = [
            'username' => $request->username,
            'password' => $request->password,
        ];
        
        if (Auth::guard('admins')->attempt($arr)) {
            
            return redirect('/admin/home');
        }
        else {
            return redirect('/admin')->with('error', "Sai username hoặc password!");
        }
        
    }
    public function logout() {
        Auth::guard('admins')->logout();
        return redirect('/admin');
    }
    

}
