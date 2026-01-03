<?php
class Authentification {
    private IUserRepository $userRepository;

    public function __construct(IUserRepository $repository) {
        $this->userRepository = $repository;
    }

    public function login(string $email, string $password): bool {
        // Changement de nom ici
        $user = $this->userRepository->findUserByEmail($email);

        if ($user && password_verify($password, $user->mdp)) {
            $_SESSION['user_id'] = $user->id;
            $_SESSION['user_prenom'] = $user->prenom;
            $_SESSION['is_admin'] = $user->estAdmin;
            return true;
        }
        return false;
    }

    public function register(string $prenom, string $nom, string $email, string $password): bool {
        // Changement de nom ici
        if ($this->userRepository->findUserByEmail($email) !== null) {
            return false;
        }

        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        $newUser = new User($prenom, $nom, $email, $hashedPassword, 0);

        // Changement de nom ici
        return $this->userRepository->saveUser($newUser);
    }
}