<?php

require_once __DIR__ . '/IUserRepository.php';
require_once __DIR__ . '/User.php';

class mySqlUserRepository implements IUserRepository {

    public function __construct(private \PDO $dbConnexion) {}

    public function saveUser(User $user): bool {
        try {
            $stmt = $this->dbConnexion->prepare(
                "INSERT INTO utilisateur (Prenom, Nom, Email, MDP, EstAdmin)
                 VALUES (?, ?, ?, ?, ?)"
            );

            return $stmt->execute([
                $user->getPrenom(),
                $user->getNom(),
                $user->getEmail(),
                $user->getPassword(),
                0
            ]);
        } catch (\PDOException $e) {
            return false;
        }
    }

    public function findUserByEmail(string $email): ?User {
        try {
            $stmt = $this->dbConnexion->prepare(
                "SELECT IdUtilisateur, Prenom, Nom, Email, MDP
                 FROM utilisateur WHERE Email = ?"
            );
            $stmt->execute([$email]);
            $result = $stmt->fetch();

            if (!$result) {
                return null;
            }

            return new User(
                $result['Email'],
                $result['MDP'],
                $result['IdUtilisateur'],
                $result['Prenom'],
                $result['Nom']
            );
        } catch (\PDOException $e) {
            return null;
        }
    }
}
