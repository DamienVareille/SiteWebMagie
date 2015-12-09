<?php
  $db = new Mypdo();
?>
<link rel="stylesheet" href="css/styleAdmin/styleFormSpectacle.css" />
<h1>Ajouter un spectacle</h1>
<?php if(!isset($_POST['titre'])){ ?>
  <form class="pure-form pure-form-aligned" method="post" action="index.php?page=20">
    <p class="pure-control-group">
      <label for="titre">Titre du spectacle : </label>
      <input type="text" name="titre" required />
    </p>

    <p class="pure-control-group">
      <label for="noteHaut">Note du haut : </label>
      <input type="text" name="noteHaut" required />
    </p>

    <p class="pure-control-group">
      <label for="description">Description : </label>
      <textarea rows="4" cols="20" name="description" required ></textarea>
    </p>

    <p class="pure-control-group">
      <label for="noteBas">Note du bas : </label>
      <input type="text" name="noteBas" required />
    </p>

    <p class="pure-control-group">
      <label for="Image">Charger une image : </label>
      <input type="file" name="img" required />
    </p>

    <p class="pure-control-group">
      <input type="submit" value="Envoyer" />
    </p>
  </form>
<?php }
  else{
    $spectacleManager = new spectacleManager($db);

    $titre = htmlspecialchars($_POST['titre']);
    $noteHaut = htmlspecialchars($_POST['noteHaut']);
    $description = htmlspecialchars($_POST['description']);
    $noteBas = htmlspecialchars($_POST['noteBas']);
    $img = htmlspecialchars($_POST['img']);

    $spectacleTab = array(
      'titre_spectacle' => $titre,
      'note_haut_spectacle' => $noteHaut,
      'description' => $description,
      'note_bas_spectacle' => $noteBas,
      'image_spectacle' => $img
    );
    $spectacle = new Spectacle($spectacleTab);
    if($spectacleManager->ajouterSpectacle($spectacle)){
      ?><p><img src="./images/valid.png" alt="Valide" /> Spectacle bien ajouté !</p> <?php
      header("refresh:2;url=index.php");
    }
  }
?>
