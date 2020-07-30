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
        if ($request->input('key') != null) {
            $kind = $request->input('key');
            $data = KindSport::where('key', $kind)->first();
            $_id = $data->id;
            // var_dump($_id);die();
            if ($kind == 'quanao') {
                session(['kind'=>$_id]);
                return redirect()->action('\App\Http\Controllers\Admins\ProductController@createClothes', ['kind' => $_id]);
            }
            elseif ($kind== 'giay') {
               session(['kind'=>$_id]);
               return redirect()->action('\App\Http\Controllers\Admins\ProductController@createShoes', ['kind' => $_id]);
           }
           elseif ($kind== 'thucpham') {
               session(['kind'=>$_id]);
               return redirect()->action('\App\Http\Controllers\Admins\ProductController@createFoods', ['kind' => $_id]);
           }
           elseif ($kind== 'phukien') {
               session(['kind'=>$_id]);
               return redirect()->action('\App\Http\Controllers\Admins\ProductController@createClothes', ['kind' => $_id]);
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

public function createClothes(){
    $producers = Producer::get();
    return view('admin.product.createClothes',[
        'producers' => $producers,
    ]);
}
public function createShoes(){
    $producers = Producer::get();
    return view('admin.product.createShoes',[
        'producers' => $producers,
    ]);
}
public function createFoods(){
    $producers = Producer::get();
    return view('admin.product.createFoods',[
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

    public function storeshoes(Request $request){
     $rules = [
        'name_pro' => 'required|string|max:191',
        'kind_sport_id' => 'required|max:191',
        'producer_id' => 'required|max:191',
        'content' => 'required|max:191',
    ];        
    $request->validate($rules);
    $sizes = $request->input('size');
    $quantities = $request->input('quantity');
        // var_dump($sizes);die();

    $product = new Product;
    $product->fill($request->all());
    $file = $request->file('image');
    $image = time() . "-". $file->getClientOriginalName();
    $file->storeAs('public/product', $image);
    $product->image = $image;
    $product->save();
        // $product_id = $product->id;
    if(isset($size) && count($size)>0) {
        for ($i=0; $i < count($sizes); $i++) { 
            $prDetails = new ProductDetail;
            $prDetails->product_id = $product->id;
            $prDetails->size = $sizes[$i];
            $prDetails->quantity = $quantities[$i];
            $prDetails->original_price = $request->input('original_price');
            $prDetails->sell_price = $request->input('sell_price');
            $prDetails->save();
        }
    }
    
    session()->forget('kind');
    return redirect('admin/product')->with('success', "Thêm mới thành công");
}

public function storefoods(Request $request){
    $rules = [
        'name_pro' => 'required|string|max:191',
        'kind_sport_id' => 'required|max:191',
        'producer_id' => 'required|max:191',
        'content' => 'required|max:191',
    ];        
    $request->validate($rules);
    $sizes = $request->input('size');
    $quantities = $request->input('quantity');
    $price1 = $request->input('original_price');
    $price2 = $request->input('sell_price');
        // var_dump($sizes);die();

    $product = new Product;
    $product->fill($request->all());
    $file = $request->file('image');
    $image = time() . "-". $file->getClientOriginalName();
    $file->storeAs('public/product', $image);
    $product->image = $image;
    $product->save();
        // $product_id = $product->id;

    for ($i=0; $i < count($sizes); $i++) { 
        $prDetails = new ProductDetail;
        $prDetails->product_id = $product->id;
        $prDetails->size = $sizes[$i];
        $prDetails->quantity = $quantities[$i];
        $prDetails->original_price = $price1[$i];
        $prDetails->sell_price = $price2[$i];
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
