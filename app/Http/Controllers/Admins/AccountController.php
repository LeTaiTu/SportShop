<?php
// note
namespace App\Http\Controllers\Admins;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use Hash;
use Auth;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $account = Admin::query()->orderBy('created_at', 'desc')->paginate(3);
        return view('admin.accounts.index', compact('account'));
    }
    public function search(Request $req)
    {
        $account = Admin::where('name','like',"%".$req->txtsearch."%")
            ->orWhere('username','like',"%".$req->txtsearch."%")
            ->orWhere('email','like',"%".$req->txtsearch."%")
            ->orderBy('created_at', 'desc')->paginate(3);
            
        return view('admin.accounts.index', compact('account'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.accounts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // check dieu kien nhap vao
        $rules = ['name' => 'required|max:191',
                'username' => 'required|unique:admins,username|max:191',
                'password' => 'required|min:6|max:20',
                'email' => 'required|email|unique:admins,email',
                'active' => 'numeric',
                'image' => 'required|image|max:2048'];
        // validate
        $mess = [   'name.required' => 'Vui lòng nhập tên!',
                    'name.max' => 'Vui lòng nhập tên tối đa 191 ký tự!',
                    'username.required' => 'Vui lòng nhập username!',
                    'username.unique' => 'Username đã tồn tại!',
                    'username.max' => 'Username tối đa 191 ký tự!',
                    'email.required' => 'Vui lòng nhập email!',
                    'email.email' => 'Email không đúng định dạng!',
                    'email.unique' => 'Email đã tồn tại!',
                    'password.required' => 'Vui lòng nhập password!',
                    'password.min' => 'Mật khẩu từ 6 ký tự trở lên!',
                    'password.max' => 'Mật khẩu nhỏ hơn 20 ký tự!',
                    'image.required' => 'Vui lòng chọn hình ảnh đại diện!',
                    'image.image' => 'Hình ảnh không đúng định dạng!',
                    'image.max' => 'Hình ảnh có kích thước quá lớn!',
                    'active.numeric' => 'Active phải là 1 số!'
                    ];

        $request->validate($rules,$mess);
        // 
        $account = new Admin;
        // C:\xampp\tmp\php1126.tmp khi file submit form no se luu tam vao day
        $file = $request->file('image');
        // lay ra ten file picture.jpg
        $image = time()."-".$file->getClientOriginalName(); 
        // luu cai file vao trong duong dan folder voi ten $image
        $file->storeAs('public/account', $image);
       
        $account->fill($request->all());
        $account->image = $image;
        $account->password = Hash::make($request->password);
        $account->save();
        return redirect('admin/account')->with('success', "Tạo Mới Thành Công");
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
        $account = Admin::findOrFail($id);
        return view('admin.accounts.edit', compact('account'));
    }

    public function changepass($id)
    {
        $account = Admin::findOrFail($id);
        return view('admin.accounts.changepass', compact('account'));
    }

    public function updatepass(Request $request, $id)
    {
        $rules = [
                    'oldpassword' => 'required|max:20',
                    'newpassword' => 'required|max:20'
                    ];

        $mess = [   'oldpassword.required' => 'Vui lòng nhập password cũ!',
                    'newpassword.required' => 'Vui lòng nhập password mới!',
                    'oldpassword.max' => 'Password cũ quá dài!',
                    'oldpassword.max' => 'Password mới quá dài!',];

        $request->validate($rules,$mess);
        $account = Admin::findOrFail($id);
        $oldpassword = $request->oldpassword;
        $newpassword = $request->newpassword;
        if ($account->password == $oldpassword) {
            $account->password = $newpassword;
            $account->save();
            return redirect('admin/account')->with('success', 'Cập Nhật Thành Công!');
        }
        else {
            return redirect('admin/account/'.$id.'/changepass')->with('error', 'Sai Mật Khẩu Cũ!');
        }
        
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
        // khong can check dieu kien nhap vao
        $rules = ['name' => 'required|max:191',
                'username' => 'required|max:191',
                'password' => 'required|min:6|max:20',
                'email' => 'required|email',
                'active' => 'numeric',
                'image' => 'image|max:2048'];

        $request->validate($rules);
        
        $account = Admin::findOrFail($id);
        $old_image = $account->image;
        
        $account->fill($request->all());
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $image = time()."-".$file->getClientOriginalName();
            $file->storeAs('/public/account', $image);
        }
        else {
            $image = $old_image;
        }
        $account->image = $image;
        $account->save();
        return redirect('admin/account')->with('success', 'Cập Nhật Thành Công!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $account = Admin::findOrFail($id);
        
        if ($account->username == Auth::guard('admin')->user()->username ) {
            $account->delete();
            return redirect('admin/');
        }
        else {
            $account->delete();
            return redirect('admin/account')->with('success', "Xóa Thành Công!");
        }
        
    }
}
