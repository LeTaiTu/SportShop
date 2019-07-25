<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Auth;
use App\Models\Product;
use App\Models\ProductDetail;
use App\Models\Slide;
use App\Models\KindSport;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // menu khuyen mai
    public function sale() {
        $product_sale = Product::get();
        $detail_sale = ProductDetail::get();
        return view('sale', compact('product_sale','detail_sale'));
    }
    public function clothes() {
        // id
        $id_clothers = KindSport::where('key','like','quanao')->first();

        $product_all = Product::where('kind_sport_id',$id_clothers->id)->get();
        $detail_all = ProductDetail::where('kind_sport_id',$id_clothers->id)->get();
        return view('quanao', compact('product_all','detail_all'));
    }
    public function shoes() {

        $id_shoes = KindSport::where('key','like','giay')->first();

        $product_all = Product::where('kind_sport_id',$id_shoes->id)->get();
        $detail_all = ProductDetail::where('kind_sport_id',$id_shoes->id)->get();
        return view('giay', compact('product_all','detail_all'));
    }
    public function foods() {

        $id_foods = KindSport::where('key','like','thucpham')->first();

        $product_all = Product::where('kind_sport_id',$id_foods->id)->get();
        $detail_all = ProductDetail::where('kind_sport_id',$id_foods->id)->get();
        return view('thucpham', compact('product_all','detail_all'));
    }
    public function accessories() {
        
        $id_accessories = KindSport::where('key','like','phukien')->first();

        $product_all = Product::where('kind_sport_id',$id_accessories->id)->get();
        $detail_all = ProductDetail::where('kind_sport_id',$id_accessories->id)->get();
        return view('phukien', compact('product_all','detail_all'));
    }
}
