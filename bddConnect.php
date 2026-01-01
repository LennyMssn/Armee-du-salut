class bddConnect {
    public \PDO $pdo;
    protected ?string $host = null;
    protected ?string $login= null;
    protected ?string $password= null;
  protected ?string $dbname= null;
}

public __construct (
    $this->$host = 'localhost',
    $this->$login = 'root',
    $this->$password = '',
    $this->$dbname = 'armeedusalut',
)

public function connexion () : \PDO {
    try {
        $dsn = "mysql:host=$this->host;dbname=$this->dbname;charset=utf8";
        $this->pdo = new \PDO("mysql:host=$this->host;dbname=$this->dbname;charset=utf8", $this->login, $this->password);
        $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        $this->pdo->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
        
    } catch (\PDOException $e) {
        throw new BddConnectException("Erreur de connexion à la base de données : " . $e->getMessage());
    }
    return $this->pdo;
}