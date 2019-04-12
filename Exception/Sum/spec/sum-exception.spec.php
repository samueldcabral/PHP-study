<?php
require __DIR__ . '/../src/sum-exception.php';

describe('Store Tool', function () {
  it("passes if $closure throws the $expected exception", function() {
    $closure = function($a, $b){
    //  throw new Exception("message");
    if(is_numeric($a) && is_numeric($b))
    {
      echo "heuhe";
      return $a + $b;
    }
    else
    {
      echo " chegou aqui: ";
      throw new ArgumentCountError("not a number");
    }
    };
    //expect($closure)->toThrow();
    //expect($closure("tis", 4))->toThrow();
    expect($closure("tis", 5))->toThrow(new ArgumentCountError("not a number"));
    });
  });