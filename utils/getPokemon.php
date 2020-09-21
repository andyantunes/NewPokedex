<?php

ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);
ini_set('xdebug.overload_var_dump', 1);

function GetPokemon() {
    $id = (isset($_POST['pokemonId'])) ? $_POST['pokemonId'] : '';
    $name = (isset($_POST['pokemonName'])) ? $_POST['pokemonName'] : '';
    
    if (isset($_POST['search']) && HasIdentification($id, $name)) {
        $identification = ($_POST['pokemonName']) ? strtolower($_POST['pokemonName']) : $_POST['pokemonId'];
        $pokemonData = GetPokemonData($identification);
        
        if($pokemonData->id <= 151) {
            $pokemonObject = MountFinalObject($pokemonData);
        } else {
            $pokemonObject = InvalidIdentification('151 pokemons cadastrados');
        }
    } else {
        $pokemonObject = InvalidIdentification();
    }

    return $pokemonObject;
}

function GetPokemonData(String $identification) {
    $json = "https://pokeapi.co/api/v2/pokemon/{$identification}";

    return json_decode(file_get_contents($json));
}

function InvalidIdentification($message = 'Pesquise um pokemon') {
    return (object) [
        'id' => '',
        'name' => '',
        'types' => '',
        'description' => '',
        'attack' => '',
        'defense' => '',
        'speed' => '',
        'image' => './assets/images/pokebola.gif',
        'image_back' => './assets/images/transparent.png',
        'message' => $message,
    ];
}

function MountFinalObject(Object $pokemonObject) {
    return (object) [
        'id' => "#{$pokemonObject->id}",
        'name' => $pokemonObject->name,
        'types' => ConvertTypesToString($pokemonObject->types),
        'description' => '',
        'attack' => "Ataque {$pokemonObject->stats[1]->base_stat}",
        'defense' => "Defesa {$pokemonObject->stats[2]->base_stat}",
        'speed' => "Rapidez {$pokemonObject->stats[5]->base_stat}",
        'image' => GetPokemonImage($pokemonObject->id),
        'image_back' => GetPokemonImage($pokemonObject->id),
        'message' => '',
    ];
}

function HasIdentification(String $name, String $id) {
    return ($name !== '' || $id !== '') ? true : false;
}

function ConvertTypesToString(Array $types) {
    $typesString = '';
    for ($i=0; $i < sizeof($types); $i++) { 
        $typesString .= ($i == 0) ? "{$types[$i]->type->name}" : " | {$types[$i]->type->name}";
    }
    return $typesString;
}

function GetPokemonImage($id) {
    // $URL_IMAGE = "https://www.canalti.com.br/api/pokemons.json";
    $URL_IMAGE = "./utils/pokemonImages.json";
    $obj = json_decode(file_get_contents($URL_IMAGE));
    $pokemonArray = $obj->pokemon;
    $url = '';
    
    for ($i=0; $i < sizeof($pokemonArray); $i++) { 
        if ($pokemonArray[$i]->id === $id) {
            $url = $pokemonArray[$i]->img;
            break;
        }
    }
    return $url;
}
