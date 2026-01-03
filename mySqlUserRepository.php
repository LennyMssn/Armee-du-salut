<?php
require_once 'IUserRepository.php';
require_once 'User.php';

class mySqlUserRepository implements IUserRepository {
    private \PDO $db;

    public function __construct(\PDO $db) {
        $this->db = $db;
    }

    // On utilise le nom exact de ton interface : saveUser
    public function saveUser(User $user): bool {
        try {
            $sql = "INSERT INTO utilisateur (Prenom, Nom, Email, MDP, EstAdmin) 
                    VALUES (:prenom, :nom, :email, :mdp, :estAdmin)";

            $stmt = $this->db->prepare($sql);

            return $stmt->execute([
                ':prenom'   => $user->prenom,
                ':nom'      => $user->nom,
                ':email'    => $user->email,
                ':mdp'      => $user->mdp,
                ':estAdmin' => $user->estAdmin
            ]);
        } catch (\PDOException $e) {
            return false;
        }
    }

    // On utilise le nom exact de ton interface : findUserByEmail
    public function findUserByEmail(string $email): ?User {
        $sql = "SELECT * FROM utilisateur WHERE Email = :email LIMIT 1";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([':email' => $email]);

        $row = $stmt->fetch();

        if ($row) {
            return new User(
                $row['Prenom'],
                $row['Nom'],
                $row['Email'],
                $row['MDP'],
                (int)$row['EstAdmin'],
                (int)$row['IdUtilisateur']
            );
        }
        return null;
    }
}