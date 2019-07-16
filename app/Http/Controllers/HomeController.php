<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Hash;
use Auth;
use App\Models\Product;
use App\Models\ProductDetail;
use App\Models\Slide;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pro_clothers = Product::where('kind_sport_id',1)->get();
        
        $product_details = ProductDetail::query()->paginate(5);
        return view('home.home',compact('pro_clothers','product_details'));
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        
        return view('edit_info_user', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = ['email' => 'required|email',
                'password' => 'required|min:6|max:20',
                're_password' => 'required|same:password'];

        $message = ['email.required' => 'Vui lòng nhập email!',
                    'email.email' => 'Email không đúng định dạng!',
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
        Auth::logout();
        return redirect('/login_user')->with('success', "Bạn đã cập nhật thành công, vui lòng đăng nhập lại!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
