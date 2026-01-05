<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<?php require_once 'block/head.php';?>

<body class="page-index">
<!-- On utilise la nav unique qui gère le scroll -->
<header><?php require_once 'block/nav.php'; ?></header>

<main>
    <!-- HERO SECTION : ACCUEIL -->
    <section class="position-relative vh-100 d-flex align-items-center justify-content-center text-center text-white"
             style="background: url('assets/images/homepagePic.jpg') center/cover no-repeat;">
        <div style="position: absolute; inset: 0; background: rgba(0,0,0,0.4);"></div>
        <div class="container position-relative z-1">
            <h1 class="display-2 fw-bold mb-4" style="text-shadow: 2px 2px 10px rgba(0,0,0,0.7);">
                Secourir, réhabiliter, reconstruire des vies
            </h1>
            <a href="Don.php" class="btn btn-danger btn-lg rounded-pill px-5 py-3 fw-bold shadow">AGIR MAINTENANT</a>
        </div>
    </section>

    <!-- SECTION ACTUALITÉS (Récupérées de actu.php) -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="d-flex justify-content-between align-items-end mb-4">
                <h2 class="fw-bold">Dernières actualités</h2>
                <a href="actu.php" class="text-danger fw-bold text-decoration-none">Voir tout →</a>
            </div>

            <div class="row g-4">
                <!-- Actu 1 : Ouragan -->
                <div class="col-12 col-md-4">
                    <div class="custom-card shadow-sm h-100">
                        <div class="card-img-container">
                            <img src="assets/images/actualite1.webp" alt="Ouragan Melissa">
                            <span class="badge bg-danger position-absolute top-0 end-0 m-3">Urgence</span>
                        </div>
                        <div class="p-4">
                            <small class="text-muted">31 octobre 2025</small>
                            <h5 class="fw-bold mt-2">Aidez les familles touchées par l’ouragan Melissa</h5>
                            <p class="small text-secondary">L’ouragan Melissa a frappé de plein fouet la Jamaïque, laissant derrière lui un pays dévasté...</p>
                            <a href="actu.php" class="btn btn-link text-danger p-0 fw-bold text-decoration-none">Lire la suite</a>
                        </div>
                    </div>
                </div>

                <!-- Actu 2 : Autonomie -->
                <div class="col-12 col-md-4">
                    <div class="custom-card shadow-sm h-100">
                        <div class="card-img-container">
                            <img src="assets/images/action-en-cours1.webp" alt="Autonomie">
                        </div>
                        <div class="p-4">
                            <small class="text-muted">7 octobre 2025</small>
                            <h5 class="fw-bold mt-2">Gagner en autonomie et s’épanouir</h5>
                            <p class="small text-secondary">Découvrez comment nos chantiers d'insertion aident les jeunes à retrouver un chemin professionnel.</p>
                            <a href="actu.php" class="btn btn-link text-danger p-0 fw-bold text-decoration-none">Lire la suite</a>
                        </div>
                    </div>
                </div>

                <!-- Actu 3 : Moi demain -->
                <div class="col-12 col-md-4">
                    <div class="custom-card shadow-sm h-100">
                        <div class="card-img-container">
                            <img src="assets/images/actualite2.webp" alt="Moi demain">
                        </div>
                        <div class="p-4">
                            <small class="text-muted">1 octobre 2025</small>
                            <h5 class="fw-bold mt-2">Moi demain : promouvoir la parole</h5>
                            <p class="small text-secondary">Un programme dédié à la promotion du parcours de vie des femmes accueillies dans nos centres.</p>
                            <a href="actu.php" class="btn btn-link text-danger p-0 fw-bold text-decoration-none">Lire la suite</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 text-center bg-white">
        <div class="container">
            <h2 class="mb-5 fw-bold text-uppercase">Nos champs d'action sociale</h2>

            <div id="actionsCarousel" class="carousel slide mx-auto shadow-lg rounded-4 overflow-hidden"
                 data-bs-ride="carousel">

                <!-- Indicateurs (Les petits traits en bas) -->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#actionsCarousel" data-bs-slide-to="0" class="active" aria-current="true"></button>
                    <button type="button" data-bs-target="#actionsCarousel" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#actionsCarousel" data-bs-slide-to="2"></button>
                </div>

                <div class="carousel-inner p-5" style="background-color: var(--dark);">
                    <!-- Jeunesse -->
                    <div class="carousel-item active">
                        <img src="assets/images/actions7.webp" class="rounded shadow-sm mb-4" style="height: 300px; width: 100%; object-fit: cover;" alt="Jeunesse">
                        <h3 class="text-white">Enfance & Jeunesse</h3>
                        <p class="text-light-50 px-md-5">Éduquer, protéger et offrir un avenir à chaque enfant, peu importe son parcours.</p>
                    </div>

                    <!-- Exclusion -->
                    <div class="carousel-item">
                        <img src="assets/images/actions1.webp" class="rounded shadow-sm mb-4" style="height: 300px; width: 100%; object-fit: cover;" alt="Exclusion">
                        <h3 class="text-white">Lutte contre l'Exclusion</h3>
                        <p class="text-light-50 px-md-5">Accueil de jour, maraudes et aide alimentaire pour les plus démunis.</p>
                    </div>

                    <!-- Handicap -->
                    <div class="carousel-item">
                        <img src="assets/images/actions3.webp" class="rounded shadow-sm mb-4" style="height: 300px; width: 100%; object-fit: cover;" alt="Handicap">
                        <h3 class="text-white">Handicap</h3>
                        <p class="text-light-50 px-md-5">Accompagner vers l'autonomie et favoriser l'inclusion sociale et professionnelle.</p>
                    </div>
                </div>

                <!-- Contrôles (Bien vérifier le data-bs-target) -->
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

    <section class="py-5" style="background: var(--dark); color: white;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h2 class="display-4 fw-bold">Votre aide est précieuse</h2>
                    <p class="lead">Grâce à la déduction fiscale de 75%, un don de 100€ ne vous coûte réellement que 25€.</p>
                </div>

                <div class="col-lg-6">
                    <div class="don-container text-dark">
                        <h3 class="text-center fw-bold mb-4">Soutenir nos actions</h3>

                        <!-- Grille de boutons -->
                        <div class="amt-grid">
                            <button type="button" class="amt-btn btn btn-outline-danger" data-amount="50">50 €</button>
                            <button type="button" class="amt-btn btn btn-danger active" data-amount="150">150 €</button>
                            <button type="button" class="amt-btn btn btn-outline-danger" data-amount="300">300 €</button>
                        </div>

                        <!-- Input libre -->
                        <div class="input-group mb-3">
                            <input type="number" class="form-control amt-input" placeholder="Autre montant">
                            <span class="input-group-text">€</span>
                        </div>

                        <!-- Affichage du calcul -->
                        <div class="alert alert-secondary text-center">
                            Coût réel après déduction : <strong class="deduction-val text-danger">37.50 €</strong>
                        </div>

                        <button class="btn btn-danger btn-lg w-100 rounded-pill fw-bold">VALIDER MON DON</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include 'block/footer.php';?>
</body>
</html>