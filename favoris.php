<?php 
session_start();

require 'db_co.php';

$sql ="SELECT * FROM favoris JOIN exo  ON favoris.";
$select = $co->query($sql);
$select->execute([
    'e'->$_SESSION['pseudo']
]);

$utilisateur=$select->fetchAll();



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        
    </main>
</body>
</html>