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
        <!-- Formulaire de don -->
        <form action="traitement_don.php" method="POST" class="don-container">
            <h2 class="text-center mb-4"><span class="badge bg-danger">Faites un don</span></h2>

            <!-- Type de don -->
            <div class="btn-group w-100 mb-4">
                <button type="button" class="btn btn-outline-danger type-btn active" data-type="unique">Don unique</button>
                <button type="button" class="btn btn-outline-danger type-btn" data-type="mensuel">Don mensuel</button>
            </div>
            <!-- Champ caché pour le type -->
            <input type="hidden" name="type_don" id="selected_type" value="unique">

            <!-- Grille de montants -->
            <div class="amt-grid">
                <button type="button" class="amt-btn" data-amount="30">30 €</button>
                <button type="button" class="amt-btn active" data-amount="60">60 €</button>
                <button type="button" class="amt-btn" data-amount="100">100 €</button>
            </div>

            <!-- Montant libre -->
            <div class="input-group mb-3">
                <input type="number" name="montant_libre" class="form-control amt-input" id="custom_amount" placeholder="Montant libre">
                <span class="input-group-text">€</span>
            </div>

            <!-- Champ caché pour le montant final choisi -->
            <input type="hidden" name="montant" id="final_amount" value="60">

            <div class="alert alert-info text-center">
                Votre don ne vous coûte que <br>
                <strong class="h3 deduction-val">15.00 €</strong> après déduction fiscale (75%)
            </div>

            <button type="submit" class="btn btn-danger btn-lg w-100 fw-bold rounded-pill shadow">JE DONNE MAINTENANT</button>
        </form>
    </div>
</main>

<?php require_once 'block/footer.php'; ?>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const amtBtns = document.querySelectorAll(".amt-btn");
        const typeBtns = document.querySelectorAll(".type-btn");
        const customInput = document.getElementById("custom_amount");
        const finalAmountInput = document.getElementById("final_amount");
        const selectedTypeInput = document.getElementById("selected_type");
        const deductionText = document.querySelector(".deduction-val");

        function updateDeduction(amount) {
            const val = parseFloat(amount) || 0;
            const coutReel = val * 0.25;
            deductionText.textContent = coutReel.toFixed(2) + " €";
            finalAmountInput.value = val;
        }

        // Gestion des types (Unique / Mensuel)
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
                amtBtns.forEach(b => b.classList.remove("active"));
                btn.classList.add("active");
                customInput.value = "";
                updateDeduction(btn.dataset.amount);
            });
        });

        // Gestion montant libre
        customInput.addEventListener("input", (e) => {
            amtBtns.forEach(b => b.classList.remove("active"));
            updateDeduction(e.target.value);
        });
    });
</script>
</body>
</html>