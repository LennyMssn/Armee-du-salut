<?php

require_once __DIR__ . '/IUserRepository.php';
require_once __DIR__ . '/User.php';

class Authentification {

    public function __construct(private IUserRepository $userRepository) {}

    public function register(
        string $prenom,
        string $nom,
        string $email,
        string $password
    ): bool {

        if ($this->userRepository->findUserByEmail($email)) {
            return false;
        }

        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        $user = new User($email, $hashedPassword, null, $prenom, $nom);

        return $this->userRepository->saveUser($user);
    }

    public function login(string $email, string $password): bool {
        $user = $this->userRepository->findUserByEmail($email);

        if (!$user || !password_verify($password, $user->getPassword())) {
            return false;
        }

        session_regenerate_id(true);

        $_SESSION['user_id'] = $user->getId();
        $_SESSION['user_email'] = $user->getEmail();
        $_SESSION['user_prenom'] = $user->getPrenom();
        $_SESSION['user_nom'] = $user->getNom();
        $_SESSION['is_admin'] = $user->isAdministrator();

        return true;
    }
}
