<?php

/**
 * $operator: '+', '-', '*', '/'
 */
function calc($operand1, $operand2, $operator)
{
  if($operator == "+")
  {
    return $operand1 + $operand2;
  } 
  elseif($operator == "-")
  {
    return $operand1 - $operand2;
  }
  elseif($operator == "*")
  {
    return $operand1 * $operand2;
  }
  elseif($operator == "/")
  {
    return $operand1 / $operand2;
  }
  else
  {
    return "not a valid operator";
  }
}

function calcWithEval($operand1, $operand2, $operator)
{
  // TODO 
  // Tips echo eval('return 1+1;');
  switch($operator){
    case "+":
      return eval('return $operand1 + $operand2;');
      break;
    case "-":
      return eval('return $operand1 - $operand2;');
      break;
    case "/":
      return eval('return $operand1 / $operand2;');
      break;
    case "*":
      return eval('return $operand1 * $operand2;');
      break;
  }
}
 