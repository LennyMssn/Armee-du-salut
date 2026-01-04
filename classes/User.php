<?php

class User {

    public function __construct(
        private string $email,
        private string $password,
        private ?int $id = null,
        private ?string $prenom = null,
        private ?string $nom = null
    ) {}

    public function getId(): ?int { return $this->id; }
    public function getEmail(): string { return $this->email; }
    public function getPassword(): string { return $this->password; }
    public function getPrenom(): ?string { return $this->prenom; }
    public function getNom(): ?string { return $this->nom; }
}
