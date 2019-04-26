<?php

namespace CatAndMouse;

class CatAndMouse
{
  public static function result($x, $y, $z)
  {
    // TODO
    $catA = $x;
    $catB = $y;
    $mouseC = $z;
    
    $distanciaGatoA = abs($x - $z);
    $distanciaGatoB = abs($y - $z);


    if($distanciaGatoA < $distanciaGatoB) {
      return "Cat A";
    } else if($distanciaGatoB < $distanciaGatoA) {
      return "Cat B";
    } else {
      return "Mouse C";
    }

  }
}
