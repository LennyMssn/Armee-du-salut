<?php
class mySqlAdminRepository {
    public function __construct(private \PDO $dbConnexion) {}

    // Récupérer les dons avec le nom de l'utilisateur s'il existe
    public function findAllDons(): array {
        $stmt = $this->dbConnexion->query(
            "SELECT d.*, u.Prenom, u.Nom 
             FROM don d 
             LEFT JOIN utilisateur u ON d.IdUtilisateur = u.IdUtilisateur 
             ORDER BY d.DateDon DESC"
        );
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Récupérer les messages
    public function findAllMessages(): array {
        $stmt = $this->dbConnexion->query("SELECT * FROM message ORDER BY DateMessage DESC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Récupérer les missions
    public function findAllMissions(): array {
        $stmt = $this->dbConnexion->query("SELECT * FROM mission ORDER BY IdMission DESC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Récupérer les événements
    public function findAllEvents(): array {
        $stmt = $this->dbConnexion->query("SELECT * FROM evenement ORDER BY DateEvent ASC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
