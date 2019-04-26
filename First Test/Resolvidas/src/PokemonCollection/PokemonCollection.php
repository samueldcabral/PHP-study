<?php

namespace PokemonCollection;

class PokemonCollection
{
  public static function notCaptured($pokemons)
  {
    // TODO
    $allPokemons = 151;
    $sumOfPokemons = 0;
    $tempArr = [];
    
    foreach($pokemons as $eachPoke) {
      if(!\array_key_exists($eachPoke, $tempArr)) {
        $sumOfPokemons++;
        $tempArr[$eachPoke] = 1;
      }
    }
    return $allPokemons - $sumOfPokemons;
  }
}
