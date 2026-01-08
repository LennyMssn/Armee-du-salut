<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<?php require_once "block/head.php"; ?>
<body>
<header><?php require_once 'block/nav.php'; ?></header>
<main>
    <section class="hero-banner">
        <div class="container text-center">
            <h1 class="display-4 fw-bold">Contactez-nous</h1>
            <p class="lead">Une question ? Nos équipes vous répondent avec bienveillance.</p>
        </div>
    </section>

    <div class="container my-5">
        <?php if(isset($_GET['status']) && $_GET['status'] == 'success'): ?>
            <div class="alert alert-success text-center">Merci ! Votre message a bien été envoyé.</div>
        <?php endif; ?>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="custom-card p-5">
                    <form action="traitement_contact.php" method="POST">
                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Prénom</label>
                                <input type="text" name="prenom" class="form-control" placeholder="Jean" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Nom</label>
                                <input type="text" name="nom" class="form-control" placeholder="Dupont" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="jean.dupont@example.com" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Objet du message</label>
                            <select name="objet" class="form-select" required>
                                <option value="Demande d'information">Demande d'information</option>
                                <option value="Bénévolat">Devenir bénévole</option>
                                <option value="Don">Question sur les dons</option>
                                <option value="Autre">Autre</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Message</label>
                            <textarea name="message" class="form-control" rows="5" placeholder="Votre message ici..." required></textarea>
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