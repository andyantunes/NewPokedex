<?php

function HasIdentification(String $name, String $id) {
    return ($name !== '' || $id !== '') ? true : false;
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

function FilterId($id) {
    return preg_replace('/[^0-9]/', '', $id);
}