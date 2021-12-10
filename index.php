<link rel="stylesheet" href="index.css" />

<?php
 
 

include 'bdd.php';
 
 
     

 
if (isset($_POST['creer_tache'])) { 
    if (empty($_POST['creer_tache'])) {  
        $erreurs = 'Vous devez indiquer la valeure de la tâche';
    } else {
        $nom = $_POST['creer_tache'];
       //$etat = 0
        $sql = "INSERT INTO tache (nom) VALUES ('$nom')"; 
        //$lesDonnees->bindParam(':nom', $nom);
      $nouvelleConnexion->exec($sql);

      
    }
}


include 'deltask.php';

?>


<div class="header">
    <p class="header_titre">Ma super To do List ! </p>
</div>
 
 
    <form class="taches_input" method="post" action="index.php">
        <input id="inserer" type="text" name="creer_tache"/>
        <button id="envoyer">Créer</button>
    </form>

    <?php
   if (isset($erreurs)) {
    echo $erreurs;
   }
  ?>
 <table class="taches">
    <tr>
        <th>
            N
        </th>
        <th>
            Nom
        </th>
        <th>
            Fait ou à faire
        </th>
        <th>
            Supprimer
        </th>
        <th>
            Modifier
        </th>
        
    </tr>
    <?php
    $reponse = $nouvelleConnexion->query('Select * from tache'); 
    while ($tache = $reponse->fetch()) { 
        ?>
        <tr>
            <td><?php echo $tache['id'] ?></td>
            <td><?php echo $tache['nom'] ?></td>
            <?php include 'uptask.php'; ?>
            <td><?php if($tache['etat'] == 0 ){
    echo 'A faire';


}else {
    echo 'Fait';
} 
?>
</td>
            <td><a class="suppr" href="index.php?del_id=<?php echo $tache['id'] ?>"> X</a></td>
           
            <td><a class="update" href="index.php?uptask=<?php echo $tache['id'] ?>"> V</a></td>
        </tr>
        <?php
    }
 
 
    ?>
 
 
</table>
  