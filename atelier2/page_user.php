<?php
// Démarrer la session utilisateur
session_start();

if (!isset($_COOKIE['authToken']) || !str_starts_with($_COOKIE['authToken'], 'user_')) {
    header('Location: index.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Utilisateur</title>
</head>
<body>
    <h1>Bienvenue sur la page Utilisateur !</h1>
    <p>Vous êtes connecté en tant qu'utilisateur.</p>
    <a href="logout.php">Se déconnecter</a>
</body>
</html>