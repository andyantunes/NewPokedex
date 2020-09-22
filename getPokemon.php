<?php

ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);
ini_set('xdebug.overload_var_dump', 1);

include_once ('./utils/validation.php');
include_once ('./utils/convert.php');
include_once ('./utils/getData.php');

function GetPokemon() {
    $id = (isset($_POST['pokemonId'])) ? $_POST['pokemonId'] : '';
    $name = (isset($_POST['pokemonName'])) ? $_POST['pokemonName'] : '';
    
    if(isset($_POST['search'])) {
        if(IdentificationIsValid($name, $id)) {
            $identification = ($_POST['pokemonId']) ? FilterId($_POST['pokemonId']) : strtolower($_POST['pokemonName']);

            $pokemonData = GetPokemonData($identification);
            $pokemonObject = ($pokemonData) ? MountFinalObject($pokemonData) : EmptyMessage('Pokemon Não existe');
        } else {
            $pokemonObject = EmptyMessage('151 pokemons cadastrados');
        }
    } elseif (isset($_POST['upAction'])) {
        $pokemonId = str_replace('#', '', $_POST['upAction']);

        $pokemonData = GetPokemonData($pokemonId + 1);
        $pokemonObject = ($pokemonData) ? MountFinalObject($pokemonData) : EmptyMessage('Pokemon Não existe');
    } elseif (isset($_POST['downAction'])) {
        $pokemonId = str_replace('#', '', $_POST['downAction']);

        $pokemonData = GetPokemonData($pokemonId - 1);
        $pokemonObject = ($pokemonData) ? MountFinalObject($pokemonData) : EmptyMessage('Pokemon Não existe');
    } else {
        $pokemonObject = EmptyMessage();
    }

    return $pokemonObject;
}

