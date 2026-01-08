<?php
class mySqlMessageRepository {
    private $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function saveMessage($prenom, $nom, $email, $objet, $contenu) {
        $sql = "INSERT INTO message (Prenom, Nom, Email, Objet, Contenu) VALUES (:prenom, :nom, :email, :objet, :contenu)";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([
            'prenom'  => $prenom,
            'nom'     => $nom,
            'email'   => $email,
            'objet'   => $objet,
            'contenu' => $contenu
        ]);
    }

    public function findAllMessages() {
        $sql = "SELECT * FROM message ORDER BY DateMessage DESC";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}