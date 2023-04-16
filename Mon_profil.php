<?php
session_start();

if(isset($_GET['id'])AND $_GET['pseudo'] > 0)
{
    $getid = intval($_GET['pseudo']);
    $requser = $bdd->prepare('SELECT * FROM membres WHERE pseudo =?');
    $requser->execute(array($getid));
    $utilisateur = $requser->fetch();

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
                  <h2>Profil de <?php echo $utilisateur['pseudo'];?></h2>
                    <br /><br />
                    Pseudo :<?php echo $utilisateur['pseudo'];?> 
                    <br />
                    Mail : <?php echo $utilisateur['mail'];?>
                    <br />   
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
}
else
{
    
}
?>

