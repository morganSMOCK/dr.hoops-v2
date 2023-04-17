<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Connexion Coach - DR.HOOP</title>
    <link href="style/style.css" rel="stylesheet" />
    <link href="style/Inscription.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope&family=Montserrat&display=swap" rel="stylesheet">
</head>

<body>
<?php



?>
 <header>
        <nav>
            <a href="index.php" class="lien-icone">
                <img src="images/logo2.png" alt="Logo" />
            </a>
            <div>
                <a href="index.php">Accueil</a>
                <a href="a-propos.html">À propos</a>
                <a href="Nos exercices.php">Nos Exercices</a>
              
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
                    <input type="password" placeholder="Mot de passe" id="mdp" name="mdp"  />
                    </div>
                    <input type="submit"  name="envoi" value="Connexion" href="index.php"/>
                    <br>
                    <br>
                    <a href="Inscription_Coach.php">S'inscrire</a></p>
                    <br>
 <?php

        if(isset($_POST['envoi'])){
            // Si j'ai reçu le bouton de soumission, c'est que le formulaire a été envoyé.
            $nom = trim($_POST['nom']); //Recupère la valeur du champ 'mail' et trim supprime les espaces au debut et à la fin
            $mdp = trim($_POST['mdp']);
            $erreur = false; //On considere qu'il n'y a pas d'erreur pas defaut
        
            if(empty($nom)){
                echo '<p class="result" >Le champ nom est vide</p>';
                $erreur = true; // Dès qu'on rencontre une erreur, on la passe à True
            }
        
            if(empty($mdp)){
                echo '<p class="result">Le champ mot de passe est vide</p>';
                $erreur = true;
            }
        
                
            if($erreur == false){
                // Si j'ai reçu le bouton de soumission, c'est que le formulaire a été envoyé.
                require_once 'db_co.php';
                $sql = 'SELECT * FROM coach WHERE nom = :e';
                $select = $co->prepare($sql);
                $select->execute([
                    'e' => $nom
                ]);
                $utilisateur = $select->fetch(); // Récupère un utilisateur
                if(!empty($utilisateur)){
                    if((password_verify($_POST['mdp'], $utilisateur['motdepasse']))){
                        
                        $_SESSION['nom'] = $nom;
                        $_SESSION['email'] = $utilisateur['email'];
                        $_SESSION['id'] = $utilisateur['id'];
                        
                    
                    header('index.php');
                    echo '<p class="ac">Vous etes connecter vous pouvez retourner à la page principale.</p>';

                
                    ?>
                    <p class="ac"><a href="index.php">Page principale</a></p>
                    <?php
                    }
                    else {
                        echo '<p class="result">Mot de passe incorrect</p>';	
                        ?>
                           
                            <p class="result"><a href="reset.php">Vous avez oublié votre mot de passe ?</a></p>
                        <?php											
                    }
                }
                else{
                    echo '<p class="result">Identifiants incorrects</p>';
                }
            }
            else{
                echo '<p class="result">Certains champs sont vides, remplissez les avant de continuer</p>';
            }
        
        }

 ?>
                  </form>
                </div>
          
                
               
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
</form>
</body>
</html>
