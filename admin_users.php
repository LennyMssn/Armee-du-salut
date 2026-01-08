<?php
session_start();

// Protection de la page : on vérifie si l'utilisateur est admin
if (empty($_SESSION['user_id']) || empty($_SESSION['is_admin'])) {
    header('Location: index.php');
    exit;
}

// Logique de connexion et repositories
require_once __DIR__ . '/classes/bddConnect.php';
require_once __DIR__ . '/classes/mySqlUserRepository.php';
require_once __DIR__ . '/classes/mySqlDonRepository.php'; // AJOUTÉ

$pdo = (new bddConnect())->connexion();
$userRepo = new mySqlUserRepository($pdo);
$donRepo = new mySqlDonRepository($pdo); // AJOUTÉ

// On récupère la page demandée via l'URL (par défaut : benevoles)
$page = $_GET['page'] ?? 'benevoles';
?>
<!DOCTYPE html>
<html lang="fr">
<?php require_once 'block/head.php'; ?>
<style>
    /* Design spécifique au Panel Admin */
    .admin-wrapper { display: flex; min-height: 100vh; padding-top: 80px; }
    .sidebar { width: 260px; background: var(--dark); color: white; padding: 20px; flex-shrink: 0; }
    .sidebar .nav-link {
        color: rgba(255,255,255,0.7);
        margin-bottom: 8px;
        border-radius: 8px;
        transition: 0.3s;
        padding: 12px 15px;
    }
    .sidebar .nav-link:hover { background: rgba(255,255,255,0.1); color: white; }
    .sidebar .nav-link.active { background: var(--primary); color: white; }
    .admin-content { flex: 1; padding: 40px; background: #f4f7f9; }
    .table-container { background: white; padding: 25px; border-radius: 12px; box-shadow: var(--shadow); }
</style>

<body class="bg-light">
<header><?php require_once 'block/nav.php'; ?></header>

<div class="admin-wrapper">
    <!-- Barre latérale (Sidebar) -->
    <nav class="sidebar">
        <h4 class="fw-bold mb-4 px-3">Contrôle</h4>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a href="?page=benevoles" class="nav-link <?= ($page == 'benevoles') ? 'active' : '' ?>">
                    <i class="bi bi-people-fill me-2"></i> Bénévoles
                </a>
            </li>
            <li class="nav-item">
                <a href="?page=mission" class="nav-link <?= ($page == 'mission') ? 'active' : '' ?>">
                    <i class="bi bi-flag-fill me-2"></i> Missions
                </a>
            </li>
            <li class="nav-item">
                <a href="?page=evenement" class="nav-link <?= ($page == 'evenement') ? 'active' : '' ?>">
                    <i class="bi bi-calendar-event me-2"></i> Événements
                </a>
            </li>
            <li class="nav-item">
                <a href="?page=presse" class="nav-link <?= ($page == 'presse') ? 'active' : '' ?>">
                    <i class="bi bi-newspaper me-2"></i> Presse
                </a>
            </li>
            <li class="nav-item">
                <a href="?page=formulaire" class="nav-link <?= ($page == 'formulaire') ? 'active' : '' ?>">
                    <i class="bi bi-envelope-paper me-2"></i> Formulaire
                </a>
            </li>
            <li class="nav-item">
                <a href="?page=don" class="nav-link <?= ($page == 'don') ? 'active' : '' ?>">
                    <i class="bi bi-heart-fill me-2"></i> Dons
                </a>
            </li>
        </ul>
    </nav>

    <!-- Zone de contenu -->
    <main class="admin-content">
        <div class="table-container">
            <?php
            switch ($page) {
                case 'benevoles':
                    $users = $userRepo->findAllUsers();
                    ?>
                    <h2 class="mb-4 fw-bold">Liste des bénévoles</h2>
                    <table class="table table-hover align-middle">
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
                                <td>
                                    <span class="badge <?= $user['EstAdmin'] ? 'bg-success' : 'bg-secondary' ?>">
                                        <?= $user['EstAdmin'] ? 'Oui' : 'Non' ?>
                                    </span>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                    <?php
                    break;

                case 'don':
                    // --- LOGIQUE AJOUTÉE POUR LES DONS ---
                    $dons = $donRepo->findAllDons();
                    ?>
                    <h2 class="mb-4 fw-bold">Historique des Dons reçus</h2>
                    <table class="table table-hover align-middle">
                        <thead class="table-dark">
                        <tr>
                            <th>Date</th>
                            <th>Donateur</th>
                            <th>Montant</th>
                            <th>Type</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if (empty($dons)): ?>
                            <tr><td colspan="4" class="text-center text-muted">Aucun don enregistré pour le moment.</td></tr>
                        <?php else: ?>
                            <?php foreach ($dons as $don): ?>
                                <tr>
                                    <td><?= date('d/m/Y H:i', strtotime($don['DateDon'])) ?></td>
                                    <td>
                                        <?= $don['Prenom'] ? htmlspecialchars($don['Prenom'] . ' ' . $don['Nom']) : '<span class="text-muted italic">Donateur Anonyme</span>' ?>
                                    </td>
                                    <td class="fw-bold text-success"><?= number_format($don['MontantDon'], 2, ',', ' ') ?> €</td>
                                    <td>
                                        <span class="badge bg-info text-dark">
                                            <?= ucfirst(htmlspecialchars($don['TypeDon'])) ?>
                                        </span>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                        </tbody>
                    </table>
                    <?php
                    break;

                case 'mission':
                case 'evenement':
                case 'presse':
                case 'formulaire':
                    echo "<h2>Gestion " . ucfirst($page) . "</h2><p>Contenu en cours de développement...</p>";
                    break;

                default:
                    echo "<h2>Erreur</h2><p>Page introuvable.</p>";
            }
            ?>
        </div>
    </main>
</div>

<?php require_once 'block/footer.php'; ?>
</body>
</html>