<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;
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
    protected $redirectTo = '/';
    

    public function login(Request $req) {
        $rules = ['email' => 'required|email',
                'password' => 'required|min:6|max:20',
                ];

        $message = ['email.required' => 'Vui lòng nhập email!',
                    'email.email' => 'Email không đúng định dạng!',
                    
                    'password.required' => 'Vui lòng nhập password!',
                    'password.min' => 'Mật khẩu từ 6 ký tự trở lên!',
                    'password.max' => 'Mật khẩu nhỏ hơn 20 ký tự!',
                    ];

        $req->validate($rules,$message);
        $credentials = array('email' => $req->email,
                            'password' => $req->password);
        //@dd($credentials);
        if (Auth::attempt($credentials)) {
            return redirect('/');
        }
        else {
            return redirect()->back()->with('error', "Sai Email hoặc Mật Khẩu!");
        }
        
    }

    public function register(Request $request)
    {
        $rules = ['email' => 'required|email|unique:users,email',
                'password' => 'required|min:6|max:20',
                're_password' => 'required|same:password'];

        $message = ['email.required' => 'Vui lòng nhập email!',
                    'email.email' => 'Email không đúng định dạng!',
                    'email.unique' => 'Email không đã tồn tại!',
                    'password.required' => 'Vui lòng nhập password!',
                    'password.min' => 'Mật khẩu từ 6 ký tự trở lên!',
                    'password.max' => 'Mật khẩu nhỏ hơn 20 ký tự!',
                    're_password.required' => 'Vui lòng nhập lại mật khẩu',
                    're_password.same' => 'Mật khẩu không khớp!'];

        $request->validate($rules,$message);
        $user = new User;

        $user->fill($request->all());
        $user->name = $request->last_name." ".$request->first_name;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect('/login_user')->with('success', "Bạn đã đăng ký thành công, vui lòng đăng nhập!");
    }
    public function change_info(Request $request, $id) {
      $rules = ['email' => 'required|email',
                'password' => 'required|min:6|max:20',
                're_password' => 'required|same:password'];

        $message = [
                    'email.email' => 'Email không đúng định dạng!',
                    'email.unique' => 'Email không đã tồn tại!',
                    'password.required' => 'Vui lòng nhập password!',
                    'password.min' => 'Mật khẩu từ 6 ký tự trở lên!',
                    'password.max' => 'Mật khẩu nhỏ hơn 20 ký tự!',
                    're_password.required' => 'Vui lòng nhập lại mật khẩu',
                    're_password.same' => 'Mật khẩu không khớp!'];

        $request->validate($rules,$message);
        $user = User::findOrFail($id);

        $user->fill($request->all());
        $user->password = Hash::make($request->password);
        $user->save();
         @dd($user);
        return redirect('/login_user')->with('success', "Bạn đã cập nhật thành công, vui lòng đăng nhập!");
    }


    public function logout(Request $request) {
      Auth::logout();
      return redirect('/');
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
