function toggleMenu() {
    const menu = document.getElementById("dropdownMenu");
    menu.style.display = menu.style.display === "block" ? "none" : "block";
}

window.onclick = function(event) {
    if (!event.target.matches('.account-btn')) {
        const menu = document.getElementById("dropdownMenu");
        if (menu && menu.style.display === "block") {
            menu.style.display = "none";
        }
    }
}
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
});
