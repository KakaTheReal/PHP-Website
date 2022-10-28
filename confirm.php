<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="with=device-with, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
    <title>Kaïs Difallah</title>
    <link rel="stylesheet" href="css\style.css">
</head> 
<body>
    <div class="container-fluid">
        <div class="carte" data-tilt>
            <h2>Merci !</h2>
            <p>Veuillez consulter vos mail !</p>
            <a href="index.php" class="bouton">Retour au menu</a>
        </div>
    </div>
    <script src="js\vanilla-tilt.js"></script>
</body>
</html>

<?php

if (($_POST)) {
    $pdo = new PDO('mysql:host=localhost;dbname=contact', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
  
    $pdo->exec("INSERT INTO info (Nom, Prénom, Email, Téléphone) VALUES ('$_POST[nom]', '$_POST[prenom]', '$_POST[email]', '$_POST[tel]')");
  }
?>