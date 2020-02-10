<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Le grand guide officieux de GNU et Linux(libre)</title>
  </head>
  <body>
    <?php include ('header.php'); ?>
    <h2>Bienvenue sur le guide de GNU et Linux <span>(libre)</span></h2>
    <p>Liste des distributions de GNU/Linux :</p>
    <?php

        $bdd = new PDO('mysql:host=localhost;dbname=gnu_guide;charset=utf8', 'root', '');
        //$distribs = $bdd->query('SELECT * FROM distrib_list');
        $distribs = $bdd->query('SELECT UPPER(nom_distrib) AS nom_distrib_maj, environnement_bureau, LOWER(paquet) AS paquet_min, systeme_initialisation FROM distrib_list');

        while ($donnees = $distribs->fetch()) {
        ?>

        <p>
          Distribution : <strong><?php print $donnees['nom_distrib_maj']; ?></strong> | son environnement de bureau par défaut est <strong><?php print $donnees['environnement_bureau']; ?></strong> son format de paquets est <strong>.<?php print $donnees['paquet_min']; ?></strong> et son système d'initialisation est <strong><?php print $donnees['systeme_initialisation']; ?></strong>.
        </p>
        <?php  }?>
        <?php
        $total = $bdd->query('SELECT COUNT(*) AS nb_distribs FROM distrib_list');
        $nb_total = $total->fetch();
         ?>
         <p>La base de donnée compte acctuelment <?php print $nb_total['nb_distribs']; ?> distribution<?php if ($nb_total['nb_distribs'] > 1) {
           print 's';
         } ?> GNU/Linux.</p>


    <?php include ('footer.php'); ?>

  </body>
</html>
