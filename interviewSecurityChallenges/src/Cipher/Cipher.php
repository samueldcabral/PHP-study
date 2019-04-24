<?php

namespace Cipher;

function array_rotate($array, $n)
{
  $length = sizeof($array);
  return \array_merge(\array_slice($array, $n, $length), \array_slice($array, 0, $n));
}

class Cipher
{
  // TODO
  public static function allRots($message)
  {
    $rotationsArr = [];
    // $explodedArr = \explode("", $message);
    $explodedArr = \str_split($message);


    for($x = 1; $x <= 25; $x++) {
      $rotationsArr["rot".$x] = \Cipher\array_rotate($explodedArr, $x);
    }

    return $rotationsArr;
  }
}
