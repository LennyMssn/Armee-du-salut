<?php
class User {
    public ?int $id;
    public string $prenom;
    public string $nom;
    public string $email;
    public string $mdp;
    public int $estAdmin;

    public function __construct(string $prenom, string $nom, string $email, string $mdp, int $estAdmin = 0, ?int $id = null) {
        $this->id = $id;
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->email = $email;
        $this->mdp = $mdp;
        $this->estAdmin = $estAdmin;
    }
}