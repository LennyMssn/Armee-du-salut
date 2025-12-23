<!DOCTYPE html>
<html lang="fr">
<?php require_once "block/head.php"; ?>
<body>
<header><?php require_once 'block/nav.php'; ?></header>
<main>
    <section class="hero-banner">
        <div class="container">
            <h1>Contactez-nous</h1>
            <p>Une question ? Nos équipes vous répondent avec bienveillance.</p>
        </div>
    </section>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="custom-card p-5">
                    <form action="traitement_contact.php" method="POST" class="needs-validation">
                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Prénom</label>
                                <input type="text" name="prenom" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Nom</label>
                                <input type="text" name="nom" class="form-control" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Message</label>
                            <textarea name="message" class="form-control" rows="5" required></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-danger btn-lg px-5 rounded-pill">ENVOYER LE MESSAGE</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
<?php require_once 'block/footer.php'; ?>
</body>
</html>