<?php

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

function ConvertTypesToString(Array $types) {
    $typesString = '';
    for ($i=0; $i < sizeof($types); $i++) { 
        $typesString .= ($i == 0) ? "{$types[$i]->type->name}" : " | {$types[$i]->type->name}";
    }
    return $typesString;
}
