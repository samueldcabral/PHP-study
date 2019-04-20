<?php
namespace Vector;

class ArrayUtil
{

  public function __construct($array)
  {
    $this->array = $array;
  }

  public function rotLeft($d)
  {
    $arr = [];
    foreach($this->array as $index=>$value){
      $newIndex = $index - $d;
      $actualIndex = ($newIndex < 0 ? $newIndex + sizeof($this->array) : $newIndex);
      $arr[$actualIndex] = $value;
    }
    return $arr;
  }

  public function stats()
  { 
    $proportionArr = [];
    $biggerZero = 0;
    $zeros = 0;
    $smallerZero = 0;

    foreach($this->array as $value) {
      if($value > 0) { 
        $biggerZero++;
      }elseif($value < 0) {
        $smallerZero++;
      }else{
        $zeros++;
      }
    }

    $proportionArr[] = number_format(($biggerZero/sizeof($this->array)), 6);
    $proportionArr[] = number_format(($smallerZero/sizeof($this->array)), 6);
    $proportionArr[] = number_format(($zeros/sizeof($this->array)), 6);

    return $proportionArr;
  }

  public function miniMaxSum()
  {
    $finalArr = [];
    sort($this->array);
    $tempSum = 0;

    for($x = 0; $x < sizeof($this->array) - 1; $x++) {
      $tempSum += $this->array[$x];
    }

    $finalArr[] = $tempSum;
    $tempSum = 0;

    for($x = 1; $x < sizeof($this->array); $x++) {
      $tempSum += $this->array[$x];
    }

    $finalArr[] = $tempSum;

    return $finalArr;
  }


  public function highestFrequency()
  {
    $seenArr = [];

    foreach($this->array as $number) {
      if(array_key_exists($number, $seenArr)) {
        $seenArr[$number] = $seenArr[$number] += 1;
      } else {
        $seenArr[$number] = 1;
      }
    }

    $finalNumber = 0;
    $index = array_keys($seenArr)[0];
    $biggerNum = $seenArr[$index];

    foreach($seenArr as $index=>$number) {
      if($biggerNum < $number) {
        $biggerNum = $number;
        $finalNumber = $index;
      }
    }

    return $finalNumber;
  }
}
