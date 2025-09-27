function toggleMenu() {
    const menu = document.getElementById("dropdownMenu");
    menu.style.display = menu.style.display === "block" ? "none" : "block";
}

// Fermer si clic ailleurs
window.onclick = function(event) {
    if (!event.target.matches('.account-btn')) {
        const menu = document.getElementById("dropdownMenu");
        if (menu && menu.style.display === "block") {
            menu.style.display = "none";
        }
    }
}
