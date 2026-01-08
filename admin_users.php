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
require_once __DIR__ . '/classes/mySqlDonRepository.php';
require_once __DIR__ . '/classes/mySqlAdminRepository.php';

$pdo = (new bddConnect())->connexion();
$userRepo = new mySqlUserRepository($pdo);
$donRepo = new mySqlDonRepository($pdo);
$adminRepo = new mySqlAdminRepository($pdo);

// On récupère la page demandée via l'URL (par défaut : dashboard)
$page = $_GET['page'] ?? 'dashboard';
?>
<!DOCTYPE html>
<html lang="fr">
<?php require_once 'block/head.php'; ?>
<style>
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
    .table-container { background: white; padding: 25px; border-radius: 12px; box-shadow: var(--shadow); margin-bottom: 20px;}

    .stat-card { border: none; border-radius: 15px; transition: transform 0.3s; }
    .stat-card:hover { transform: translateY(-5px); }
</style>

<body class="bg-light">
<header><?php require_once 'block/nav.php'; ?></header>

<div class="admin-wrapper">
    <nav class="sidebar shadow">
        <h4 class="fw-bold mb-4 px-3 text-uppercase small" style="letter-spacing: 1px;">Administration</h4>
        <ul class="nav flex-column">
            <li class="nav-item"><a href="?page=dashboard" class="nav-link <?= ($page == 'dashboard') ? 'active' : '' ?>"><i class="bi bi-speedometer2 me-2"></i> Tableau de bord</a></li>
            <li class="nav-item"><a href="?page=benevoles" class="nav-link <?= ($page == 'benevoles') ? 'active' : '' ?>"><i class="bi bi-people-fill me-2"></i> Bénévoles</a></li>
            <li class="nav-item"><a href="?page=don" class="nav-link <?= ($page == 'don') ? 'active' : '' ?>"><i class="bi bi-heart-fill me-2"></i> Dons</a></li>
            <li class="nav-item"><a href="?page=formulaire" class="nav-link <?= ($page == 'formulaire') ? 'active' : '' ?>"><i class="bi bi-envelope-paper me-2"></i> Formulaire</a></li>
            <li class="nav-item"><a href="?page=mission" class="nav-link <?= ($page == 'mission') ? 'active' : '' ?>"><i class="bi bi-flag-fill me-2"></i> Missions</a></li>
            <li class="nav-item"><a href="?page=evenement" class="nav-link <?= ($page == 'evenement') ? 'active' : '' ?>"><i class="bi bi-calendar-event me-2"></i> Événements</a></li>
        </ul>
    </nav>

    <main class="admin-content">
        <?php
        switch ($page) {
            case 'dashboard':
                $stats = $adminRepo->getGlobalStats();
                $top = $adminRepo->getTopDonateur();
                $moyenne = $adminRepo->getAverageDon();
                ?>
                <h2 class="mb-4 fw-bold">Tableau de Bord</h2>
                <div class="row g-4">
                    <div class="col-md-3">
                        <div class="card stat-card bg-primary text-white shadow-sm h-100">
                            <div class="card-body d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-uppercase small">Vues du site</h6>
                                    <h2 class="fw-bold mb-0"><?= number_format($stats['nb_vues']) ?></h2>
                                </div>
                                <i class="bi bi-eye fs-1 opacity-50"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card stat-card bg-success text-white shadow-sm h-100">
                            <div class="card-body d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-uppercase small">Collecte Totale</h6>
                                    <h2 class="fw-bold mb-0"><?= number_format($stats['total_dons'], 0, '.', ' ') ?> €</h2>
                                </div>
                                <i class="bi bi-currency-euro fs-1 opacity-50"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card stat-card bg-info text-white shadow-sm h-100">
                            <div class="card-body d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-uppercase small">Don Moyen</h6>
                                    <h2 class="fw-bold mb-0"><?= round($moyenne, 2) ?> €</h2>
                                </div>
                                <i class="bi bi-graph-up-arrow fs-1 opacity-50"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card stat-card bg-warning text-dark shadow-sm h-100">
                            <div class="card-body d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-uppercase small">Messages reçus</h6>
                                    <h2 class="fw-bold mb-0"><?= $stats['nb_messages'] ?></h2>
                                </div>
                                <i class="bi bi-chat-dots fs-1 opacity-50"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-4 g-4">
                    <div class="col-md-6">
                        <div class="table-container h-100">
                            <h5 class="fw-bold mb-3 text-danger"><i class="bi bi-trophy me-2"></i>Meilleur donateur</h5>
                            <?php if ($top): ?>
                                <p class="display-6 fw-bold mb-1 text-dark"><?= htmlspecialchars($top['Prenom'] . ' ' . $top['Nom']) ?></p>
                                <p class="text-muted fs-5">Total donné : <span class="text-success fw-bold"><?= number_format($top['total_donne'], 2) ?> €</span></p>
                            <?php else: ?>
                                <p class="text-muted">Aucun donateur.</p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="table-container h-100">
                            <h5 class="fw-bold mb-3 text-primary"><i class="bi bi-people me-2"></i>Membres communauté</h5>
                            <p class="display-6 fw-bold mb-1 text-dark"><?= $stats['nb_users'] ?> inscrits</p>
                            <p class="text-muted fs-5">Utilisateurs enregistrés.</p>
                        </div>
                    </div>
                </div>
                <?php
                break;

            case 'benevoles':
                $users = $userRepo->findAllUsers();
                ?>
                <div class="table-container">
                    <h2 class="mb-4 fw-bold">Liste des bénévoles</h2>
                    <table class="table table-hover align-middle">
                        <thead class="table-dark">
                        <tr><th>ID</th><th>Prénom</th><th>Nom</th><th>Email</th><th>Admin</th></tr>
                        </thead>
                        <tbody>
                        <?php foreach ($users as $user): ?>
                            <tr>
                                <td><?= $user['IdUtilisateur'] ?></td>
                                <td><?= htmlspecialchars($user['Prenom']) ?></td>
                                <td><?= htmlspecialchars($user['Nom']) ?></td>
                                <td><?= htmlspecialchars($user['Email']) ?></td>
                                <td><span class="badge <?= $user['EstAdmin'] ? 'bg-success' : 'bg-secondary' ?>"><?= $user['EstAdmin'] ? 'Oui' : 'Non' ?></span></td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <?php
                break;

            case 'don':
                $dons = $donRepo->findAllDons();
                ?>
                <div class="table-container">
                    <h2 class="mb-4 fw-bold">Historique des Dons reçus</h2>
                    <table class="table table-hover align-middle">
                        <thead class="table-dark">
                        <tr><th>Date</th><th>Donateur</th><th>Montant</th><th>Type</th></tr>
                        </thead>
                        <tbody>
                        <?php if (empty($dons)): ?>
                            <tr><td colspan="4" class="text-center text-muted">Aucun don enregistré.</td></tr>
                        <?php else: ?>
                            <?php foreach ($dons as $don): ?>
                                <tr>
                                    <td><?= date('d/m/Y H:i', strtotime($don['DateDon'])) ?></td>
                                    <td><?= $don['Prenom'] ? htmlspecialchars($don['Prenom'] . ' ' . $don['Nom']) : 'Anonyme' ?></td>
                                    <td class="fw-bold text-success"><?= number_format($don['MontantDon'], 2) ?> €</td>
                                    <td><span class="badge bg-info text-dark"><?= ucfirst($don['TypeDon']) ?></span></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                        </tbody>
                    </table>
                </div>
                <?php
                break;

            case 'formulaire':
                require_once __DIR__ . '/classes/mySqlMessageRepository.php';
                $msgRepo = new mySqlMessageRepository($pdo);
                $messages = $msgRepo->findAllMessages();
                ?>
                <h2 class="mb-4 fw-bold">Messages reçus</h2>
                <?php if (empty($messages)): ?>
                <div class="table-container"><p class="text-muted mb-0">Aucun message.</p></div>
            <?php else: ?>
                <?php foreach ($messages as $m): ?>
                    <div class="card mb-3 border-start border-danger border-4 shadow-sm">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <h5 class="fw-bold"><?= htmlspecialchars($m['Objet']) ?></h5>
                                <small class="text-muted"><?= date('d/m/Y H:i', strtotime($m['DateMessage'])) ?></small>
                            </div>
                            <p class="mb-2"><strong>De :</strong> <?= htmlspecialchars($m['Prenom'] . ' ' . $m['Nom']) ?> (<a href="mailto:<?= $m['Email'] ?>"><?= $m['Email'] ?></a>)</p>
                            <hr>
                            <p class="mb-0 italic text-secondary">" <?= nl2br(htmlspecialchars($m['Contenu'])) ?> "</p>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
                <?php
                break;

            case 'mission': // NOUVEAU : Gère l'affichage des missions
                $missions = $adminRepo->findAllMissions();
                ?>
                <div class="table-container">
                    <h2 class="mb-4 fw-bold">Gestion des Missions</h2>
                    <table class="table table-hover align-middle">
                        <thead class="table-dark">
                        <tr><th>ID</th><th>Titre</th><th>Catégorie</th><th>Statut</th></tr>
                        </thead>
                        <tbody>
                        <?php if (empty($missions)): ?>
                            <tr><td colspan="4" class="text-center text-muted">Aucune mission enregistrée.</td></tr>
                        <?php else: ?>
                            <?php foreach ($missions as $m): ?>
                                <tr>
                                    <td><?= $m['IdMission'] ?></td>
                                    <td><?= htmlspecialchars($m['Titre']) ?></td>
                                    <td><?= htmlspecialchars($m['Categorie']) ?></td>
                                    <td>
                                        <span class="badge <?= ($m['Statut'] == 'en_cours') ? 'bg-warning text-dark' : 'bg-success' ?>">
                                            <?= str_replace('_', ' ', $m['Statut']) ?>
                                        </span>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                        </tbody>
                    </table>
                </div>
                <?php
                break;

            case 'evenement': // NOUVEAU : Gère l'affichage des événements
                $events = $adminRepo->findAllEvents();
                ?>
                <div class="table-container">
                    <h2 class="mb-4 fw-bold">Gestion des Événements</h2>
                    <table class="table table-hover align-middle">
                        <thead class="table-dark">
                        <tr><th>ID</th><th>Titre</th><th>Date</th><th>Lieu</th></tr>
                        </thead>
                        <tbody>
                        <?php if (empty($events)): ?>
                            <tr><td colspan="4" class="text-center text-muted">Aucun événement enregistré.</td></tr>
                        <?php else: ?>
                            <?php foreach ($events as $e): ?>
                                <tr>
                                    <td><?= $e['IdEvenement'] ?></td>
                                    <td><?= htmlspecialchars($e['Titre']) ?></td>
                                    <td><?= date('d/m/Y', strtotime($e['DateEvent'])) ?></td>
                                    <td><?= htmlspecialchars($e['Lieu']) ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                        </tbody>
                    </table>
                </div>
                <?php
                break;

            default:
                echo "<div class='table-container'><h2>Erreur</h2><p>Page introuvable.</p></div>";
        }
        ?>
    </main>
</div>

<?php require_once 'block/footer.php'; ?>
</body>
</html>