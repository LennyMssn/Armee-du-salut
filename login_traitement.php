<?php
// On démarre la session avant tout
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Import des classes nécessaires
require_once 'bddConnect.php';
require_once 'mySqlUserRepository.php'; // Vérifie si ton ami l'a nommé MariaDB ou MySQL
require_once 'Authentification.php';
require_once 'User.php';

$bdd = new bddConnect();

try {
    $pdo = $bdd->connexion();
} catch (Exception $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}

// On instancie le repository et le service d'auth
// Attention : vérifie bien si la classe s'appelle MariaDBUserRepository ou mySqlUserRepository
$trousseau = new mySqlUserRepository($pdo);
$auth = new Authentification($trousseau);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($auth->login($email, $password)) {
        // Si ça marche, on va vers l'accueil
        header('Location: index.php');
        exit();
    } else {
        // Si ça rate, on retourne au login avec une erreur
        header('Location: login.php?error=1');
        exit();
    }
}

// Si quelqu'un accède à ce fichier sans POST, on le renvoie au formulaire
header('Location: login.php');
exit();