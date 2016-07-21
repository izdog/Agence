<?php
  session_start();

  $_SESSION['civ'] = $_POST['civ'];
  $_SESSION['nom'] = $_POST['nom'];
  $_SESSION['prenom']= $_POST['prenom'];
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Agence</title>
    <link rel="stylesheet" href="css/stylesForm.css" media="screen" title="no title" charset="utf-8">
  </head>
  <body>
    <header>
      <div class="img">
        <img src="img/illu.jpg" alt="illustration super cheap hand made" />
      </div>
    </header>
    <section class="form">
      <h1>Votre Trip</h1>
<!-- RECUPERATION DES DONNEES -->
    <?php
      foreach($_POST['options'] as $checkoptions){
          $choix = $checkoptions;
      }

// Code pour le choix ! !
      if ($choix == 1 ) {
        $typeVoy = 'un voyage';
        echo '<form action="estimation.php" method="post">';
        echo '<h3>Choix du voyage :</h3>';
        echo '<select name="choixvoyage">';
        echo '<option value="1">Le Mordor- &Ccedil;a craint ! - 300$ par pers</option>';
        echo '<option value="2">La Comté - Le pied ! - 600$ par pers</option>';
        echo '</select>';
        echo '<h3>Nombre de personne :</h3>';
        echo '<div class="nb">';
        echo '<input class="nb" type="text" name="nbPerso" value="">';
        echo '</div>';
        echo '<input type="submit" name="estimation" value="Estimation">';
        echo '</form>';
      } else {
        $typeVoy = 'une excursion';
        echo '<form action="estimation.php" method="post">';
        echo '<h3>Choix de l\'excursion :</h3>';
        echo '<select name="choixvoyage">';
        echo '<option value="3">La lune - &Agrave; nous le flouze ! - 15000$ par pers</option>';
        echo '<option value="4">Le soleil - Attention au coup de soleil ! - 10000$ par pers</option>';
        echo '</select>';
        echo '<h3>Nombre de personne :</h3>';
        echo '<div class="nb">';
        echo '<input type="text" name="nbPerso" value="">';
        echo '</div>';
        echo '<input type="submit" name="estimation" value="Estimation">';
        echo '</form>';
      }
      $_SESSION['typeVoy'] = $typeVoy;
     ?>
    </section>
    <footer>
      <p>
        Copyright Bidule du 10
      </p>
    </footer>
  </body>
</html>
