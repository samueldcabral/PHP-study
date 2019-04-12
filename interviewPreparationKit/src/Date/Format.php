<?php
namespace Date;

class Format
{
  public static function long($date)
  {
    // TODO
    $result = explode("/", $date);
    $meses = ["01" => "janeiro", 
              "02" => "fevereiro", 
              "03" => "março",
              "04" => "abril",
              "05" => "maio",
              "06" => "junho",
              "07" => "julho",
              "08" => "agosto",
              "09" => "setembro",
              "10" => "outubro",
              "11" => "novembro",
              "12" => "dezembro"
  ];

    return $result[0] . " de " . $meses[$result[1]] . " de " . $result[2];
}
}