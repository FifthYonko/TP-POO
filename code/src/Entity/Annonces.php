<?php

require_once('./../src/base.php');


class Annonces
{
    protected $pdo;
    
    function __construct()
    {
        $this->pdo = Base::bdd();
    }

    function afficher()
    {
       
        $sql = "Select * from annonce";
        $stmt = $this->pdo->query($sql);
        $resultat = $stmt->fetchAll();
        require_once('./../templates/Annonces/index.php');
    }
    function addfavori($id,$fav){
   
        $sql = "SELECT * from annonce where `id` = :id ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':id',$id);
        $stmt ->execute();
        $res = $stmt ->fetch();
        
        $fav->add($res);
        
    }

    function deleteByID($id){
        $sql = "DELETE  FROM annonce where `id` = :id ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':id',$id);
        $stmt ->execute();
        header('location: index.php');
    }
}