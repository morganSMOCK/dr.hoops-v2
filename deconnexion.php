<?php
        session_start();
        if (array_key_exists('pseudo' , $_SESSION)){
            session_destroy();
            header('Location: index.php');
        }
        else{
            echo "<h1>Vous ne pouvez pas vous déconnecter si vous n'êtes pas connecté</h1>";
        }
?>
<?php
        session_start();
        if (array_key_exists('nom' , $_SESSION)){
            session_destroy();
            header('Location: index.php');
        }
        else{
            echo "<h1>Vous ne pouvez pas vous déconnecter si vous n'êtes pas connecté</h1>";
        }
?>