<?php

namespace Cipher;

function array_rotate($array, $n)
{
  $length = sizeof($array);
  return \array_merge(\array_slice($array, $n, $length), \array_slice($array, 0, $n));
}

function array_rot($array, $n)
{
  $strResult = "";

  foreach($array as $char) {
    if(ord($char) > 64 && ord($char) < 91) {

      $newChar = (ord($char) + $n > 90 ? (ord($char) + $n) % 90 + 64 : ord($char) + $n % 90);
      $strResult = $strResult . chr($newChar);

    } else if(ord($char) > 96 && ord($char) < 123) {

      $newChar = (ord($char) + $n > 122 ? (ord($char) + $n) % 122 + 96 : ord($char) + $n % 122);
      $strResult = $strResult . chr($newChar);

    } else {

      $strResult = $strResult . $char;

    }
  }
  return $strResult;
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
      $str = array_rot($explodedArr, $x);
      $rotationsArr["rot".$x] = $str;
    }

    return $rotationsArr;
  }
}