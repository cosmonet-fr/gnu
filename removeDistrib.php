<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Le grand guide officieux de GNU et Linux(libre)</title>
  </head>
  <body>
    <?php include ('header.php'); ?>
    <h2>Supprimer une distribution de GNU/LINUX :</h2>
    <form action="removeDistribCible.php" method="post">
      <p>
          <label for="distrib">Selectionnez la distribution à supprimer</label><br />
          <select name="choiceOfDistrib" id="choiceOfDistrib">
              <?php
              $bdd = new PDO('mysql:host=localhost;dbname=gnu_guide;charset=utf8', 'root', '');
              $distribs = $bdd->query('SELECT * FROM distrib_list');
              while ($donnees = $distribs->fetch()) {
              ?>
              <option value="<?php print $donnees['nom_distrib']; ?>"><?php print $donnees['nom_distrib']; ?></option>
            <?php  } ?>
            <br> <label>Mot de passe : </label><input type="password" name ="motDePasse" placeholder="Mot de passe" />
            <br> <input type="submit" value="Envoyer" />

              <!--<option value="france">France</option>-->

          </select>
      </p>
    </form>

    <?php include ('footer.php'); ?>

  </body>
</html>
