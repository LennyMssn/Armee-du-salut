<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<?php require_once 'block/head.php'; ?>
<body>
<header><?php require_once 'block/nav.php'; ?></header>

<main>
    <section class="hero-banner" style="background: url('assets/images/don.png') center/cover; height: 400px; position: relative;">
        <div style="position: absolute; inset:0; background: rgba(0,0,0,0.5); display: flex; align-items: center; justify-content: center;">
            <h1 class="text-white display-4 fw-bold">Nous avons besoin de vous</h1>
        </div>
    </section>

    <div class="container">
        <div class="don-container">
            <h2 class="text-center mb-4"><span class="badge bg-danger">Faites un don</span></h2>

            <div class="btn-group w-100 mb-4">
                <button class="btn btn-outline-danger active">Don unique</button>
                <button class="btn btn-outline-danger">Don mensuel</button>
            </div>

            <div class="amt-grid">
                <button class="amt-btn" data-amount="30">30 €</button>
                <button class="amt-btn active" data-amount="60">60 €</button>
                <button class="amt-btn" data-amount="100">100 €</button>
            </div>

            <div class="input-group mb-3">
                <input type="number" class="form-control amt-input" placeholder="Montant libre">
                <span class="input-group-text">€</span>
            </div>

            <div class="alert alert-info text-center">
                Votre don ne vous coûte que <br>
                <strong class="h3 deduction-val">15.00 €</strong> après déduction fiscale (75%)
            </div>

            <a href="regler.php" class="btn btn-danger btn-lg w-100 fw-bold rounded-pill shadow">JE DONNE MAINTENANT</a>
        </div>
    </div>
</main>

<?php require_once 'block/footer.php'; ?>
</body>
</html>