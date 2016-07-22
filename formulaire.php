<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Agence Bachibouzouk</title>
    <link rel="stylesheet" href="css/stylesForm.css" media="screen" title="no title" charset="utf-8">
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,700' rel='stylesheet' type='text/css'>
    <script src="dist/js/smooth-scroll.js"></script>
  </head>
  <body>
  <header>
  <div class="headBut">
      <a data-scroll href="#form">Par ici l'inscription</a>
    </div>
    <div class="img">
      <img src="img/illu.jpg" alt="illustratio super cheap hand made" />
    </div>
  </header>

  <section id="form">
    <h1>Bienvenue sur Easy Trip</h1>
    <form class="smth" action="agence.php" method="post">
      <h3>Civilité :</h3>
      <select class="" name="civ">
        <option value="Mr">Mr</option>
        <option value="Mme">Mme</option>
        <option value="Mlle">Mlle</option>
      </select>
      <h3>Nom :</h3>
      <input type="text" name="nom" value="Votre nom" required="">
      <h3>Prénom :</h3>
      <input type="text" name="prenom" value="Votre prénom" required="">
      <div class="container">
        <input id="toggle1" class="hide" type="checkbox" name="options[]" value="1">
        <label for="toggle1">Voyage</label>
        <input id="toggle2" class="hide" type="checkbox" name="options[]" value="2">
        <label for="toggle2">Excursion</label>
      </div>
      <input type="submit" name="submit" value="Suite">
    </form>
  </section>
  <footer>
    <p>
      Copyright Bidule du 10
    </p>
  </footer>
  </body>
  <script>
    smoothScroll.init();
  </script>
</html>
