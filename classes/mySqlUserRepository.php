<?php

require_once __DIR__ . '/IUserRepository.php';
require_once __DIR__ . '/User.php';

class mySqlUserRepository implements IUserRepository {

    public function __construct(private \PDO $dbConnexion) {}

    public function saveUser(User $user): bool {
        try {
            $stmt = $this->dbConnexion->prepare(
                "INSERT INTO utilisateur (Prenom, Nom, Email, MDP, estAdmin)
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
            "SELECT IdUtilisateur, Prenom, Nom, Email, MDP, EstAdmin
             FROM utilisateur
             WHERE Email = ?"
        );
        $stmt->execute([$email]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$result) {
            return null;
        }

        return new User(
            $result['Email'],
            $result['MDP'],
            $result['IdUtilisateur'],
            $result['Prenom'],
            $result['Nom'],
            (int)$result['EstAdmin']
        );
    } catch (\PDOException $e) {
        return null;
    }
}


    public function findAllUsers(): array {
    $stmt = $this->dbConnexion->query(
        "SELECT IdUtilisateur, Prenom, Nom, Email, EstAdmin FROM utilisateur"
    );
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
 }
}
