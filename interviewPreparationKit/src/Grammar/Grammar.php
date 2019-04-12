<?php
namespace Grammar;

class Grammar
{
  public static function spelling($word)
  {
    // TODO
    $result = explode(" ", $word);
    $arr = [];
    $final = "";

    foreach($result as $letter)
    {
      $res = preg_split('//u', $letter);
      
      for($x = 0; $x < sizeof($res); $x++)
      {
        if($res[$x] !== "")
        {
          $arr[] = mb_strtoupper($res[$x], 'UTF-8');
        }
      }
    }

    for($x = 0; $x < sizeof($arr); $x++)
    {
      if($x < sizeof($arr)-1)
      {
        $final = $final . $arr[$x] . "-";
      }
      else
      {
        $final = $final . $arr[$x];
      }
    }

    return $final;
  }
}
