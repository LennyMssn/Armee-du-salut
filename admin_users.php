<?php
session_start();

if (empty($_SESSION['user_id']) || empty($_SESSION['is_admin'])) {
    header('Location: index.php');
    exit;
}

require_once __DIR__ . '/classes/bddConnect.php';
require_once __DIR__ . '/classes/mySqlUserRepository.php';

$pdo = (new bddConnect())->connexion();
$repo = new mySqlUserRepository($pdo);
$users = $repo->findAllUsers();
?>
<!DOCTYPE html>
<html lang="fr">
<?php require_once 'block/head.php'; ?>

<body>
<header>
    <?php require_once 'block/nav.php'; ?>
</header>

<main class="container mt-5 pt-5">
    <h2 class="mb-4">Liste des utilisateurs</h2>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Prénom</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Admin</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $user['IdUtilisateur'] ?></td>
                <td><?= htmlspecialchars($user['Prenom']) ?></td>
                <td><?= htmlspecialchars($user['Nom']) ?></td>
                <td><?= htmlspecialchars($user['Email']) ?></td>
                <td><?= $user['EstAdmin'] ? 'oui' : 'non' ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</main>

<?php require_once 'block/footer.php'; ?>
</body>
</html>
