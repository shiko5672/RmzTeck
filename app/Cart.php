<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart
{
public $items=[];
public $totalQty;
public $totalprice;



public function __construct($cart=null)
{
    if($cart){
        $this->items = $cart->items;
        $this->totalQty = $cart->totalQty;
        $this->totalprice = $cart->totalprice;

    }
//    else{
//        $this->items = null;
//        $this->totalQty = 0;
//        $this->totalprice = 0;
//
//    }
}
public function add($product){
    $item =[
        'title'=> $product->title,
        'price'=> $product->price,
        'qty'=>0,
        'image'=> $product->image,




        ];

    if(! array_key_exists($product->id, $this->items)){
        $this->items[$product->id] = $item;
        $this->totalQty += 1;
        $this->totalprice += $product->price;



    }else{
        $this->totalQty += 1;
        $this->totalprice += $product->price;
    }
    $this->items[$product->id]['qty'] += 1;
}


}
