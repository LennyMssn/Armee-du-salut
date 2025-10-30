<!DOCTYPE html>
<html lang="fr">
    <?php require_once 'block/head.php';?>

    <body>
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

        <div class="container my-4 text-center">
            <div class="titre-bleu">
                <h2 class="mb-0">Armée du Salut</h2>
            </div>
        </div>

        <div class="container my-5">
            <div class="row g-4">
                <!-- Bloc 1 -->
                <div class="col-md-6">
                    <div class="p-4 text-white rounded shadow" style="background-color: var(--bg);">
                        <h3>Titre du Bloc 1</h3>
                        <p>Voici le texte du premier bloc avec un fond bleu foncé.</p>
                    </div>
                </div>

                <!-- Bloc 2 -->
                <div class="col-md-6">
                    <div class="p-4 text-white rounded shadow" style="background-color: var(--bg);">
                        <h3>Titre du Bloc 2</h3>
                        <p>Voici le texte du deuxième bloc également avec un fond bleu foncé.</p>
                    </div>
                </div>
            </div>
        </div>




        <?php include 'block/footer.php';?>

</body>
</html>
