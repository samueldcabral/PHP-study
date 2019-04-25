<?php

namespace RainbowTable;

function array_sampling($chars, $size, $combinations = [])
{
  if (empty($combinations)) {
    $combinations = $chars;
  }

  if ($size == 1) {
    return $combinations;
  }

  $new_combinations = [];

  foreach ($combinations as $combination) {
    foreach ($chars as $char) {
      $new_combinations[] = $combination . $char;
    }
  }

  return array_sampling($chars, $size - 1, $new_combinations);
}

class RainbowTable
{
  // TODO
  public static function cracker($text, $length) 
  {
    $arr = [];

    for($x = 96; $x <= 122; $x++) {
      for($y = 97; $y <= 122; $y++) {
        if($x === 96) {

          if(md5(chr($y)) === $text) {
            return chr($y);
          }
          
          $arr[md5($y)] = chr($y);

        } else {

          if(md5(chr($x) . chr($y)) === $text) {
            return chr($x) . chr($y);
          }

          $arr[md5(chr($x) . chr($y))] = chr($x) . chr($y);

        }
      }
    }
  }
}

$test = ['a', 'b', 'c'];

var_dump(\RainbowTable\array_sampling($test,3));