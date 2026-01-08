<nav class="navbar navbar-expand-lg navbar-dark fixed-top main-nav" id="mainNav" style="background: rgba(15, 23, 36, 0.9); backdrop-filter: blur(10px);">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <img src="assets/images/Logo_de_l'Armée_du_Salut.png" alt="Logo" class="logo">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item"><a class="nav-link" href="actions.php">Actions sociales</a></li>
                <li class="nav-item"><a class="nav-link" href="actu.php">Actualités</a></li>
                <li class="nav-item"><a class="nav-link" href="rejoindre.php">Nous rejoindre</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                <li class="nav-item ms-lg-3"><a class="btn btn-danger rounded-pill px-4" href="Don.php">Faire un don</a></li>

                <!-- MENU COMPTE DYNAMIQUE -->
                <li class="nav-item dropdown ms-lg-2">
                    <a class="nav-link dropdown-toggle btn btn-outline-light ms-lg-2 px-3 text-white"
                       href="#" id="accountDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person-circle me-1"></i> Compte
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="accountDropdown">

                        <?php if (isset($_SESSION['user_id'])): ?>
                            <!-- CAS : UTILISATEUR CONNECTÉ (Admin ou Normal) -->

                            <?php if (!empty($_SESSION['is_admin'])): ?>
                                <!-- Lien spécifique Admin -->
                                <li><a class="dropdown-item fw-bold text-danger" href="admin_users.php">
                                        <i class="bi bi-shield-lock me-2"></i>Panel Admin
                                    </a></li>
                                <li><hr class="dropdown-divider"></li>
                            <?php endif; ?>

                            <li><a class="dropdown-item" href="gerer.php">
                                    <i class="bi bi-gear me-2"></i>Gérer mon compte
                                </a></li>

                            <li><hr class="dropdown-divider"></li>

                            <li><a class="dropdown-item text-danger" href="logout.php">
                                    <i class="bi bi-box-arrow-right me-2"></i>Déconnexion
                                </a></li>

                        <?php else: ?>
                            <!-- CAS : PERSONNE N'EST CONNECTÉ -->
                            <li><a class="dropdown-item" href="login.php">
                                    <i class="bi bi-box-arrow-in-right me-2"></i>Connexion
                                </a></li>
                            <li><a class="dropdown-item" href="inscription.php">
                                    <i class="bi bi-person-plus me-2"></i>Créer un compte
                                </a></li>
                        <?php endif; ?>

                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>