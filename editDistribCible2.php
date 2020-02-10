<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Le grand guide officieux de GNU et Linux(libre)</title>
  </head>
  <body>
    <?php include ('header.php'); ?>

    <?php
    $g = $_POST['choiceOfDistrib'];
    $bdd = new PDO('mysql:host=localhost;dbname=gnu_guide;charset=utf8', 'root', '');
    //Ajout d'une entrée à la table distrib_list
    //$requete = $bdd->exec('UPDATE distrib_list SET nom_distrib = "\'.$_POST["distribName"].\'", environnement_bureau = "\'.$_POST["distribName"].\'", paquet = "\'.$_POST["package"].\'", systeme_initialisation = "\'.$_POST["init"].\'" WHERE nom_distrib = "\'.$_POST["distribName"].\'"');

    $requete = $bdd->prepare('UPDATE distrib_list SET nom_distrib = :nv_nom, environnement_bureau = :nv_env_bureu, paquet = :nv_paquet, systeme_initialisation = :nv_init WHERE nom_distrib = :"\'.$_POST["distribName"].\'"');
    $requete->execute(array(
    	'nv_nom' => $nv_nom,
    	'nv_env_bureu' => $nv_env_bureu,
    	'nom_distrib' => $_POST["distribName"]
    	));

    ?>


     <?php print '<p>La distribution de GNU/Linux ' . $_POST['distribName'] . ' a bien été modifiée.</p>'; ?>

    <?php include ('footer.php'); ?>

  </body>
</html>
