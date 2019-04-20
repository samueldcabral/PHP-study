<?php
namespace String;

class StringUtil
{

  public static function repeatedString($s, $n): int
  {
    // TODO
    $aCount = 0;
    for($x = 0; $x < strlen($s); $x++) {
      if($s[$x] === "a") {
        $aCount++;
      }
    }

    if($aCount === strlen($s)) {
      return $n;
    }

    $totalCount = 0;
    $repeatTimes = ceil($n/strlen($s));
    $newStr = str_repeat($s, $repeatTimes);

    for($x = 0; $x < $n; $x++) {
      if($newStr[$x] === "a") {
        $totalCount++;
      }
    }
    return $totalCount;
  }

  public static function mirrorSequence($a, $b)
  {
    // TODO
    $str = "";
    
    for($x = $a; $x <= $b; $x++) {
      $str = $str . $x;
    }

    for($x = $b; $x >= $a; $x--) {
      $str = $str . strrev($x);
    }

    return $str;
  }

  public static function zeroMeansZero($a, $b)
  {
    // TODO
    //$str = $a+$b . "";
    return str_replace ("0" , "", $a+$b . "");
  }

  public static function numberOfLeds($number)
  {
    // TODO
    $dict = [1 => 2, 
             2 => 5,
             3 => 5,
             4 => 4,
             5 => 5,
             6 => 6,
             7 => 3,
             8 => 7,
             9 => 6,
             0 => 6];

    $num = 0;

    for($x = 0; $x < strlen($number); $x++) {
      $num += $dict[intval($number[$x])];
    }
    return $num;
  }
}
