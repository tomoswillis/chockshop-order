<?php

namespace App\Models;

class Cart 
{
    public $items = [];
    public $totalQty = 0;
    public $totalPrice = 0;
    
    public function __construct($oldCart)
    {
        if($oldCart) {

            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }

    public function add($item, $id, $qty) 
    {
        $storedItem = [
            'qty' => 0,
            'price' => $item->price,
            'item' => $item,
        ];
        if($item) {
            if (array_key_exists($id, $this->items)){
                $storedItem = $this->items[$id];
            }
        }

        
        
        $storedItem['qty'] += $qty;
        
        $storedItem['price'] = $item->price * $storedItem['qty'];
        
        $this->items[$id] = $storedItem;
        $this->totalQty += $qty;
        $this->totalPrice += $item->price * $qty;
    }

    public function remove($id) {
        if(is_integer($id)) {
            if (array_key_exists($id, $this->items)){
                $this->totalPrice -= $this->items[$id]['price'] ;
                $this->totalQty -= $this->items[$id]['qty'];
                unset($this->items[$id]);
            }
        }
       
    }

}
