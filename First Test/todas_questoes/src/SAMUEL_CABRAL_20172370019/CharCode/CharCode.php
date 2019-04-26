<?php

namespace CharCode;

class CharCode
{
  public static function sum($s)
  {
    // TODO
    $sumArr = \preg_split('//u', $s);
    $sum = 0;

    foreach($sumArr as $index=>$char) {
      if(ord($char) !== 0) {
        $sum += ord($char);
      }
    }
    return $sum; 
  }
}

