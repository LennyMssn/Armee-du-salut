<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<?php require_once 'block/head.php';?>

<body class="login-page d-flex flex-column min-vh-100">
<header><?php require_once 'block/nav.php'; ?></header>

<!-- Un seul <main> avec un padding suffisant pour la nav fixe -->
<main class="flex-grow-1 d-flex align-items-center justify-content-center py-5" style="margin-top: 80px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card shadow-lg p-4" style="border-radius: 12px; border: none;">
                    <h3 class="text-center mb-4 text-danger fw-bold">Connexion</h3>

                    <form action="login_traitement.php" method="POST" id="loginForm" novalidate>
                        <div class="mb-3">
                            <label for="email" class="form-label">Adresse e-mail</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="exemple@mail.com" required>
                            <div class="invalid-feedback">Veuillez entrer une adresse e-mail valide.</div>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Mot de passe</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="********" required>
                            <div class="invalid-feedback">Veuillez entrer votre mot de passe.</div>
                        </div>

                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <a href="#" class="text-danger small text-decoration-none">Mot de passe oublié ?</a>
                        </div>

                        <button type="submit" class="btn btn-danger w-100 fw-bold py-2 rounded-pill">SE CONNECTER</button>

                        <p class="text-center mt-3 mb-0">Pas encore de compte ?
                            <a href="inscription.php" class="text-danger fw-bold text-decoration-none">Créer un compte</a>
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
        const form = document.getElementById('loginForm');
        form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        });
    })();
</script>
</body>
</html>