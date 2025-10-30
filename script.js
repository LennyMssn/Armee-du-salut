// Toggle menu dropdown
function toggleMenu() {
    const menu = document.getElementById("dropdownMenu");
    menu.style.display = menu.style.display === "block" ? "none" : "block";
}

// Fermer le menu si on clique en dehors
window.onclick = function(event) {
    if (!event.target.matches('.account-btn')) {
        const menu = document.getElementById("dropdownMenu");
        if (menu && menu.style.display === "block") {
            menu.style.display = "none";
        }
    }
}

// Validation des champs requis
document.addEventListener("DOMContentLoaded", () => {
    const requiredFields = document.querySelectorAll("input[required], textarea[required]");

    requiredFields.forEach((el) => {
        el.addEventListener("invalid", (e) => {
            e.target.setCustomValidity("Ce champ est obligatoire.");
        });

        el.addEventListener("input", (e) => {
            e.target.setCustomValidity("");
        });
    });

    // Navbar qui disparaît au scroll
    const nav = document.querySelector('.main-nav');
    const hideAfter = 300; // hauteur en pixels après laquelle la nav disparaît

    window.addEventListener('scroll', () => {
        if (window.scrollY > hideAfter) {
            nav.classList.add('nav-hidden');
        } else {
            nav.classList.remove('nav-hidden');
        }
    });
});
