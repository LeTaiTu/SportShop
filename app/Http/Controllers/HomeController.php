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
use App\Models\KindSport;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // id
        $id_clothers = KindSport::where('key','like','quanao')->first();
        $id_shoes = KindSport::where('key','like','giay')->first();
        $id_foods = KindSport::where('key','like','thucpham')->first();
        $id_accessories = KindSport::where('key','like','phukien')->first();
        // lay du lieu tu id kindsport
        $product_sale = Product::query()->paginate(7);
        $pro_clothers = Product::where('kind_sport_id',$id_clothers->id)->paginate(5);
        $pro_shoes = Product::where('kind_sport_id',$id_shoes->id)->paginate(5);
        $pro_foods = Product::where('kind_sport_id',$id_foods->id)->paginate(5);
        $pro_accessories = Product::where('kind_sport_id',$id_accessories->id)->paginate(5);
        //@dd($pro_clothers);
        //@dd($pro_foods);
        // $product_details = ProductDetail::query()->paginate(5);
        $detail_sale = ProductDetail::get();
        $detail_clother = ProductDetail::where('kind_sport_id',$id_clothers->id)->get();
        //@dd($detail_clother);
        $detail_shoes = ProductDetail::where('kind_sport_id',$id_shoes->id)->get();
        $detail_food = ProductDetail::where('kind_sport_id',$id_foods->id)->get();
        $detail_accessories = ProductDetail::where('kind_sport_id',$id_accessories->id)->get();
        return view('home.home',compact('product_sale','detail_sale','pro_clothers','pro_shoes','pro_foods','pro_accessories','detail_clother','detail_shoes','detail_food','detail_accessories'));
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
