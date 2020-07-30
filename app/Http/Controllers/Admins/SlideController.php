<?php

namespace App\Http\Controllers\Admins;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Slide;
use App\Models\Kind_sport;
use App\Models\Product;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slide = Slide::query()->orderBy('created_at', 'desc')->paginate(4);
        return view('admin.slides.index', compact('slide'));
    }

    public function search(Request $req)
    {
        $slide = Slide::where('name_slide','like', "%".$req->txtsearch."%")
        ->orWhere('id_kind','like',"%".$req->txtsearch."%")
        ->orderBy('created_at', 'desc')->paginate(4);
        return view('admin.slides.index', compact('slide'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kindsport = Kind_sport::get();
        $products = Product::get();
        return view('admin.slides.create',compact('kindsport', 'products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = ['name_slide' => 'required|unique:slides,name_slide|max:191',
                    'id_kind' => 'numeric',
                    'image' => 'required|image|max:2048'];

        $mess = ['name_slide.required' => 'Tên slide không được để trống!',
                'name_slide.unique' => 'Tên slide đã tồn tại!',
                'name_slide.max' => 'Tên slide quá dài!',
                'id_kind.numeric' => 'Id phải là số!',
                'image.required' => 'Vui lòng chọn hình ảnh đại diện!',
                'image.image' => 'Hình ảnh không đúng định dạng!',
                'image.max' => 'Hình ảnh có kích thước quá lớn!'];

        $request->validate($rules,$mess);
        $slide = new Slide;
        $file = $request->file('image');
        $image = time()."-".$file->getClientOriginalName();
        $file->storeAs('public/slide', $image); //ckeck lai has file
        $slide->fill($request->all());
        $slide->image = $image;
        $slide->save();
        return redirect('admin/slide')->with('success', "Tạo Mới Thành Công!");
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
        $slide = Slide::findOrFail($id);
        $kindsport = Kind_sport::get();
        $products = Product::get();
        return view('admin.slides.edit', compact('slide','kindsport','products'));
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
        $rules = ['name_slide' => 'required|max:191',
                    'id_kind' => 'numeric',
                    'image' => 'image|max:2048'];
                    
        $mess = ['name_slide.required' => 'Tên slide không được để trống!',
                'name_slide.max' => 'Tên slide quá dài!',
                'id_kind.numeric' => 'Id phải là số!',
                'image.image' => 'Hình ảnh không đúng định dạng!',
                'image.max' => 'Hình ảnh có kích thước quá lớn!'];

        $request->validate($rules,$mess);

        $slide = Slide::findOrFail($id);

        $old_image = $slide->image;
        
        $slide->fill($request->all());
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $image = time()."-".$file->getClientOriginalName();
            $file->storeAs('/public/slide', $image);
        }
        else {
            $image = $old_image;
        }
        $slide->image = $image;
        $slide->save();
        return redirect('admin/slide')->with('success', 'Cập Nhật Thành Công!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slide = Slide::findOrFail($id);
        $slide->delete();
        return redirect('admin/slide')->with('success', "Xóa Thành Công!");
    }
}
