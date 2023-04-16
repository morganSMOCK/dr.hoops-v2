    <?php
    session_start();
    ?>
    <!DOCTYPE html>
    <html lang="fr">
    
    <head>
        <meta charset="utf-8" />
        <title>Accueil - DR.HOOP </title>
        <link href="style/style.css" rel="stylesheet" />
        <link href="style/index.css" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Manrope&family=Montserrat&display=swap" rel="stylesheet">
    </head>
    
    <body>
        <header>
            <nav>
            <a href="index.php" class="lien-icone">
                    <img src="images/logo2.png" alt="Logo DR.hoops" />
                </a>
                <div>
                <a href="a-propos.html">À propos</a>
                 <a href="login.php">ESPACE JOUEUR</a>
                 <a href="Nos exercices.php">Nos exercices</a>
                 <a href="login_coach.php"> ESPACE COACH </a>
                 <a href="deconnexion.php">Déconnexion &#128557</a>
                </div>
            </nav>
        </header>
        <main>
            <section class="accueil-introduction">
                <div>
                    <h1><?php if (array_key_exists('pseudo', $_SESSION)){
                        echo'Bonjour '.$_SESSION['pseudo'];
                        echo '<p class="bouton"></p>';	
                            ?>
                                <p class="bouton"> <a href="Mon_profil.php" class="cto">Voir le profil </a></p>
                            <?php	          
                    }
                    ?></h1>
                     <h1><?php if (array_key_exists('nom', $_SESSION)){
                        echo'Bonjour coach '.$_SESSION['nom'];  
                    }
                    else{
    
                    }?></h1>
                    <p>
                       Bonjour nous avons de nombreux <em>exercices</em> à vous proposer n'hésitez pas à les mettres en <em>favoris</em>&#128521. 
                    </p>
                    <a href="Nos exercices.php" class="cta">Voir les exercices &#128170</a>
                </div>
            </section>
            <section class="accueil-photos">
                <h2>L'actualité Basketball</h2>
                <div>
               
                </div>
                <div>
    
                </div>
            </section>
            
        </main>
        <footer>
            <a href="index.html" class="lien-icone">
                <img src="images/logo2.png" alt="Logo Robbie Lens" />
            </a>
            
        </footer>
    </body>
    
    </html>