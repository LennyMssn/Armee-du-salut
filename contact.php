<!DOCTYPE html>
<html lang="fr">
        <title>Contact</title>
        <?php require_once "block/head.php"; ?>
        <body>
            <header><?php require_once 'block/nav.php'; ?></header>
            <main>

                <section class="text-center text-white py-4" style="background-color:#1B1E5B;">
                    <h2 class="fw-bold mb-0">NOUS CONTACTER</h2>
                </section>
                <section class="social-section">
                    <div class="social-line"></div>

                    <div class="social-icons">
                        <a href="https://www.instagram.com/armeedusalutfrance/?hl=fr" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
                            <img src="https://cdn-icons-png.flaticon.com/512/2111/2111463.png" alt="Instagram">
                        </a>
                        <a href="https://www.facebook.com/people/Fondation-de-lArm%C3%A9e-du-Salut-France/100064903023958/#" target="_blank" rel="noopener noreferrer" aria-label="Facebook">
                            <img src="https://cdn-icons-png.flaticon.com/512/733/733547.png" alt="Facebook">
                        </a>
                        <a href="https://www.linkedin.com/company/fondation-armee-du-salut" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn">
                            <img src="https://cdn-icons-png.flaticon.com/512/174/174857.png" alt="LinkedIn">
                        </a>
                    </div>

                    <a class="phone-number" href="tel:+33143622500" aria-label="Appeler le 01 43 62 25 00"><strong>01 43 62 25 00</strong></a>

                    <div class="social-line"></div>
                </section>


                <section class="contact-form container my-5">
                    <h2 class="text-center mb-4">ENVOYEZ NOUS UN MESSAGE</h2>

                    <form action="traitement_contact.php" method="POST" class="contact-form-inner" novalidate>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="prenom" class="form-label">Prénom <span class="text-danger">*</span></label>
                                <input type="text" id="prenom" name="prenom" class="form-control" placeholder="Entrez votre prénom" required>
                            </div>
                            <div class="col-md-6">
                                <label for="nom" class="form-label">Nom <span class="text-danger">*</span></label>
                                <input type="text" id="nom" name="nom" class="form-control" placeholder="Entrez votre nom" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Adresse email <span class="text-danger">*</span></label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="Entrez votre adresse email" required>
                        </div>

                        <div class="mb-3">
                            <label for="objet" class="form-label">Objet du message <span class="text-danger">*</span></label>
                            <input type="text" id="objet" name="objet" class="form-control" placeholder="Entrez l'objet de votre message" required>
                        </div>

                        <div class="mb-4">
                            <label for="message" class="form-label">Votre message <span class="text-danger">*</span></label>
                            <textarea id="message" name="message" class="form-control" rows="5" placeholder="Entrez votre question ou votre message" required></textarea>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-danger btn-lg px-5">ENVOYER</button>
                        </div>
                    </form>
                </section>
            </main>
            <footer><?php require_once 'block/footer.php'; ?></footer>
        </body>
</html>
