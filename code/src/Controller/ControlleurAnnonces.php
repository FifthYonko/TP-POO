<?php
require_once('./../src/Entity/Annonces.php');
require_once('./../src/Entity/Favoris.php');
class ControlleurAnnonces{
    

    function afficher($var){
        $annonces = new Annonces();
        
        $annonces->$var();
    }
   
    function addfavori($task,$id){
        $fav = new Favoris();
        $annonce = new Annonces();
        $annonce->$task($id,$fav);
    }
    
}