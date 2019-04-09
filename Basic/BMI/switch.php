<?php

// BMI = weight/height²

$weight = 80.0;
$height = 1.65;
$result =  $weight / ($height**2);

switch (true) {
  case $result < 18.5:
      echo "BMI: $result";
      echo "\nResult: Underweight\n";
      break;
  case $result <24.9:
      echo "BMI: $result";
      echo "\nResult: Normal Weight\n";
      break;
  case $result <29.9:
      echo "BMI: $result";
      echo "\nResult: Overweight\n";
      break;
  default:
      echo "BMI: $result";
      echo "\nResult: Obesity\n";
}

// TODO if

// Output:
//  BMI: 22.038567493113
//  Result: Normal weight


