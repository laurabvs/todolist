<?php

try {

        $nouvelleConnexion = new PDO('mysql:host=localhost;dbname=todolist;charset=utf8', 'root', '');
    }
catch(Exception $e) {

            die('Erreur : '.$e->getMessage());
    }





?>