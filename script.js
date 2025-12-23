document.addEventListener("DOMContentLoaded", () => {

    // --- 1. NAVBAR (Sécurisée) ---
    const nav = document.getElementById('mainNav');
    if (nav) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                nav.classList.add('scrolled', 'bg-dark');
            } else {
                nav.classList.remove('scrolled', 'bg-dark');
            }
        });
    }

    // --- 3. FILTRE ACTU (Sécurisé) ---
    const filterBtns = document.querySelectorAll(".filtre-btn");
    const articles = document.querySelectorAll(".article-item");

    if (filterBtns.length > 0) {
        filterBtns.forEach(btn => {
            btn.addEventListener("click", () => {
                filterBtns.forEach(b => {
                    b.classList.remove("active", "btn-danger");
                    b.classList.add("btn-outline-danger");
                });
                btn.classList.add("active", "btn-danger");
                btn.classList.remove("btn-outline-danger");

                const filter = btn.getAttribute('data-filtre');
                articles.forEach(art => {
                    // On utilise display "" pour laisser Bootstrap gérer le flex/block
                    art.style.display = (filter === "all" || art.getAttribute('data-tag') === filter) ? "" : "none";
                });
            });
        });
    }

    // --- 4. RETOUR EN HAUT (Sécurisé) ---
    const btnTop = document.getElementById("btnTop");
    if (btnTop) {
        window.addEventListener("scroll", () => {
            btnTop.style.display = window.scrollY > 300 ? "block" : "none";
        });
        btnTop.addEventListener("click", () => {
            window.scrollTo({ top: 0, behavior: "smooth" });
        });
    }
});