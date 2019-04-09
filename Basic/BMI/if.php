<?php

// BMI = weight/height²

$weight = 40.0;
$height = 1.65;
$result =  $weight / ($height**2);

if($result < 18.5){
  echo "BMI: $result";
  echo "\nResult: Underweight\n";
}elseif($result < 24.9){
  echo "BMI: $result";
  echo "\nResult: Normal Weight\n";
}elseif($result < 29.9){
  echo "BMI: $result";
  echo "\nResult: Overweight\n";
}else{
  echo "BMI: $result";
  echo "\nResult: Obesity\n";
}


// TODO if

// Output:
//  BMI: 22.038567493113
//  Result: Normal weight


