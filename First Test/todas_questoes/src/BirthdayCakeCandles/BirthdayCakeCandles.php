<?php

namespace BirthdayCakeCandles;

class BirthdayCakeCandles
{
  public static function blowOut($candles)
  {
    // TODO
    $biggerNum = $candles[0];
    $biggerSum = 0;

    foreach($candles as $candle) {
      if($biggerNum < $candle) {
        $biggerNum = $candle;
      }
    }
    
    foreach($candles as $candles) {
      if($candles === $biggerNum) {
        $biggerSum++;
      }
    }

    return $biggerSum;
  }
}
