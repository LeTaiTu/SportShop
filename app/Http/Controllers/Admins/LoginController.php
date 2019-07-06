<?php

namespace App\Http\Controllers\Admins;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use Session;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
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
        
            return view('admin.login');
        
    }

    public function username() {
        return 'username';
    }

    protected function guard()
    {
        return Auth::guard('admin');
    }

    public function logout(Request $request) {
      Auth::logout();
      return redirect('/admin');
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
