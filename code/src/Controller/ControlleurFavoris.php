<?php
require_once('./../src/Entity/Favoris.php');
class ControlleurFavoris{
    

    function afficher(){
       $favoris = new Favoris();
       $favoris->afficher();
    }

    function retirefavori(){
        echo "pas trouve pr l'instant";
    }
}