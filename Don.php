<!DOCTYPE html>
<html lang="fr">
<?php require_once 'block/head.php'; ?>

<body>
<header><?php require_once 'block/nav.php'; ?></header>

<main>
    <!-- SECTION IMAGE + FORMULAIRE DE DON -->
    <section class="don-section">
        <div class="don-image">
            <img src="assets/images/don.png" alt="Appel aux dons">
            <div class="don-overlay"></div>
            <div class="don-content">
                <h1 class="don-texte">Nous avons besoin de vous</h1>

                <div class="don-box">
                    <h3 class="don-title"><span class="badge">Faites un don</span> </h3>

                    <div class="don-options">
                        <button class="opt active">Je donne une fois</button>
                        <button class="opt">Je donne tous les mois</button>
                    </div>

                    <div class="don-amounts">
                        <button class="amt">10 €</button>
                        <button class="amt active">15 €</button>
                        <button class="amt">20 €</button>
                    </div>

                    <input class="amt-input" type="number" placeholder="Montant libre (€)">
                    <p class="deduction">Soit <strong>3.75 €</strong> après déduction fiscale</p>

                    <a href="/Armee-du-salut/regler.php" class="don-submit">Je donne</a>

                </div>

            </div>
        </div>
    </section>
</main>

<?php include 'block/footer.php'; ?>
</body>
</html>
