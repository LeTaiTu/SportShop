<?php

namespace App;

use App\Models\Product;

class Cart
{
	public $items = null;
	public $qtyItem = 0;
	public $totalQty = 0;
	public $totalPrice = 0;
	public $totalPricePromotion = 0;

	public function __construct($oldCart){
		if($oldCart){
			$this->items = $oldCart->items;
			$this->qtyItem = $oldCart->qtyItem;
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
		$i = 0;
		$giohang = [];
		$qty = $quantity;
		if($this->items){
			if(array_key_exists($item->id, $this->items)){
				$giohang = $this->items[$item->id];
				$qty = $giohang['qty'] + $quantity;
			}
			else{
				$qty = $quantity;
			}
			
		}
		
		$giohang = ['qty'=> $qty, 'image' => $image, 'size' => $size, 'name' => $name, 'ori_price' => $original, 'price' => $price, 'item' => $item];

		$this->items[$item->id] = $giohang;
		
		$totalPrice_inline = 0;
		$totalPricePromotion_inline = 0;
		foreach ($this->items as $key => $item) {
			$totalPrice_inline += $item['price'] * $item['qty'];
			$totalPricePromotion_inline += (($item['ori_price'] - $item['price']) * $item['qty']);
			$i++;
		}
		$this->totalQty = $i;
		$this->totalPrice = $totalPrice_inline;
		$this->totalPricePromotion = $totalPricePromotion_inline;
		$this->qtyItem = $qty;
		//@dd($this->items);
	}
	
	//xóa theo san pham (1 san pham co nhieu so luong)
	public function removeItem($id){
		//@dd($this->items[$id]);
		$this->totalQty--;
		$this->totalPrice -= $this->items[$id]['price']*$this->items[$id]['qty'];
		$this->totalPricePromotion -= ($this->items[$id]['ori_price'] - $this->items[$id]['price']) * $this->items[$id]['qty'];
		unset($this->items[$id]);
	}
}
