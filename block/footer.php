<footer class="site-footer">
    <div class="container">
        <div class="footer-inner">
            <!-- 1. Réseaux Sociaux -->
            <nav class="social-links" aria-label="Réseaux sociaux">
                <a href="https://facebook.com/..." target="_blank" aria-label="Facebook">
                    <svg viewBox="0 0 24 24"><path d="M22 12.07C22 6.48 17.52 2 11.93 2S2 6.48 2 12.07C2 17.12 5.66 21.25 10.44 22v-7.02H7.9v-2.91h2.54V9.41c0-2.5 1.5-3.88 3.79-3.88 1.1 0 2.25.2 2.25.2v2.47h-1.27c-1.25 0-1.64.78-1.64 1.58v1.9h2.79l-.45 2.91h-2.34V22C18.34 21.25 22 17.12 22 12.07z"/></svg>
                </a>
                <a href="https://linkedin.com/..." target="_blank" aria-label="LinkedIn">
                    <svg viewBox="0 0 24 24"><path d="M4.98 3.5A2.5 2.5 0 1 1 0 3.5a2.5 2.5 0 0 1 4.98 0zM.5 8.5h4.9v15H.5v-15zm7.9 0h4.7v2.2h.1c.7-1.3 2.5-2.6 5.2-2.6 5.6 0 6.6 3.7 6.6 8.4v7h-4.9v-6.2c0-1.5 0-3.5-2.1-3.5s-2.4 1.6-2.4 3.4v6.3H8.4v-15z"/></svg>
                </a>
                <a href="https://instagram.com/..." target="_blank" aria-label="Instagram">
                    <svg viewBox="0 0 24 24"><path d="M7 2h10a5 5 0 0 1 5 5v10a5 5 0 0 1-5 5H7a5 5 0 0 1-5-5V7a5 5 0 0 1 5-5zm5 6.3A4.7 4.7 0 1 0 16.7 13 4.7 4.7 0 0 0 12 8.3zm6.4-3.1a1.1 1.1 0 1 1-1.1 1.1 1.1 1.1 0 0 1 1.1-1.1zM12 10.8A1.2 1.2 0 1 1 10.8 12 1.2 1.2 0 0 1 12 10.8z"/></svg>
                </a>
            </nav>

            <!-- 2. Téléphone -->
            <div class="footer-contact">
                <a href="tel:+33143622500" class="footer-phone">
                    <i class="bi bi-telephone-fill me-2"></i> 01 43 62 25 00
                </a>
            </div>

            <!-- 3. Liens Légaux -->
            <div class="legal-links">
                <a href="/mentions-legales">Mentions légales</a>
                <a href="/privacy">Confidentialité</a>
            </div>
        </div>

        <!-- Copyright -->
        <div class="copyright">
            © <span id="year"></span> Fondation de l'Armée du Salut - Tous droits réservés
        </div>
    </div>

    <!-- Bouton Retour en haut (Bootstrap) -->
    <button type="button" class="btn btn-danger btn-lg rounded-circle shadow" id="btnTop" title="Retour en haut">
        ↑
    </button>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Met à jour l'année automatiquement
    document.getElementById('year').textContent = new Date().getFullYear();
</script>