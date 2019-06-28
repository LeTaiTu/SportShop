<?php

namespace App\Http\Controllers\Admins;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Hash;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::query()->orderBy('created_at', 'desc')->paginate(4);
        return view('admin.members.index',compact('user'));
    }

    public function search(Request $req)
    {
        $user = User::where('name','like',"%".$req->txtsearch."%")
        ->orWhere('phone','like',"%".$req->txtsearch."%")
        ->orWhere('email','like',"%".$req->txtsearch."%")
        ->orderBy('created_at', 'desc')->paginate(3);
        return view('admin.members.index',compact('user'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.members.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = ['name' => 'required|max:191',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|min:6|max:20',
                're_password' => 'required|same:password'];

        $mess = [   'name.required' => 'Vui lòng nhập tên!',
                    'email.required' => 'Vui lòng nhập email!',
                    'email.email' => 'Email không đúng định dạng!',
                    'email.unique' => 'Email đã tồn tại!',
                    'password.required' => 'Vui lòng nhập password!',
                    'password.min' => 'Mật khẩu từ 6 ký tự trở lên!',
                    'password.max' => 'Mật khẩu nhỏ hơn 20 ký tự!',
                    're_password.required' => 'Vui lòng nhập lại mật khẩu',
                    're_password.same' => 'Mật khẩu không khớp!'];

        $request->validate($rules,$mess);
        $user = new User;
        $user->fill($request->all());
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect('admin/member')->with('success', "Tạo thành công!");
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
        return view('admin.members.edit',compact('user'));
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
        $rules = ['name' => 'required|max:191',
                'email' => 'required|email',
                'password' => 'required|min:6|max:20',
                're_password' => 'required|same:password'];

        $mess = [   'name.required' => 'Vui lòng nhập tên!',
                    'email.required' => 'Vui lòng nhập email!',
                    'email.email' => 'Email không đúng định dạng!',
                    'email.unique' => 'Email đã tồn tại!',
                    'password.required' => 'Vui lòng nhập password!',
                    'password.min' => 'Mật khẩu từ 6 ký tự trở lên!',
                    'password.max' => 'Mật khẩu nhỏ hơn 20 ký tự!',
                    're_password.required' => 'Vui lòng nhập lại mật khẩu',
                    're_password.same' => 'Mật khẩu không khớp!'];

        $request->validate($rules,$mess);
        $user = User::findOrFail($id);
        $user->fill($request->all());
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect('admin/member')->with('success', "Tạo thành công!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect('admin/member')->with('success', "Xóa Thành Công!");
    }
}
