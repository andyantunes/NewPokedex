<?php

ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);
ini_set('xdebug.overload_var_dump', 1);

$URL_DATA = "https://pokeapi.co/api/v2/pokemon/";
$URL_IMAGE = "https://www.canalti.com.br/api/pokemons.json";

$pokemonObject = json_decode(file_get_contents($URL_DATA.'6'));

// var_dump($pokemonObject->name);