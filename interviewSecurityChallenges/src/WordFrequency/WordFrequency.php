<?php

namespace WordFrequency;

function split($str, $len = 1)
{
  $arr = [];
  $length = mb_strlen($str, 'UTF-8');

  for ($i = 0; $i < $length; $i += $len) {
    $arr[] = mb_strtolower(mb_substr($str, $i, $len, 'UTF-8'));
  }

  return $arr;
}

class WordFrequency
{
  // TODO
  public static function stats($text) 
  {
    $arr = \WordFrequency\split($text);
    sort($arr);
    $countChars = [];
    $resultArr = [];

    foreach($arr as $char) {
      if(\array_key_exists($char, $countChars)) {
        $countChars[$char] = $countChars[$char] + 1;
      }else {
        $countChars[$char] = 1;
      }
    }

    for($x = 1; $x <= sizeof($arr); $x++) {
      $valueArr = [];

      foreach($countChars as $index=>$value) {
        if($value === $x) {
          $valueArr[] = $index;
          $resultArr[$x] = $valueArr;
        }
      }
    }

    return $resultArr;
  }
}
