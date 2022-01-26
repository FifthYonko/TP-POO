<?php

class Favoris {
    protected $ligne;

    function __construct()
    {
        $this->ligne = array();
    }

    function add($var){
        array_push($this->ligne,$var);
        require_once('./../templates/Annonces/favoris.php');
    }
    function afficher(){
       require_once('./../templates/Annonces/favoris.php');
    }
}
