<?php

namespace App;

class Cart
{
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;

    public function __construct($oldCrt)
    {
        if($oldCrt) {
            $this->items = $oldCrt->items;
            $this->totalQty = $oldCrt->totalQty;
            $this->totalPrice = $oldCrt->totalPrice;
        }
    }


    /*
    * => Add Item
    */
    public function add($item, $id)
    {
        
        $storedItem = ['qty' => 0, 'amount' => $item->amount, 'item' => $item];
        if($this->items){
            if(array_key_exists($id, $this->items)) {
                $storedItem = $this->items[$id];
            }
        }

        $storedItem['qty']++;
        $storedItem['amount'] = $item->amount * $storedItem['qty'];
        $this->items[$id] = $storedItem;
        $this->totalQty++;
        $this->totalPrice += $item->amount;

    }


    public function reduceByOne($id) {
        $this->items[$id]['qty']--;
        $this->items[$id]['amount'] -= $this->items[$id]['item']['amount'];
        $this->totalQty--;
        $this->totalPrice -= $this->items[$id]['item']['amount'];
        if ($this->items[$id]['qty'] <= 0) {
            unset($this->items[$id]);
        }
    }
    public function removeItem($id) {
        $this->totalQty -= $this->items[$id]['qty'];
        $this->totalPrice -= $this->items[$id]['amount'];
        unset($this->items[$id]);
    }
}