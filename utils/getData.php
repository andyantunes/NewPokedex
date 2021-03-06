<?php 

function GetPokemonData(String $identification) {
    if (file_get_contents("https://pokeapi.co/api/v2/pokemon/{$identification}")) {
        $data = file_get_contents("https://pokeapi.co/api/v2/pokemon/{$identification}");
        $return = json_decode($data);
    } else {
        $error = error_get_last();
        $return = false;
    }
    return $return;
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