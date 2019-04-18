<?php
namespace SockMerchant;

class SockMerchant
{
  public static function sockMerchant($socks): int
  {
    // TODO
    $pairs = [];
    $total = 0;

    foreach($socks as $sock) {
      if(array_key_exists($sock, $pairs)){
        $pairs[$sock] = $pairs[$sock] += 1;
      }else {
        $pairs[$sock] = 1;
      }
    }
    
    foreach($pairs as $pair) {
      if($pair % 2 === 0) {
        $total += $pair/2;
      }elseif($pair > 1) {
        $total++;
      }
    }
    return $total;
  }
}

