<?php

namespace App\Http\Controllers\Admins;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Cart;
use Session;
use App\Models\ProductDetail;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::query()->orderBy('created_at', 'desc')->paginate(5);
       
        return view('admin.orders.index', compact('orders'));
    }

    public function search(Request $req)
    {
        $orders = Order::where('name','like',"%".$req->txtsearch."%")
        ->orWhere('phone','like',"%".$req->txtsearch."%")
        ->orWhere('address','like',"%".$req->txtsearch."%")
        ->orderBy('created_at', 'desc')->paginate(3);
        return view('admin.orders.index', compact('orders'));
    }

    public function detail_order() {
        $order_details = OrderDetail::query()->orderBy('created_at', 'desc')->paginate(10);
        return view('admin.orders.detail', compact('order_details'));
    }
    
    public function detail_search(Request $req)
    {
        $order_details = OrderDetail::where('order_id','like',"%".$req->txtsearch."%")
        ->orderBy('created_at', 'desc')->paginate(10);
        return view('admin.orders.detail', compact('order_details'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
        $order_details = OrderDetail::where('order_id','like',$id)->orderBy('created_at', 'desc')->paginate(10);
       
        return view('admin.orders.detail', compact('order_details'));
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
        $orders = Order::findOrFail($id);
        $orders->status = $request->status;
        $orders->save();
        return redirect('admin/orderadmin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order_details = OrderDetail::findOrFail($id);
        // tra lai so luong san pham cho sql
        $id_detail = $order_details->product_detail_id;
        $id_order = $order_details->order_id;
        //@dd($id_order);
        $product_details = ProductDetail::findOrFail($id_detail);
        $product_details->quantity += $order_details->quantity;
        $product_details->save();
        // tra lai so tien san pham cho sql
        $orders = Order::findOrFail($id_order);
        $orders->amount -= ($order_details->quantity * $order_details->price);
        $orders->save();
        // huy san pham da dat
        $order_details->delete();
        return redirect('admin/orderdetail')->with('success', "Đã hủy thành công!");
    }

}
