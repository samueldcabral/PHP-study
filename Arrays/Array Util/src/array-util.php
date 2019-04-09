<?php

function minimum($array) 
{
  // TODO
  $min = $array[0];

  foreach($array as $arr){
    if($arr < $min){
      $min = $arr;
    }
  }
  
  return $min;
}



function maximum($array) 
{
  // TODO
  $max = $array[0];

  foreach($array as $arr){
    if($arr > $max){
      $max = $arr;
    }
  }
  
  return $max;
}

function rangeValues($length, $last=0, $step=0)
{
  // TODO
  $start = $last ? $length : $last;
  $end = $last ? $last : $length;
  $increment = $step ? $step : 1;
  $arr = [];

  for($num = $start; $num < $end; $num += $increment){
    $arr[sizeof($arr)] = $num;
  }

  return $arr;
}

// rangeValues(1,45,5);


function zip(...$arrays) 
{
  // TODO
  $arrTemp = [];
  $arrFinal = [];
  

  for($i = 0; $i < sizeof($arrays); $i++){
    for($j = 0; $j < sizeof($arrays); $j++){
      $arrTemp[$j] = $arrays[$j][$i];
    }
    $arrFinal[$i] = $arrTemp;
    $arrTemp = [];
  }

  return $arrFinal;
}

function uniq($array) 
{
  // TODO
//   var_dump(uniq([1, 2, 1, 4, 1, 3]));
// var_dump([1, 2, 4, 3]);

// // removing duplicate values in [1, 2, 1, 3, 3]
// var_dump(uniq([1, 2, 1, 3, 3]));
// var_dump([1, 2, 3]);
  $newArr = [];

  foreach($array as $arr) {
    if(!in_array($arr, $newArr)){
      $newArr[sizeof($newArr)] = $arr;
    }
  }
  return $newArr;
}

function sortNum($array) 
{
  sort($array);
  return $array;
} 