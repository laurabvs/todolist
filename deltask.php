<?php 

    include 'bdd.php';

    if(isset($_GET['del_id'])) {
    $id = $_GET['del_id'];
    $sql = "DELETE FROM tache WHERE id=$id";
    $nouvelleConnexion->exec($sql);
}
?>