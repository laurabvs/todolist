<?php

include 'bdd.php';

    if(isset($_POST['ajouter'])){

    $lesDonnees = $nouvelleConnexion->prepare('INSERT INTO `tache` (`etat`, `nom`, `note`) VALUES (:etat, :nom, :note);');



    $lesDonnees->bindValue(':etat', $_POST['etat'], PDO::PARAM_STR);
    $lesDonnees->bindValue(':nom', $_POST['nom'], PDO::PARAM_STR);
    $lesDonnees->bindValue(':note', $_POST['note'], PDO::PARAM_STR);

    $insererTache = $lesDonnees->execute();


    if($insererCommande){
        $resultat = "<h5> Tâche ajouté </h5>";
    }else{
        $resultat = "<h5> Échec de l'ajout de la tâche </h5>";
    }
}
?>
<?php echo $resultat ?>

