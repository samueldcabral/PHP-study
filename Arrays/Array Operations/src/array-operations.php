<?php

function sum($array)
{
  // TODO
  $result = 0;
  foreach($array as $arr)
  {
    $result += $arr;
  }
  return $result;
}

function product($array)
{
  // TODO
  $result = 1;
  foreach($array as $arr)
  {
    $result *= $arr;
  }
  return $result;
}

function sumOdds($array)
{
  // TODO
  $result = 0;
  foreach($array as $arr)
  {
    $arr % 2 == 0 ? $result += 0 : $result += $arr;
  }
  return $result;
}
