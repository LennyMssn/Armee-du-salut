<nav class="navbar navbar-expand-lg navbar-dark main-nav" style="background-color: rgba(0,0,0,0.2);">
    <div class="container-fluid">
        <!-- Logo -->
        <a class="navbar-brand" href="index.html">
            <img src="assets/images/Logo_de_l'Armée_du_Salut.png" alt="Logo" class="logo">
        </a>

        <!-- Bouton burger -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu"
                aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu principal + menu compte -->
        <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center">
                <li class="nav-item"><a class="nav-link" href="../actions.php">Actions sociales</a></li>
                <li class="nav-item"><a class="nav-link" href="../actu.php">Actualités</a></li>
                <li class="nav-item"><a class="nav-link" href="rejoindre.php">Nous rejoindre</a></li>
                <li class="nav-item"><a class="nav-link" href="../contact.php">Contact</a></li>
                <li class="nav-item"><a class="btn btn-danger ms-lg-2" href="../Don.php">Don</a></li>

                <!-- Menu compte intégré -->
                <li class="nav-item dropdown ms-lg-3">
                    <button class="btn btn-outline-light dropdown-toggle" type="button" id="accountMenuButton"
                            data-bs-toggle="dropdown" aria-expanded="false">
                        Votre compte
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="accountMenuButton">
                        <li><a class="dropdown-item" href="gerer.php">Gérer son compte</a></li>
                        <li><a class="dropdown-item" href="logout.php">Déconnexion</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
