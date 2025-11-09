<!DOCTYPE html>
<html lang="fr">
    <?php require_once 'block/head.php';?>

    <body class="page-index">
    <header><?php require_once 'block/nav.php'; ?></header>
    <main>

    <header>
        <div class="conteneur-image">
            <img src="assets/images/homepagePic.jpg" id="imageAccueil" alt="Image d'accueil">
            <div class="slogan" >Secourir, réhabiliter, reconstruire des vies</div>
        </div>
    </header>

    <main class="py-5" style="background-color: #0f1724;">
        <div class="container">
            <div class="row g-4 justify-content-center">

                <!-- Actu 1 -->
                <div class="col-12 col-md-4">
                    <div class="card h-100 shadow-lg">
                        <img src="images/actu1.jpg" class="card-img-top" alt="Actualité 1">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Titre de l’actualité 1</h5>
                            <p class="card-text">Actu 1</p>
                        </div>
                    </div>
                </div>

                <!-- Actu 2 -->
                <div class="col-12 col-md-4">
                    <div class="card h-100 shadow-lg">
                        <img src="images/actu2.jpg" class="card-img-top" alt="Actualité 2">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Titre de l’actualité 2</h5>
                            <p class="card-text">Actu 2</p>
                        </div>
                    </div>
                </div>

                <!-- Actu 3 -->
                <div class="col-12 col-md-4">
                    <div class="card h-100 shadow-lg">
                        <img src="images/actu3.jpg" class="card-img-top" alt="Actualité 3">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Titre de l’actualité 3</h5>
                            <p class="card-text">Actu 3</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <section class="py-5 text-center" style="background-color: #ffffff;">
        <div class="container">
            <h2 class="mb-4 fw-bold text-uppercase text-dark">Action sociale</h2>

            <!-- Carrousel -->
            <div id="actionsCarousel" class="carousel slide mx-auto p-4 rounded shadow"
                 data-bs-ride="carousel"
                 style="max-width: 800px; background-color: #0f1724;">
                <div class="carousel-inner text-light">

                    <!-- Jeunesse -->
                    <div class="carousel-item active">
                        <div class="d-flex flex-column align-items-center">
                            <img src="images/jeunesse.jpg" class="d-block w-50 rounded shadow-sm" alt="Jeunesse">
                            <h5 class="mt-3">Jeunesse</h5>
                        </div>
                    </div>

                    <!-- Exclusion sociale -->
                    <div class="carousel-item">
                        <div class="d-flex flex-column align-items-center">
                            <img src="images/exclusion.jpg" class="d-block w-50 rounded shadow-sm" alt="Exclusion sociale">
                            <h5 class="mt-3">Exclusion sociale</h5>
                        </div>
                    </div>

                    <!-- Handicap -->
                    <div class="carousel-item">
                        <div class="d-flex flex-column align-items-center">
                            <img src="images/handicap.jpg" class="d-block w-50 rounded shadow-sm" alt="Handicap">
                            <h5 class="mt-3">Handicap</h5>
                        </div>
                    </div>

                    <!-- Dépendance -->
                    <div class="carousel-item">
                        <div class="d-flex flex-column align-items-center">
                            <img src="images/dependance.jpg" class="d-block w-50 rounded shadow-sm" alt="Dépendance">
                            <h5 class="mt-3">Dépendance</h5>
                        </div>
                    </div>

                    <!-- Actions spécifiques -->
                    <div class="carousel-item">
                        <div class="d-flex flex-column align-items-center">
                            <img src="images/specifique.jpg" class="d-block w-50 rounded shadow-sm" alt="Actions spécifiques">
                            <h5 class="mt-3">Actions spécifiques</h5>
                        </div>
                    </div>

                    <!-- Actions de proximité -->
                    <div class="carousel-item">
                        <div class="d-flex flex-column align-items-center">
                            <img src="images/proximite.jpg" class="d-block w-50 rounded shadow-sm" alt="Actions de proximité">
                            <h5 class="mt-3">Actions de proximité</h5>
                        </div>
                    </div>

                </div>

                <!-- Contrôles -->
                <button class="carousel-control-prev" type="button" data-bs-target="#actionsCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Précédent</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#actionsCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Suivant</span>
                </button>

            </div>
        </div>
    </section>

        <section class="don-section1 d-flex align-items-center">
            <div class="container">
                <div class="row align-items-center">

                    <!-- Texte gauche -->
                    <div class="col-lg-6 text-white mb-5 mb-lg-0">
                        <h1 class="fw-bold mb-4">
                            Vos dons sont essentiels<br>
                            pour les actions de l’Armée du Salut, Merci !
                        </h1>
                        <p class="lead">
                            Chaque don compte. Grâce à votre générosité, nos équipes œuvrent chaque jour
                            pour venir en aide aux personnes vulnérables.
                        </p>
                    </div>

                    <!-- Bloc de don -->
                    <div class="col-lg-6">
                        <div class="don-box bg-white shadow rounded-4 p-4">
                            <!-- Onglets -->
                            <ul class="nav nav-tabs border-0 mb-3">
                                <li class="nav-item">
                                    <a class="nav-link active fw-semibold text-danger" href="#">Don action sociale</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-secondary" href="#">Don missions spirituelles</a>
                                </li>
                            </ul>

                            <!-- Boutons Don unique / mensuel -->
                            <div class="btn-group w-100 mb-3" role="group">
                                <button class="btn btn-danger fw-semibold">Don unique</button>
                                <button class="btn btn-outline-secondary">❤️ Don mensuel</button>
                            </div>

                            <!-- Montants -->
                            <div class="row g-2 mb-3">
                                <div class="col-6 col-md-3">
                                    <button class="btn btn-outline-secondary w-100">90 €</button>
                                </div>
                                <div class="col-6 col-md-3">
                                    <button class="btn btn-danger w-100">150 €</button>
                                </div>
                                <div class="col-6 col-md-3">
                                    <button class="btn btn-outline-secondary w-100">250 €</button>
                                </div>
                                <div class="col-6 col-md-3">
                                    <button class="btn btn-outline-secondary w-100">500 €</button>
                                </div>
                            </div>

                            <!-- Montant libre -->
                            <div class="input-group mb-3">
                                <input type="number" class="form-control" placeholder="Montant libre">
                                <span class="input-group-text">€</span>
                            </div>

                            <!-- Réduction fiscale -->
                            <p class="small text-secondary bg-light p-2 rounded mb-3">
                                Soit <strong>38 €</strong> après <a href="#" class="text-decoration-none text-primary">réduction fiscale</a>
                                (dans la limite de 20 % du revenu imposable).
                            </p>

                            <!-- Bouton don -->
                            <button class="btn btn-danger w-100 fw-bold py-2 rounded-pill">FAIRE UN DON</button>

                            <!-- Crédit -->
                            <p class="text-center text-muted small mt-3 mb-0">
                                Powered by <strong>RGOODS</strong>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include 'block/footer.php';?>

</body>
</html>
