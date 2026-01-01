
if (!session_id()) {
    session_start();
}

require_once 'block/head.php';
 
$bdd = new bddConnect();

try {
    $pdo = $bdd->connexion();
} catch (BddConnectException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}

$trousseau = new MariaDBUserRepository($pdo);
$auth = new Authentification($trousseau);

if($_SERVER['REQUEST_METHOD'] === 'POST') {
  // TODO : À compléter

}

require_once 'block/footer.php';