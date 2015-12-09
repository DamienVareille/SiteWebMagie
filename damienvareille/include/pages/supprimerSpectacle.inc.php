<?php
  $db = new Mypdo();
  $spectacleManager = new spectacleManager($db);
  $listeSpectacles = $spectacleManager->listerSpectacles();

?>
<link rel="stylesheet" href="css/styleAdmin/styleFormSpectacle.css" />
<h1>Supprimer un spectacle</h1>
<?php if(!isset($_GET['numSpec'])){ ?>
  <table>
    <tr>
      <th>Titre du spectacle</th>
      <th>Supprimer</th>
    </tr>
    <?php foreach ($listeSpectacles as $spectacle) { ?>
      <tr>
        <td><?php echo $spectacle->getSpec_titre(); ?></td>
        <td><a href="index.php?page=21&amp;numSpec=<?php echo $spectacle->getSpec_id(); ?>"><img src="./images/erreur.png" /></a></td>
      </tr>

    <?php
    }
  }
  if(isset($_GET['numSpec'])){
    $spectacleManager->supprimerSpectacle($_GET['numSpec']);
    ?>
      <p><img src="./images/valid.png" alt="Valide" /> Spectacle supprimé !</p>
    <?php
    header("refresh:2;url=index.php?page=21");
  }
  ?>




</table>
