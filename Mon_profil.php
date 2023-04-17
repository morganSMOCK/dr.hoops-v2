<?php
session_start();
 ?>

<html>

<head>
    <meta charset="utf-8" />
    <title>Profil</title>
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
                  <h2>Profil : <?php if (array_key_exists('nom', $_SESSION)){
                        echo $_SESSION['nom'];}?>
                        <?php if (array_key_exists('pseudo', $_SESSION)){
                        echo $_SESSION['pseudo'];}?></h2> 
                    <h2>Mail :<?php if (array_key_exists('mail', $_SESSION)){
                        echo $_SESSION['mail'];}?>
                        <?php if (array_key_exists('email', $_SESSION)){
                        echo $_SESSION['email'];}?></h2>
                    <br />   
                    
                      <br />
                    <a href="editionprofil.php">Editer mon profil</a>
                    
              </section>
     <br>
     <br>         
    <footer>
        <a href="index.html" class="lien-icone">
            <img src="images/logo2.png" alt="Logo PHARMACORP" />
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
<?php   
?>

