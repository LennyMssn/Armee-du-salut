<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<?php require_once 'block/head.php'; ?>
<body>
<header><?php require_once 'block/nav.php'; ?></header>

<main>
    <section class="hero-banner">
        <div class="container">
            <h1>Actualités</h1>
            <p class="lead">Suivez nos actions sur le terrain et découvrez l'impact de votre solidarité.</p>
        </div>
    </section>

    <div class="container my-5">
        <!-- Système de Filtres -->
        <div class="d-flex flex-wrap justify-content-center gap-2 mb-5">
            <button class="btn btn-danger filtre-btn active" data-filtre="all">Tous les articles</button>
            <button class="btn btn-outline-danger filtre-btn" data-filtre="actualite">Actualités</button>
            <button class="btn btn-outline-danger filtre-btn" data-filtre="action-en-cours">Actions en cours</button>
            <button class="btn btn-outline-danger filtre-btn" data-filtre="temoignage">Témoignages</button>
        </div>

        <div class="row g-4">
            <!-- 1. Urgence Jamaïque (À la une) -->
            <div class="col-md-12 article-item" data-tag="actualite">
                <div class="custom-card flex-md-row">
                    <!-- Correction de la syntaxe ci-dessous (guillemet après card-img-container) -->
                    <div class="card-img-container" style="flex: 1; height: auto; min-height: 300px;">
                        <img src="assets/images/actualite1.webp" alt="Ouragan Melissa">
                        <span class="badge bg-danger position-absolute top-0 start-0 m-3">À la une</span>
                    </div>
                    <div class="p-4 d-flex flex-column justify-content-center" style="flex: 1;">
                        <div class="d-flex justify-content-between mb-2">
                            <small class="text-muted">31 octobre 2025</small>
                            <span class="badge bg-light text-danger border border-danger">Actualités</span>
                        </div>
                        <h2 class="h3 fw-bold">Aidez les familles touchées par l’ouragan Melissa</h2>
                        <p>L’ouragan Melissa a frappé de plein fouet la Jamaïque, laissant derrière lui un pays dévasté. Avec des vents atteignant près de 300 km/h, c’est l’une des pires tempêtes qu’ait connue l’île.</p>
                        <a href="https://armeedusalut.fr/blog/actualites/urgence-jamaique/" class="btn btn-danger align-self-start rounded-pill px-4">Lire l'article complet</a>
                    </div>
                </div>
            </div>

            <!-- 2. Gagner en autonomie -->
            <div class="col-md-4 article-item" data-tag="action-en-cours">
                <div class="custom-card">
                    <div class="card-img-container">
                        <img src="assets/images/action-en-cours1.webp" alt="Autonomie">
                    </div>
                    <div class="p-4">
                        <div class="d-flex justify-content-between mb-2">
                            <small class="text-muted">7 oct. 2025</small>
                            <span class="badge bg-light text-danger">Action en cours</span>
                        </div>
                        <h5 class="fw-bold">Gagner en autonomie et s’épanouir</h5>
                        <a href="https://armeedusalut.fr/blog/temoignages/gagner-en-autonomie-et-sepanouir/" class="text-danger fw-bold text-decoration-none">Lire la suite →</a>
                    </div>
                </div>
            </div>

            <!-- 3. Moi demain -->
            <div class="col-md-4 article-item" data-tag="actualite">
                <div class="custom-card">
                    <div class="card-img-container">
                        <img src="assets/images/actualite2.webp" alt="Moi demain">
                    </div>
                    <div class="p-4">
                        <div class="d-flex justify-content-between mb-2">
                            <small class="text-muted">1 oct. 2025</small>
                            <span class="badge bg-light text-danger">Actualités</span>
                        </div>
                        <h5 class="fw-bold">Moi demain : promouvoir la parole et le parcours</h5>
                        <a href="https://armeedusalut.fr/blog/actualites/moi-demain-promotion-parcours-vie/" class="text-danger fw-bold text-decoration-none">Lire la suite →</a>
                    </div>
                </div>
            </div>

            <!-- 4. Jeunes vulnérables -->
            <div class="col-md-4 article-item" data-tag="actualite">
                <div class="custom-card">
                    <div class="card-img-container">
                        <img src="assets/images/actualite3.webp" alt="Jeunes vulnérables">
                    </div>
                    <div class="p-4">
                        <div class="d-flex justify-content-between mb-2">
                            <small class="text-muted">29 sept. 2025</small>
                            <span class="badge bg-light text-danger">Actualités</span>
                        </div>
                        <h5 class="fw-bold">Les jeunes vulnérables au cœur des combats</h5>
                        <a href="https://armeedusalut.fr/blog/actualites/jeunes-vulnerables-combats-armee-du-salut/" class="text-danger fw-bold text-decoration-none">Lire la suite →</a>
                    </div>
                </div>
            </div>

            <!-- 5. La Colline Lyon -->
            <div class="col-md-4 article-item" data-tag="action-en-cours">
                <div class="custom-card">
                    <div class="card-img-container">
                        <img src="assets/images/action-en-cours2.webp" alt="La Colline Lyon">
                    </div>
                    <div class="p-4">
                        <div class="d-flex justify-content-between mb-2">
                            <small class="text-muted">26 sept. 2025</small>
                            <span class="badge bg-light text-danger">Action en cours</span>
                        </div>
                        <h5 class="fw-bold">A Lyon, un nouveau refuge pour les mères isolées</h5>
                        <a href="https://armeedusalut.fr/blog/actualites/colline-lyon-meres-isolees/" class="text-danger fw-bold text-decoration-none">Lire la suite →</a>
                    </div>
                </div>
            </div>

            <!-- 6. Prison Lutterbach -->
            <div class="col-md-4 article-item" data-tag="actualite">
                <div class="custom-card">
                    <div class="card-img-container">
                        <img src="assets/images/actualite4.webp" alt="Prison Lutterbach">
                    </div>
                    <div class="p-4">
                        <div class="d-flex justify-content-between mb-2">
                            <small class="text-muted">17 sept. 2025</small>
                            <span class="badge bg-light text-danger">Actualités</span>
                        </div>
                        <h5 class="fw-bold">La porte de la prison est aussi une porte de sortie</h5>
                        <a href="https://armeedusalut.fr/blog/actualites/centre-penitentiaire-lutterbach-travail/" class="text-danger fw-bold text-decoration-none">Lire la suite →</a>
                    </div>
                </div>
            </div>

            <!-- 7. Inconditionnalité -->
            <div class="col-md-4 article-item" data-tag="temoignage">
                <div class="custom-card">
                    <div class="card-img-container">
                        <img src="assets/images/temoignage1.webp" alt="Engagement">
                    </div>
                    <div class="p-4">
                        <div class="d-flex justify-content-between mb-2">
                            <small class="text-muted">16 sept. 2025</small>
                            <span class="badge bg-light text-danger">Témoignages</span>
                        </div>
                        <h5 class="fw-bold">Dans nos établissements : un engagement quotidien</h5>
                        <a href="https://armeedusalut.fr/blog/temoignages/inconditionnalite-accueil-etablissements/" class="text-danger fw-bold text-decoration-none">Lire la suite →</a>
                    </div>
                </div>
            </div>

            <!-- 8. Médiation animale -->
            <div class="col-md-4 article-item" data-tag="actualite">
                <div class="custom-card">
                    <div class="card-img-container">
                        <img src="assets/images/actualite5.webp" alt="Médiation animale">
                    </div>
                    <div class="p-4">
                        <div class="d-flex justify-content-between mb-2">
                            <small class="text-muted">16 sept. 2025</small>
                            <span class="badge bg-light text-danger">Actualités</span>
                        </div>
                        <h5 class="fw-bold">La médiation animale contre l’isolement</h5>
                        <a href="https://armeedusalut.fr/blog/actualites/mediation-animale-handicap/" class="text-danger fw-bold text-decoration-none">Lire la suite →</a>
                    </div>
                </div>
            </div>

            <!-- 9. Musicothérapie -->
            <div class="col-md-4 article-item" data-tag="temoignage">
                <div class="custom-card">
                    <div class="card-img-container">
                        <img src="assets/images/temoignage2.webp" alt="Musicothérapie">
                    </div>
                    <div class="p-4">
                        <div class="d-flex justify-content-between mb-2">
                            <small class="text-muted">15 sept. 2025</small>
                            <span class="badge bg-light text-danger">Témoignages</span>
                        </div>
                        <h5 class="fw-bold">La musicothérapie en EHPAD</h5>
                        <a href="https://armeedusalut.fr/blog/temoignages/musicotherapie-ehpad-nantes/" class="text-danger fw-bold text-decoration-none">Lire la suite →</a>
                    </div>
                </div>
            </div>

        </div> <!-- Fin row -->
    </div> <!-- Fin container -->
</main>

<footer><?php require_once 'block/footer.php'; ?></footer>
</body>
</html>