<?php

namespace App;

use App\Models\Product;

class Cart
{
	public $items = null;
	public $totalQty = 0;
	public $totalPrice = 0;
	public $totalPricePromotion = 0;

	public function __construct($oldCart){
		if($oldCart){
			$this->items = $oldCart->items;
			$this->totalQty = $oldCart->totalQty;
			$this->totalPrice = $oldCart->totalPrice;
			$this->totalPricePromotion = $oldCart->totalPricePromotion;
		}
	}

	 public function add($item, $id, $quantity){
       $price = 0;
       $promotion_price = 0;
       $image = '';
       $name = '';
       $qty = 0;
       $size = '';
       // gio hang bao gom
       // ten san pham
       // hinh anh
       // so luong lay tu trang dat hang
       // gia ca
       $product = Product::find($id);
       $image = $product->image;
       $name = $product->name_pro;
       $size = $item->size;
       $price = $item->sell_price;
       $original = $item->original_price;
       $qty = $quantity;

       $giohang = ['qty'=> $qty, 'image' => $image, 'size' => $size, 'name' => $name, 'ori_price' => $original, 'price' => $price, 'item' => $item];
      
       if($this->items){
              if(array_key_exists($item->id, $this->items)){
                     $giohang = $this->items[$item->id];
              }
       }
       //$giohang['qty']++;
       //$giohang['price'] = $price * $giohang['qty'];
       $this->items[$item->id] = $giohang;
       $this->totalQty++;
       $this->totalPrice += $price * $qty;
       $this->totalPricePromotion += (($original - $price) * $qty);
 }
	
	//xóa 1
	public function reduceByOne($id){
		$this->items[$id]['qty']--;
		$this->items[$id]['price'] -= $this->items[$id]['item']['price'];
		$this->totalQty--;
		$this->totalPrice -= $this->items[$id]['item']['price'];
		if($this->items[$id]['qty']<=0){
			unset($this->items[$id]);
		}
	}
	//xóa nhiều
	public function removeItem($id){
		$this->totalQty -= $this->items[$id]['qty'];
		$this->totalPrice -= $this->items[$id]['price'];
		unset($this->items[$id]);
	}
}
