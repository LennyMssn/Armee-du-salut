<?php
session_start();
require_once __DIR__ . '/classes/bddConnect.php';
require_once __DIR__ . '/classes/mySqlMessageRepository.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $prenom = htmlspecialchars($_POST['prenom']);
    $nom = htmlspecialchars($_POST['nom']);
    $email = htmlspecialchars($_POST['email']);
    $objet = htmlspecialchars($_POST['objet'] ?? 'Demande de contact');
    $message = htmlspecialchars($_POST['message']);

    if (!empty($prenom) && !empty($nom) && !empty($email) && !empty($message)) {
        $pdo = (new bddConnect())->connexion();
        $repo = new mySqlMessageRepository($pdo);

        if ($repo->saveMessage($prenom, $nom, $email, $objet, $message)) {
            // Succès
            header('Location: contact.php?status=success');
            exit;
        }
    }
}
header('Location: contact.php?status=error');
exit;
