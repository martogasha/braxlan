<?php

namespace App;


use http\Env\Request;

class Cat
{
   public $item = null;
   public $totalQty = 0;
   public $totalPrice = 0;

   public function __construct($oldCart)
   {
       if ($oldCart) {
           $this->item = $oldCart->item;
           $this->totalQty = $oldCart->totalQty;
           $this->totalPrice = $oldCart->totalPrice;


       }
   }
       public function add($item, $id){
           $storedItem = ['quantity'=>0, 'product_price'=>$item->price,'item'=>$item];
           if ($this->item){
               if (array_key_exists($id, $this->item)){
                   $storedItem = $this->item[$id];
               }
           }
           $storedItem['quantity']++;
           $storedItem['product_price']=$item->product_price * $storedItem['quantity'];
           $this->item[$id] = $storedItem;
           $this->totalQty++;
           $this->totalPrice += $item->product_price;
   }


}
