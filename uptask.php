<?php

include "bdd.php";



if(isset($_GET['uptask'])) {
    $id = $_GET['uptask'];
    $sql = "UPDATE `tache` SET `etat`= 1 WHERE id=$id";
    $nouvelleConnexion->exec($sql);
}
?>
