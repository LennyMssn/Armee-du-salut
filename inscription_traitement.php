<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once __DIR__ . '/classes/bddConnect.php';
require_once __DIR__ . '/classes/IUserRepository.php';
require_once __DIR__ . '/classes/User.php';
require_once __DIR__ . '/classes/mySqlUserRepository.php';
require_once __DIR__ . '/classes/Authentification.php';

$bdd = new bddConnect();

try {
    $pdo = $bdd->connexion();
} catch (Exception $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

$trousseau = new mySqlUserRepository($pdo);
$auth = new Authentification($trousseau);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupération des données du formulaire
    $prenom = $_POST['prenom'] ?? '';
    $nom = $_POST['nom'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $password_confirm = $_POST['password_confirm'] ?? '';

    // 1. Vérification simple des mots de passe
    if ($password !== $password_confirm) {
        header('Location: inscription.php?error=mdp_different');
        exit();
    }

    // 2. Tentative d'inscription via le service Auth
    if ($auth->register($prenom, $nom, $email, $password)) {
        // Succès ! On redirige vers le login
        header('Location: login.php?success=1');
        exit();
    } else {
        // Échec (probablement email déjà utilisé)
        header('Location: inscription.php?error=email_existant');
        exit();
    }
}

// Sécurité : si on accède au fichier sans POST
header('Location: inscription.php');
exit();
