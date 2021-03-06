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
use App\Models\Order;
use App\User;
use App\Models\OrderDetail;

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
        //@dd($pro_similar);
        $details_similar = ProductDetail::get();
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
        if ($quantity > $pro_detail->quantity) {
            return redirect('/'.$id.'/'.$size.'/detail')->with('error', "Số lượng vượt quá ".$pro_detail->quantity);
        }
        $oldCart = Session('cart') ? Session::get('cart') : null; 
        $cart = new Cart($oldCart);
        $cart->add($pro_detail, $id, $quantity);
        if(count($cart->items) > 0){
            $req->session()->put('cart',$cart);
        }
        else {
            Session::forget('cart'); // bo session
        }
        // giam so luong san pham da dat di
        $pro_detail->quantity -= $quantity;
        $pro_detail->save();
        return redirect('/'.$id.'/'.$size.'/detail');
    }

    public function getOrder() {
        if (session()->has('cart')) {
            return view('cart');
        }
        else {
            return redirect('/');
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function getDelItemCart($id) {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
        Session::put('cart',$cart);
        return redirect()->back();
    }
    
    public function payment(Request $request) {
        return view('/payment');
    }
    
    public function setOrder(Request $request) {

        $rules = ['name' => 'required|max:191',
                'phone' => 'required|max:191',
                'address' => 'required|max:191',
                'content' => 'required|max:191'
                ];
        
        //@dd(session('cart'));

        $orders = new Order;
        $orders->fill($request->all());
        if (Auth::guard('users')->check()) {
            $orders->id_customer = Auth::guard('users')->user()->id;
        }
        else {
            $orders->id_customer = 0;
        }
        $orders->amount = Session('cart')->totalPrice;
        $orders->status = 0;
        $orders->save();

        // order detail
        //@dd(session('cart'));
        foreach (session('cart')->items as $key => $item) {
            
            $order_details = new OrderDetail;
            $order_details->order_id = $orders->id;
            $order_details->product_detail_id = $item['item']['id'];
            $order_details->size = $item['size'];
            $order_details->quantity = $item['qty'];
            $order_details->price = $item['price'];
            $order_details->save();
        }
        session()->forget('cart');
        return redirect('/order_success');
    }

    public function successOrder()
    {
        return view('order_success');
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
