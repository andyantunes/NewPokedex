<?php

ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);
ini_set('xdebug.overload_var_dump', 1);


$URL_IMAGE = "https://www.canalti.com.br/api/pokemons.json";

function GetPokemon() {
    if(HasIdentification($_POST['pokemonName'], $_POST['pokemonId'])) {
        var_dump($_POST['pokemonName']);
        var_dump($_POST['pokemonId']);
    } else {
        echo 'oi';
    }
}

function GetPokemonData(String $identification) {
    $URL_DATA = "https://pokeapi.co/api/v2/pokemon/{$identification}";
    return json_decode(file_get_contents($URL_DATA));
}

function IdentificationEmpty() {
    return (object) [
        'id' => '',
        'name' => '',
        'types' => '',
        'description' => '',
        'attack' => '',
        'defense' => '',
        'speed' => '',
    ];
}

function MountFinalObject(Object $pokemonObject) {
    return (object) [
        'id' => $pokemonObject->id,
        'name' => $pokemonObject->name,
        'types' => $pokemonObject->types,
        'description' => '',
        'attack' => $pokemonObject->stats[1]->base_stat,
        'defense' => $pokemonObject->stats[2]->base_stat,
        'speed' => $pokemonObject->stats[5]->base_stat,
    ];
}

function HasIdentification($name, $id) {
    return ($name !== '' || $id !== '') ? true : false;
}
