<?php

class mySqlAdminRepository {

    public function __construct(private \PDO $dbConnexion) {}

    // --- MISSIONS ---
    public function findAllMissions(): array {
        $stmt = $this->dbConnexion->query("SELECT * FROM mission ORDER BY IdMission DESC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // --- ÉVÉNEMENTS ---
    public function findAllEvents(): array {
        $stmt = $this->dbConnexion->query("SELECT * FROM evenement ORDER BY DateEvent ASC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // --- STATISTIQUES GLOBALES ---
    public function getGlobalStats(): array {
        $sql = "SELECT 
                    (SELECT COUNT(*) FROM utilisateur) as nb_users,
                    (SELECT SUM(MontantDon) FROM don) as total_dons,
                    (SELECT COUNT(*) FROM message) as nb_messages,
                    (SELECT vues_totales FROM site_stats WHERE id = 1) as nb_vues";
        $res = $this->dbConnexion->query($sql)->fetch(PDO::FETCH_ASSOC);

        // Sécurité si la table don est vide
        if ($res['total_dons'] === null) $res['total_dons'] = 0;

        return $res;
    }

    // --- TOP DONATEUR ---
    public function getTopDonateur(): ?array {
        $sql = "SELECT u.Prenom, u.Nom, SUM(d.MontantDon) as total_donne
                FROM don d
                JOIN utilisateur u ON d.IdUtilisateur = u.IdUtilisateur
                GROUP BY d.IdUtilisateur
                ORDER BY total_donne DESC
                LIMIT 1";
        $res = $this->dbConnexion->query($sql)->fetch(PDO::FETCH_ASSOC);
        return $res ? $res : null;
    }

    // --- MOYENNE DES DONS ---
    public function getAverageDon(): float {
        $sql = "SELECT AVG(MontantDon) as moyenne FROM don";
        $res = $this->dbConnexion->query($sql)->fetch(PDO::FETCH_ASSOC);
        return (float)($res['moyenne'] ?? 0);
    }

    // --- COMPTEUR DE VUES ---
    public function incrementViews() {
        $this->dbConnexion->query("UPDATE site_stats SET vues_totales = vues_totales + 1 WHERE id = 1");
    }
}