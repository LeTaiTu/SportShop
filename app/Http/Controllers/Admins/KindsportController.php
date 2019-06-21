<?php

namespace App\Http\Controllers\Admins;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Kind_sport;

class KindsportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kindsport = Kind_sport::query()->orderBy('created_at', 'desc')->paginate(3);
        return view('admin.kind_sports.index', compact('kindsport'));
    }

    // search
    public function search(Request $req)
    {
        $kindsport = Kind_sport::where('tenloai','like',"%".$req->txtsearch."%")
        ->orderBy('created_at', 'desc')->paginate(3);
        return view('admin.kind_sports.index', compact('kindsport'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.kind_sports.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = ['tenloai' => 'required|max:191'];
        $request->validate($rules);
        $kindsport = new Kind_sport;
        $kindsport->fill($request->all());
        $kindsport->save();
        return redirect('admin/kindsport')->with('success', "Tạo Mới Thành Công!");
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
        $kindsport = Kind_sport::findOrFail($id);
        return view('admin.kind_sports.edit', compact('kindsport'));
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
        $rules = ['tenloai' => 'required|max:191'];
        $request->validate($rules);
        $kindsport = Kind_sport::findOrFail($id);
        $kindsport->tenloai = $request->tenloai;
        $kindsport->save();
        return redirect('admin/kindsport')->with('success', "Cập Nhật Thành Công!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kindsport = Kind_sport::findOrFail($id);
        $kindsport->delete();
        return redirect('admin/kindsport')->with('success', "Xóa Thành Công!");
    }
}
