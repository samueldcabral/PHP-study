<?php

class Product
{
  public $id;
  public $name;
  public $price;

  public function __construct($id, $name, $price = null)
  {
    // TODO
    $this->id = $id;
    $this->name = $name;
    $this->price = $price;
  }
}
