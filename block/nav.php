<nav class="navbar navbar-expand-lg navbar-dark fixed-top main-nav" id="mainNav" style="background: rgba(15, 23, 36, 0.9); backdrop-filter: blur(10px);">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <img src="assets/images/Logo_de_l'Armée_du_Salut.png" alt="Logo" class="logo">
        </a>

        <!-- Bouton Burger pour Mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item"><a class="nav-link" href="actions.php">Actions sociales</a></li>
                <li class="nav-item"><a class="nav-link" href="actu.php">Actualités</a></li>
                <li class="nav-item"><a class="nav-link" href="rejoindre.php">Nous rejoindre</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                <li class="nav-item ms-lg-3"><a class="btn btn-danger rounded-pill px-4" href="Don.php">Faire un don</a></li>

                <!-- DROPDOWN COMPTE CORRIGÉ -->
                <li class="nav-item dropdown ms-lg-2">
                    <a class="nav-link dropdown-toggle btn btn-outline-light ms-lg-2 px-3 text-white"
                       href="#"
                       id="accountDropdown"
                       role="button"
                       data-bs-toggle="dropdown"
                       aria-expanded="false">
                        Compte
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="accountDropdown">
                        <li><a class="dropdown-item" href="login.php">Connexion</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="gerer.php">Gérer mon compte</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>