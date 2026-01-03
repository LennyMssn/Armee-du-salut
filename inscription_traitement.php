<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// 1. Charger les bases
require_once 'User.php';
require_once 'IUserRepository.php'; // Toujours charger l'interface avant le repository

// 2. Charger les classes qui utilisent les bases
require_once 'mySqlUserRepository.php';
require_once 'bddConnect.php';
require_once 'Authentification.php';

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
