<?php

//sudo docker run -it --rm --name my-running-script -v "$PWD":/usr/src/myapp -w /usr/src/myapp php:7.2-cli php index.php

// TODO for
for($i = 9; $i >= 0; $i--){
  for($j = 9; $j >= 0; $j--){
    if($j % 2 !== 0){
      echo sprintf($i . $j) . " ";
    }
  }
  echo "\n";

}
// TODO for

// Output:
// 99 97 95 93 91
// 89 87 85 83 81
// 79 77 75 73 71
// 69 67 65 63 61
// 59 57 55 53 51
// 49 47 45 43 41
// 39 37 35 33 31
// 29 27 25 23 21
// 19 17 15 13 11
// 09 07 05 03 01