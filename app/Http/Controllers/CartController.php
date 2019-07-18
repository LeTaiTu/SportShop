<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Cart;
use Session;
use Hash;
use Auth;
use App\Models\Product;
use App\Models\ProductDetail;
use App\Models\Slide;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    // chi tiet san pham
    public function detail($id,$size)
    {
        $product = Product::findOrFail($id);
        $slide = Slide::where('id_details',$id)->get();
        //@dd($slide);
        $product_details = ProductDetail::where('product_id',$id)->get();

        //$detail_size = ProductDetail::findOrFail($size);
        $get_size = $size;
         // san pham tuong tu lay nhung san pham cung loai kind sport id
        $pro_similar = Product::where('kind_sport_id',$product->kind_sport_id)->get();
        
        $details_similar = ProductDetail::query()->paginate(5);
        //@dd($details_similar);
        $total_quantity = 0;
        foreach($product_details as $pdetail) {
            $total_quantity += $pdetail->quantity;
        }
        
        return view('detail_product',compact('product','product_details','slide','pro_similar','details_similar','total_quantity','get_size'));
    }

    // them vao gio hang
    public function getAddtoCart(Request $req, $id, $size) {
        $product = Product::find($id);
        $pro_detail = ProductDetail::where('product_id',$id)->where('size',$size)->first();
        // @dd($pro_detail);
        $quantity = $req->quantity;
        $oldCart = Session('cart') ? Session::get('cart') : null; 
        $cart = new Cart($oldCart);
        $cart->add($pro_detail, $id, $quantity);
        if(count($cart->items) > 0){
            $req->session()->put('cart',$cart);
        }
        else {
            Session::forget('cart'); // bo session
        }
        //return redirect()->back();
        return redirect('/'.$id.'/'.$size.'/detail');
    }

    public function getOrder() {
        
        return view('cart');
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
        //
    }
}
