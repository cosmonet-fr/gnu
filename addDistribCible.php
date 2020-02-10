<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Le grand guide officieux de GNU et Linux(libre)</title>
  </head>
  <body>
    <?php include ('header.php'); ?>

    <?php
    $bdd = new PDO('mysql:host=localhost;dbname=gnu_guide;charset=utf8', 'root', '');

    //Ajout d'une entrée à la table distrib_list
    $requete = $bdd->prepare('INSERT INTO distrib_list(nom_distrib, environnement_bureau, paquet, systeme_initialisation) VALUES(?, ?, ?, ?)');
    $requete->execute(array($_POST["distribName"], $_POST["desktopEnvironment"], $_POST["package"], $_POST["init"]));
    ?>


     <?php print '<p>La distribution de GNU/Linux ' . $_POST['distribName'] . ' a bien été ajoutée à la base de donnée.</p>'; ?>

    <?php include ('footer.php'); ?>

  </body>
</html>
