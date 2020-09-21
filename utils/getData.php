<?php 

function GetPokemonData(String $identification) {
    $json = file_get_contents("https://pokeapi.co/api/v2/pokemon/{$identification}");

    return json_decode($json);
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