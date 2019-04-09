<?php

const size = 10;
$sum = 0;

for($i = 1; $i <= size; $i++){
  $sum += 1/$i;
}

echo "h(" . size . "): $sum%";
echo "\n";
// h = 1/1 + 1/2 + ... + 1/n
// TODO h(10)
// Output: h(10): 2.9289682539683% 
