<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">
<?php require_once 'block/head.php';?>

<body class="login-page d-flex flex-column min-vh-100">
<header><?php require_once 'block/nav.php'; ?></header>

<main class="flex-grow-1 d-flex align-items-center justify-content-center py-5" style="margin-top: 80px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5"> <!-- Un peu plus large que login pour les noms/prénoms -->
                <div class="card shadow-lg p-4" style="border-radius: 12px; border: none;">
                    <h3 class="text-center mb-4 text-danger fw-bold">Créer un compte</h3>

                    <form action="inscription_traitement.php" method="POST" id="registerForm" novalidate>

                        <!-- Ligne Prénom / Nom -->
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="prenom" class="form-label">Prénom</label>
                                <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Jean" required>
                                <div class="invalid-feedback">Prénom requis.</div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="nom" class="form-label">Nom</label>
                                <input type="text" class="form-control" id="nom" name="nom" placeholder="Dupont" required>
                                <div class="invalid-feedback">Nom requis.</div>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Adresse e-mail</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="exemple@mail.com" required>
                            <div class="invalid-feedback">Veuillez entrer une adresse e-mail valide.</div>
                        </div>

                        <!-- Mot de passe -->
                        <div class="mb-3">
                            <label for="password" class="form-label">Mot de passe</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="********" minlength="8" required>
                            <div class="invalid-feedback">8 caractères minimum requis.</div>
                        </div>

                        <!-- Confirmation Mot de passe -->
                        <div class="mb-4">
                            <label for="password_confirm" class="form-label">Confirmer le mot de passe</label>
                            <input type="password" class="form-control" id="password_confirm" name="password_confirm" placeholder="********" required>
                            <div class="invalid-feedback">Veuillez confirmer votre mot de passe.</div>
                        </div>

                        <button type="submit" class="btn btn-danger w-100 fw-bold py-2 rounded-pill shadow-sm">S'INSCRIRE</button>

                        <p class="text-center mt-3 mb-0">Déjà inscrit ?
                            <a href="login.php" class="text-danger fw-bold text-decoration-none">Se connecter</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include 'block/footer.php';?>

<!-- Validation Bootstrap -->
<script>
    (() => {
        const form = document.getElementById('registerForm');
        form.addEventListener('submit', event => {
            const password = document.getElementById('password');
            const confirm = document.getElementById('password_confirm');

            // Petite vérification supplémentaire pour les mots de passe identiques
            if (password.value !== confirm.value) {
                confirm.setCustomValidity("Les mots de passe ne correspondent pas.");
            } else {
                confirm.setCustomValidity("");
            }

            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        }, false);
    })();
</script>
</body>
</html>