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
    $distribs = $bdd->query('SELECT * FROM distrib_list WHERE nom_distrib="'.$_POST['choiceOfDistrib'].'"');
    //$distribs = $bdd->query('SELECT * FROM distrib_list WHERE nom_distrib="PureOS"');
    $distribSelect = $distribs->fetch();
    print '<h3>Modification des infos sur ' . $distribSelect["nom_distrib"] . '</h3>';



    ?>

    <form action="editDistribCible2.php" method="post">
    <p>
      <label>Nom de la distribution : </label><input value="<?php print $distribSelect['nom_distrib']; ?>" type="text" name="distribName" /><br />
      <label>Environement de bureau : </label><input value="<?php print $distribSelect['environnement_bureau']; ?>" type="text" name="desktopEnvironment" /><br />
      <label>Format des pacquet : </label><input value="<?php print $distribSelect['paquet']; ?>" type="text" name="package" /><br />
      <label>Systeme d'initialisation : </label><input value="<?php print $distribSelect['systeme_initialisation']; ?>" type="text" name="init" /><br />
      <input type="submit" value="Envoyer" />
    </p>
    </form>

    <?php include ('footer.php'); ?>

  </body>
</html>
