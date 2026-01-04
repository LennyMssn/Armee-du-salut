<?php

class bddConnect {
    public \PDO $pdo;
    protected string $host;
    protected string $login;
    protected string $password;
    protected string $dbname;

    // Le constructeur doit être à l'intérieur des accolades de la classe
    public function __construct(
            string $host = 'localhost',
            string $login = 'root',
            string $password = '',
            string $dbname = 'armeedusalut'
    ) {
        $this->host = $host;
        $this->login = $login;
        $this->password = $password;
        $this->dbname = $dbname;
    }

    public function connexion() : \PDO {
        try {
            $dsn = "mysql:host=$this->host;dbname=$this->dbname;charset=utf8";

            // On crée l'instance PDO
            $this->pdo = new \PDO($dsn, $this->login, $this->password);

            // Configuration des erreurs et du mode de récupération
            $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $this->pdo->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);

        } catch (\PDOException $e) {
            // Vérifie si ton fichier Exceptions/BddConnectException.php est bien inclus
            // Sinon, utilise simplement : die("Erreur : " . $e->getMessage());
            die("Erreur de connexion à la base de données : " . $e->getMessage());
        }
        return $this->pdo;
    }
}