<?php

const salary = 3500;
$total = 0;

// TODO
switch(true){
  case salary < 1903.98:
    $total = salary * 0  - 0;
    echo "IRPF: $total";
    break;
  case salary < 2826.65:
    $total = salary * (7.5/100)  - 142.80;
    echo "IRPF: $total";
    break;
  case salary < 3751.05:
    $total = salary * (15/100)  - 354.80;
    echo "IRPF: $total";
    break;
  case salary < 4664.68:
    $total = salary * (22.5/100) - 636.13;
    echo "IRPF: $total";
    break;
  default:
    $total = salary * (27.5/100)  - 869.36;
    echo "IRPF: $total";
}
// Output: IRRF: 170.2
// tax = salary * taxRate - deduction

// Até 1.903,98	–	–
// De 1.903,99 até 2.826,65	7,5	142,80
// De 2.826,66 até 3.751,05	15,0	354,80
// De 3.751,06 até 4.664,68	22,5	636,13
// Acima de 4.664,68	27,5	869,36