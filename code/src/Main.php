<?php

require_once('./../src/Controller/ControlleurAnnonces.php');
require_once('./../src/Controller/ControlleurFavoris.php');
class Main
{
    static function run()
    {
        $task = "afficher";
        $controller = "Controlleur"."Annonces";
        if (!empty($_GET['task'])) {
            $task = $_GET['task'];
        }
        if (!empty($_GET['id'])) {
            $id = $_GET['id'];
        }
        if (!empty($_GET['controller'])) {
            $controller = "Controlleur".$_GET['controller'];
        }
        
        $page = new $controller();
        $page->$task($task,$id);
    }
}
