<?php
namespace App\Models;

abstract class ModelManager
{
    public function connect()
    {
        try {
            // On se connecte à MySQL
            $bdd = new \PDO('mysql:host=***;dbname=***;charset=utf8', '***', '***', array(\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION));

            return $bdd;
            
        } catch (Exception $e) {
            // En cas d'erreur, on affiche un message et on arrête tout
            die('Erreur : '.$e->getMessage());
        }
    }
}
/*
dans cette classe, il faut ABSOLUMENT insérer le '\' avant PDO qui est une class qui se trouve à la racine(namespace global) */
 
