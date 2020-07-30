<?php

namespace App\Http\Controllers\Admins;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use Session;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
// use Illuminate\Support\Facades\Auth;

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
    protected $redirectTo = '/admin/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function showLoginForm(Request $request) {
        if (Auth::check()) {
            return view('admin.home');
        }
        return view('admin.login');
    }

    public function username() {
        return 'username';
    }

    protected function guard()
    {
        return Auth::guard('admin');
    }

    public function store(Request $request)
    {
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
        }
        return view('admin.login');
    }
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

}
