<?php

class mySqlDonRepository {
    private $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    /**
     * ENREGISTRER UN DON (Utilisé par traitement_don.php)
     */
    public function saveDon($montant, $type, $user_id = null) {
        try {
            $sql = "INSERT INTO don (MontantDon, IdUtilisateur, TypeDon, DateDon) 
                    VALUES (:montant, :user_id, :type_don, NOW())";

            $stmt = $this->pdo->prepare($sql);

            return $stmt->execute([
                'montant'  => $montant,
                'user_id'  => $user_id, // Peut être null si don anonyme
                'type_don' => $type
            ]);
        } catch (PDOException $e) {
            // Optionnel : log l'erreur pour le débuggage
            // error_log($e->getMessage());
            return false;
        }
    }

    /**
     * RÉCUPÉRER TOUS LES DONS (Utilisé par l'admin_users.php / panel)
     */
    public function findAllDons(): array {
        $sql = "SELECT d.*, u.Prenom, u.Nom 
                FROM don d 
                LEFT JOIN utilisateur u ON d.IdUtilisateur = u.IdUtilisateur 
                ORDER BY d.DateDon DESC";

        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}