<?php
require 'character.php';

class Comic
{
  // TODO
  public static $characters = [];

  public static function add($character)
  {
    self::$characters[] = $character;
    // array_push(self::$characters, $character);
  }

  public static function names($comic = "")
  {
    $names = [];
    if(!$comic)
    {
      foreach(self::$characters as $char)
      {
        $names[] = $char->hero;
      }
      
      sort($names, SORT_NATURAL | SORT_FLAG_CASE);
      return $names;
    }
    else
    {
      foreach(self::$characters as $char)
      {
        if($char->comic === $comic)
        {
          $names[] = $char->hero;
        }
      }
      
      sort($names, SORT_NATURAL | SORT_FLAG_CASE);
      return $names;
    }
  }

  public static function weights($comic = ""):float
  {
    $totalWeight = 0;
    $count = 0;

    if(!$comic)
    {
      foreach(self::$characters as $char)
      {
        $totalWeight += $char->weight;
      }
      
      return $totalWeight / sizeof(self::$characters);
    }
    else
    {
      foreach(self::$characters as $char)
      {
        if($char->comic === $comic)
        {
          $count++;
          $totalWeight += $char->weight;
        }
      }
      
      return $totalWeight / $count;
    }
  }

}

