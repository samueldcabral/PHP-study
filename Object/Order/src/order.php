<?php

class Order
{
  // TODO
  public $products = [];

  public function addProduct($product)
  {
    $this->products[] = $product;
  }

  public function total():int
  {
    $total = 0;
    foreach($this->products as $prod)
    {
      $total += $prod->price;
    }

    return $total;
  }
}
