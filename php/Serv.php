<?php
// Informations de connexion à la base de données
$host = 'db'; // Le nom du service Docker pour MySQL
$db   = 'MJ'; // Nom de la base de données
$user = 'Marc'; // Nom d'utilisateur MySQL
$pass = '12345'; // Mot de passe de l'utilisateur MySQL
$charset = 'utf8mb4';

// DSN (Data Source Name) pour la connexion PDO
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

// Pause pour donner le temps au service MySQL de démarrer
sleep(5);

try {
    // Connexion à la base de données
    $pdo = new PDO($dsn, $user, $pass);
    echo "Connexion réussie à la base de données !";
} catch (PDOException $e) {
    // En cas d'erreur de connexion, afficher le message d'erreur
    throw new PDOException($e->getMessage(), (int)$e->getCode());
}
