<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<?php require_once 'block/head.php';?>

<body class="page-index">
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

    <!-- SECTION ACTUALITÉS -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="d-flex justify-content-between align-items-end mb-4">
                <h2 class="fw-bold">Dernières actualités</h2>
                <a href="actu.php" class="text-danger fw-bold text-decoration-none">Voir tout →</a>
            </div>

            <div class="row g-4">
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

    <!-- SECTION CARROUSEL -->
    <section class="py-5 text-center bg-white">
        <div class="container">
            <h2 class="mb-5 fw-bold text-uppercase">Nos champs d'action sociale</h2>
            <div id="actionsCarousel" class="carousel slide mx-auto shadow-lg rounded-4 overflow-hidden" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#actionsCarousel" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#actionsCarousel" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#actionsCarousel" data-bs-slide-to="2"></button>
                </div>
                <div class="carousel-inner p-5" style="background-color: var(--dark);">
                    <div class="carousel-item active">
                        <img src="assets/images/actions7.webp" class="rounded shadow-sm mb-4" style="height: 300px; width: 100%; object-fit: cover;" alt="Jeunesse">
                        <h3 class="text-white">Enfance & Jeunesse</h3>
                        <p class="text-light-50 px-md-5">Éduquer, protéger et offrir un avenir à chaque enfant, peu importe son parcours.</p>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/actions1.webp" class="rounded shadow-sm mb-4" style="height: 300px; width: 100%; object-fit: cover;" alt="Exclusion">
                        <h3 class="text-white">Lutte contre l'Exclusion</h3>
                        <p class="text-light-50 px-md-5">Accueil de jour, maraudes et aide alimentaire pour les plus démunis.</p>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/actions3.webp" class="rounded shadow-sm mb-4" style="height: 300px; width: 100%; object-fit: cover;" alt="Handicap">
                        <h3 class="text-white">Handicap</h3>
                        <p class="text-light-50 px-md-5">Accompagner vers l'autonomie et favoriser l'inclusion sociale et professionnelle.</p>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#actionsCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#actionsCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </div>
    </section>

    <!-- SECTION DON FONCTIONNELLE -->
    <section class="py-5" style="background: var(--dark); color: white;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h2 class="display-4 fw-bold">Votre aide est précieuse</h2>
                    <p class="lead">Grâce à la déduction fiscale de 75%, un don de 100€ ne vous coûte réellement que 25€.</p>
                    <div class="d-flex align-items-center gap-3">
                        <div class="h1 fw-bold text-danger mb-0">75%</div>
                        <div class="small text-uppercase">de réduction fiscale <br>sur vos impôts</div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <!-- Début du Formulaire -->
                    <form action="traitement_don.php" method="POST" class="don-container text-dark bg-white p-4 rounded-4 shadow">
                        <h3 class="text-center fw-bold mb-4">Soutenir nos actions</h3>

                        <!-- Type de don -->
                        <div class="btn-group w-100 mb-3">
                            <button type="button" class="btn btn-outline-danger type-btn active" data-type="unique">Don unique</button>
                            <button type="button" class="btn btn-outline-danger type-btn" data-type="mensuel">Don mensuel</button>
                        </div>
                        <input type="hidden" name="type_don" id="selected_type" value="unique">

                        <!-- Grille de montants prédéfinis -->
                        <div class="amt-grid mb-3">
                            <button type="button" class="amt-btn btn btn-outline-danger" data-amount="50">50 €</button>
                            <button type="button" class="amt-btn btn btn-danger active" data-amount="150">150 €</button>
                            <button type="button" class="amt-btn btn btn-outline-danger" data-amount="300">300 €</button>
                        </div>

                        <!-- Montant libre -->
                        <div class="input-group mb-3">
                            <input type="number" id="custom_amt" class="form-control amt-input" placeholder="Autre montant">
                            <span class="input-group-text">€</span>
                        </div>

                        <!-- Champ caché qui contient le montant final à envoyer au PHP -->
                        <input type="hidden" name="montant" id="final_amount" value="150">

                        <!-- Affichage du calcul -->
                        <div class="alert alert-secondary text-center py-2">
                            Soit un coût réel de <strong class="h4 deduction-val text-danger">37.50 €</strong> après déduction.
                        </div>

                        <button type="submit" class="btn btn-danger btn-lg w-100 fw-bold rounded-pill shadow">VALIDER MON DON</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'block/footer.php';?>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const amtBtns = document.querySelectorAll(".amt-btn");
        const typeBtns = document.querySelectorAll(".type-btn");
        const customInput = document.getElementById("custom_amt");
        const finalAmountInput = document.getElementById("final_amount");
        const selectedTypeInput = document.getElementById("selected_type");
        const deductionText = document.querySelector(".deduction-val");

        // Mise à jour du calcul et du champ caché
        function updateDonation(amount) {
            const val = parseFloat(amount) || 0;
            const cost = val * 0.25; // 75% déduction
            deductionText.textContent = cost.toFixed(2) + " €";
            finalAmountInput.value = val;
        }

        // Gestion Unique / Mensuel
        typeBtns.forEach(btn => {
            btn.addEventListener("click", () => {
                typeBtns.forEach(b => b.classList.remove("active"));
                btn.classList.add("active");
                selectedTypeInput.value = btn.dataset.type;
            });
        });

        // Gestion des montants fixes
        amtBtns.forEach(btn => {
            btn.addEventListener("click", () => {
                amtBtns.forEach(b => {
                    b.classList.remove("active", "btn-danger");
                    b.classList.add("btn-outline-danger");
                });
                btn.classList.add("active", "btn-danger");
                btn.classList.remove("btn-outline-danger");

                customInput.value = ""; // Vider l'input libre
                updateDonation(btn.dataset.amount);
            });
        });

        // Gestion du montant libre
        customInput.addEventListener("input", (e) => {
            amtBtns.forEach(b => {
                b.classList.remove("active", "btn-danger");
                b.classList.add("btn-outline-danger");
            });
            updateDonation(e.target.value);
        });
    });
</script>

</body>
</html>