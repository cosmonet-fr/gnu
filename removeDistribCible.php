<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Le grand guide officieux de GNU et Linux(libre)</title>
  </head>
  <body>
    <?php include ('header.php'); ?>
    <h2>Suppression de <?php print $_POST['choiceOfDistrib'] ?> de la base de donnée :</h2>

    <?php

    if ($_POST['motDePasse'] == 'pioupiou') {
      $bdd = new PDO('mysql:host=localhost;dbname=gnu_guide;charset=utf8', 'root', '');
      $bdd->exec('DELETE FROM distrib_list WHERE nom_distrib="'.$_POST['choiceOfDistrib'].'"');
      print '<p>' . $_POST['choiceOfDistrib'] . ' a bien été supprimé de la base de donnée !</p>';
    } else {
      print '<p>Vous n\'avez pas entré le bon mot de passe !</p>';
    }

     ?>

    <?php include ('footer.php'); ?>

  </body>
</html>
