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
<<<<<<< HEAD
        //dd($request->all());
        $username = $request->username;
        $password = $request->password;
        $admin = Admin::get();
        foreach ($admin as $key => $value) {

            $user_data = $value->username;
            $pass_data = $value->password;
            $id_admin = $value->id;
            //session('id_admin') = $id_admin;
            $name_admin = $value->name;
            //session('name_admin') = $name_admin;
            $image_admin = $value->image;
             //dd(12);
            if (($username == $user_data) && ($password == $pass_data)) {
                //dd(12);
                session(['name_admin' => $name_admin]);
                session(['id_admin' => $id_admin]);
                session(['image_admin' => $image_admin]);
                return view('admin.home', compact('id_admin','name_admin', 'image_admin'));
            }
            //dd(34);
=======
        $arr = [
            'username' => $request->username,
            'password' => $request->password,
        ];
        
        if (Auth::guard('admins')->attempt($arr)) {
            
            return redirect('/admin/home');
>>>>>>> 9e37be395d16fbef6ff44fa6fca1f19f5b0bf0f4
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
