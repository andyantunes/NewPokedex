<?php

include_once ('./utils/validation.php');
include_once ('./utils/convert.php');
include_once ('./utils/getData.php');

ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);
ini_set('xdebug.overload_var_dump', 1);

function GetPokemon() {
    $id = (isset($_POST['pokemonId'])) ? $_POST['pokemonId'] : '';
    $name = (isset($_POST['pokemonName'])) ? $_POST['pokemonName'] : '';
    
    if (isset($_POST['search']) && HasIdentification($id, $name)) {
        $identification = ($_POST['pokemonId']) ? FilterId($_POST['pokemonId']) : strtolower($_POST['pokemonName']);
        
        if(($identification > 0 || $identification != '') && $identification <= 151) {
            $pokemonData = GetPokemonData($identification);
            $pokemonObject = MountFinalObject($pokemonData);
        } else {
            $pokemonObject = InvalidIdentification('151 pokemons cadastrados');
        }
    } else {
        $pokemonObject = InvalidIdentification();
    }

    return $pokemonObject;
}

