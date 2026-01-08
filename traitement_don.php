<?php
session_start();
require_once __DIR__ . '/classes/bddConnect.php';
require_once __DIR__ . '/classes/mySqlDonRepository.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // On récupère les données envoyées par le formulaire de Don.php
    $montant = isset($_POST['montant']) ? floatval($_POST['montant']) : 0;
    $type = isset($_POST['type_don']) ? $_POST['type_don'] : 'unique';
    $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;

    if ($montant > 0) {
        $pdo = (new bddConnect())->connexion();
        $repo = new mySqlDonRepository($pdo);

        // C'EST CETTE LIGNE QUI POSAIT PROBLÈME
        if ($repo->saveDon($montant, $type, $user_id)) {
            // Succès : on redirige vers une page de confirmation
            header('Location: index.php?status=success_don');
            exit;
        } else {
            echo "Erreur lors de l'enregistrement en base de données.";
        }
    } else {
        header('Location: Don.php?error=montant_invalide');
        exit;
    }
}