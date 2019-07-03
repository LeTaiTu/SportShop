<?php

namespace App\Http\Controllers\Admins;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\KindSport;
use App\Models\Producer;
use App\Models\ProductDetail;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::query()->paginate(15);
        // foreach ($products as $product) {
        //     $details[$product->id] = ProductDetail::where('product_id', $product->id)->get();
        // }
        // echo "<pre>";;var_dump($products);die();
        $details = ProductDetail::get();
        // echo "<pre>";var_dump($details);die();
        // foreach ($details as $value) {
        //     var_dump($value->id);
        // }
        // die();
        return view('admin.product.index',['products'=>$products, 'details'=>$details]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if ($request->input('kind_sport_id') != null) {
            $kind = $request->input('kind_sport_id');
            if ($kind == 1) {
                session(['kind'=>$kind]);
                return redirect()->action('\App\Http\Controllers\Admins\ProductController@createClothes', ['kind' => $kind]);
            }
            else{
                return "Found";
            }
        } else {
            $kind_sports = KindSport::get(); 
            return view('admin.product.create',[
                'kind_sports' => $kind_sports,
            ]);
        }
        
        
    }

    public function createClothes()
    {
        $producers = Producer::get();
        return view('admin.product.createClothes',[
            'producers' => $producers,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'name_pro' => 'required|string|max:191',
            'kind_sport_id' => 'required|max:191',
            'producer_id' => 'required|max:191',
            'content' => 'required|max:191',
        ];        
        $request->validate($rules);
        $sizes = $request->input('txtSize');
        $options = $request->input('txtOptions');
        // var_dump($sizes);die();

        $product = new Product;
        $product->fill($request->all());
        $file = $request->file('image');
        $image = time() . "-". $file->getClientOriginalName();
        $file->storeAs('public/product', $image);
        $product->image = $image;
        $product->save();
        // $product_id = $product->id;
        
        foreach($sizes as $key => $data) {
            $prDetails = new ProductDetail;
            $prDetails->product_id = $product->id;
            $prDetails->size = $data;
            $prDetails->quantity = $options[$data]['txtQuantity'];
            $prDetails->original_price = $options[$data]['txtPriceOri'];
            $prDetails->sell_price = $options[$data]['txtPriceSell'];
            $prDetails->save();
        }
        session()->forget('kind');
        return redirect('admin/product')->with('success', "Thêm mới thành công");
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
        $products = Product::findOrFail($id);
        $producers = Producer::where("active", 1)->get();
        $kind_sports = KindSport::get(); 
        $prDetails = ProductDetail::where("product_id",$id)->get();
        return view('admin.product.edit', [
            'products'=>$products,
            'producers'=>$producers,
            'kind_sports'=>$kind_sports,
            'prDetails'=>$prDetails,
        ]);
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
