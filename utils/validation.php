<?php

function IdentificationIsValid(String $name, String $id) {
    $error = false;
    if($name !== '') {
        $error = true;
    } elseif ($id !== '') {
        if(intval($id) > 0 && intval($id) <= 151) {
            $error = true;
        } else {
            $error = false;
        }
    }
    return $error;
}

function EmptyMessage($message = 'Pesquise um pokemon') {
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