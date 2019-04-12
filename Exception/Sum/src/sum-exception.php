<?php

function sum($a, $b)
{
  if(is_numeric($a) && is_numeric($b))
  {
    return $a + $b;
  }
  else
  {
    throw new ArithmeticError("not a number");
  }
}

// try {
//   sum("this", 2);
// }
// catch(Exception $e) {
//   echo "Error: " . $e.getMessage();
// }
// finally {
//   echo "O programa terminou";
// }
