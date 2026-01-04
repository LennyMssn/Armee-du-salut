<?php

session_start();

require_once __DIR__ . '/classes/bddConnect.php';
require_once __DIR__ . '/classes/IUserRepository.php';
require_once __DIR__ . '/classes/User.php';
require_once __DIR__ . '/classes/mySqlUserRepository.php';
require_once __DIR__ . '/classes/Authentification.php';

// Connexion à la base
$pdo = (new bddConnect())->connexion();

// Repository et service d'authentification
$repo = new mySqlUserRepository($pdo);
$auth = new Authentification($repo);

// Récupération des données POST
$email = trim($_POST['email'] ?? '');
$password = $_POST['password'] ?? '';

// Nettoyage des anciennes sessions
unset($_SESSION['user_id'], $_SESSION['user_email'], $_SESSION['user_prenom'], $_SESSION['user_nom']);

// Vérification du login
if ($auth->login($email, $password)) {
    header('Location: index.php');
    exit(); 
}

header('Location: login.php?error=1');
exit();
