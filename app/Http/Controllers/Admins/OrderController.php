<?php

namespace App\Http\Controllers\Admins;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;

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
        return view('admin.orders.detail');
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
        $orders = Order::findOrFail($id);
        $orders->delete();
        // tra lai so luong san pham cho sql
        return redirect('admin/orderadmin');
    }
}
