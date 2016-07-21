<?php
  session_start();
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/stylesForm.css" media="screen" title="no title" charset="utf-8">
  </head>
  <body>
    <header>
      <div class="img">
        <img src="img/illu.jpg" alt="illustratio super cheap hand made" />
      </div>
    </header>
  	<section class="form">
  		<h1>Résumé de votre demande :</h1>
      <div class="recap">


	<?php
		$choix = $_POST['choixvoyage'];
		$civ = $_SESSION['civ'];
		$nom = $_SESSION['nom'];
		$prenom = $_SESSION['prenom'];
		$nbPerso = $_POST['nbPerso'];
		$typeVoy = $_SESSION['typeVoy'];


		if($choix == '1') {
			$prixVoy = 300;
			$choix = 'dans Le Mordor';
		} elseif($choix == '2') {
			$prixVoy = 600;
			$choix = 'dans La comté';
		} elseif($choix == '3') {
			$prixVoy = 15000;
			$choix = 'sur la lune';
		} elseif ($choix == '4') {
			$prixVoy = 10000;
			$choix = 'sur le soleil';
		}

		$prixTotal = $prixVoy*$nbPerso;

		echo '<p class="firstL">Bonjour, '.$civ.' '.$nom.' '.$prenom.'</p>';
		echo '<p class="sndL">Vous avez choisi '.$typeVoy.' <span class="brown">'.$choix.'</span> au prix de '.$prixVoy.'$ par personne.</p>';
		echo '<p class="sndL">Vous nous avez indiqué '.$nbPerso.' personnes.</p>';
		echo '<p class="pactol">Le montant total est de <span class="brown">'.$prixTotal.'</span>$</p>';
	 ?>
    </div>
    <div class="bouton">
      <a href="<?php echo 'formulaire.php'?>">Retour formulaire</a>
    </div>
	 </section>
   <footer>
     <p>
       Copyright Bidule du 10
     </p>
   </footer>
  </body>
</html>
