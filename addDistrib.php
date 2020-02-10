<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Le grand guide officieux de GNU et Linux(libre)</title>
  </head>
  <body>
    <?php include ('header.php'); ?>
    <h2>Ajouter une nouvelle distribution de GNU/LINUX à la liste :</h2>
    <form action="addDistribCible.php" method="post">
    <p>
      <label>Nom de la distribution : </label><input type="text" name="distribName" /><br />
      <label>Environement de bureau : </label><input type="text" name="desktopEnvironment" /><br />
      <label>Format des pacquet : </label><input type="text" name="package" /><br />
      <label>Systeme d'initialisation : </label><input type="text" name="init" /><br />
      <input type="submit" value="Envoyer" />
    </p>
    </form>

    <?php include ('footer.php'); ?>

  </body>
</html>
