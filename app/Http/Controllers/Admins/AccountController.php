<?php

namespace App\Http\Controllers\Admins;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin;

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
                'username' => 'required|max:191',
                'password' => 'required|max:191',
                'email' => 'required|max:191',
                'active' => 'numeric',
                'image' => 'image|max:2048'];
        // validate
        $request->validate($rules);
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
                    'username' => 'required|max:191',
                    'password' => 'required|max:191',
                    'email' => 'required|max:191',
                    'image' => 'image|max:2048',
                    'active' => 'numeric',
                    ];
        $request->validate($rules);
        $account = new Admin;
        $file = $request->file('image');
        $image = time()."-".$file->getClientOriginalName();
        $file->storeAs('/public/account', $image);
        $account->fill($request->all());
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
        $account->delete();
        return redirect('admin/account')->with('success', "Xóa Thành Công!");
    }
}
