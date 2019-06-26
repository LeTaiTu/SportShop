<?php

namespace App\Http\Controllers\Admins;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use Auth;
use App\Models\User;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact = Contact::query()->orderBy('created_at', 'desc')->paginate(4);
        return view('admin.contacts.index', compact('contact'));
    }

    public function search(Request $req)
    {
        $contact = Contact::where('name','like',"%".$req->txtsearch."%")
        ->orWhere('name','like',"%".$req->txtsearch."%")
        ->orWhere('phone','like',"%".$req->txtsearch."%")
        ->orWhere('email','like',"%".$req->txtsearch."%")
        ->orWhere('text','like',"%".$req->txtsearch."%")
        ->orderBy('created_at', 'desc')->paginate(3);
        return view('admin.contacts.index', compact('contact'));
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
        $rules = ['name' => 'required|max:191',
                'phone' => 'numeric',
                'email' => 'email',
                'text' => 'required'];

        $mess = ['name.required' => 'Tên Không Được Để Trống!',
                'name.max' => 'Tên Vượt Quá 190 Ký Tự',
                'email.email' => 'Email Phải Đúng Định Dạng!',
                'text.required' => 'Nội Dung Không Được Để Trống!'];

        $request->validate($rules,$mess);
        $contact = new Contact;
        $contact->fill($request->all());
        if (Auth::check()) {
            $contact->id_customer = Auth::user()->id;
        }
        else {
            $contact->id_customer = 0;
        }
        $contact->save();
        return redirect('/contact')->with('success', 'Thông tin đã được gửi thành công, bạn vui lòng đợi chúng tôi liên hệ lại!');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();
        return redirect('admin/contact')->with('success', "Xóa Thành Công!");
    }
}
