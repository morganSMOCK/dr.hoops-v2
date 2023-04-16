
<html>

<head>
    <meta charset="utf-8" />
    <title>Connexion - PHARMACORP</title>
    <link href="style/style.css" rel="stylesheet" />
    <link href="style/Inscription.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope&family=Montserrat&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <nav>
            <a href="index.php" class="lien-icone">
                <img src="images/logo2.png" alt="Logo" />
            </a>
            <div>
                <a href="index.php">Accueil</a>
                <a href="a-propos.html">À propos</a>
                <a href="Nos exercices.php">Nos Exercices</a>
                <a href="deconnexion.php">Déconnexion &#128557</a>
            </div>
        </nav>
    </header>
    <main class="a-propos-main">
        <section>
            <section class="wrapper">
                <div class="form signup">
                    <header></header>
                  <form method="POST" action=""> 
                    <input type="text" placeholder="Votre nom"  id="nom" name="nom" value=""/>
                    <input type="text"  placeholder="Adresse email"  id="email" name="email"/>
                    <input type="password" placeholder="Mot de passe" id="mdp" name="mdp"  />
                    <input type="password" placeholder="Confirmer votre mot de passe" id="mdp2" name="mdp2"  />
                    <div class="checkbox">
                      <input type="checkbox" id="signupCheck" />
                      <label for="signupCheck"></label>
                      <a href="images/accueil/termes_et_conditions_dutilisation_Dr_hoops.pdf">J'accepte les termes et conditions</a>
                    </div>
                    <input type="submit" value="Je m'inscris" name="envoi"/>
                    <a href="login_coach.php">Se connecter</a></p>
                    <a href="Inscription.php"> ESPACE JOUEUR </a></p>
                  </form>
                </div>
                <?php
 if(isset($_POST['envoi'])){
  // Si j'ai reçu le bouton de soumission, c'est que le formulaire a été envoyé.

  if($_POST['mdp'] == $_POST['mdp2']){
    // Si les deux mots de passe sont identiques
    require_once 'db_co.php';
    $sql = 'SELECT * FROM coach WHERE email = :e';
    $select = $co->prepare($sql);
    $select->execute([
      'e' => $_POST['email']
    ]);

    $coach = $select->fetch(); // Récupère un résultat

    if(!empty($coach)){
      echo '<p class="result">Ce coach existe déjà</p>';
    }
    else{
      $sql = 'INSERT INTO coach (email, motdepasse,nom) VALUES(:e, :mdp, :n)';
      $insert = $co->prepare($sql);
      $insert->execute([
        'e' => $_POST['email'],
        'mdp' => password_hash($_POST['mdp'], PASSWORD_DEFAULT),
        'n' => $_POST['nom']
      ]);

      if($insert->rowCount() > 0){
        echo '<p class="result">Inscription effectuée maintenant connecter vous ^^</p>';						
      }
      else{
        echo '<p class="result">Veuillez réessayer votre inscription</p>';
      }
    }
  }
  else{
    echo '<p class="result">Les deux mots de passe ne sont pas identiques</p>';
  }
}
?>
              </section>
     <br>
     <br>         
    <footer>
        <a href="index.html" class="lien-icone">
            <img src="images/logo2.png" alt="Logo dr.hoops" />
        </a>
        <div>
            <a target="_blank" href="https://twitter.com/" class="lien-icone">
                <img src="images/twitter.png" alt="Logo Twitter" />
            </a>
            <a target="_blank" href="https://www.instagram.com/" class="lien-icone">
                <img src="images/instagram.png" alt="Logo Instagram" />
            </a>
        </div>
    </footer>
</body>

</html>

