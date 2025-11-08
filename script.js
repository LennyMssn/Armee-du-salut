// Toggle menu dropdown

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

document.addEventListener("DOMContentLoaded", () => {
    const btnTop = document.getElementById("btnTop");

    window.addEventListener("scroll", () => {
        if (window.scrollY > 200) {
            btnTop.style.display = "block";
        } else {
            btnTop.style.display = "none";
        }
    });

    btnTop.addEventListener("click", () => {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    });
});

document.addEventListener("DOMContentLoaded", () => {
    const boutons = document.querySelectorAll(".filtre-btn");
    const articles = document.querySelectorAll(".article-actu");

    boutons.forEach(bouton => {
        bouton.addEventListener("click", () => {
            boutons.forEach(btn => btn.classList.remove("active"));
            bouton.classList.add("active");

            const filtre = bouton.getAttribute("data-filtre");

            articles.forEach(article => {
                const tag = article.getAttribute("data-tag");

                if (filtre === "all" || tag === filtre) {
                    article.parentElement.style.display = "flex";
                    article.style.opacity = "1";
                } else {
                    article.parentElement.style.display = "none";
                }
            });
        });
    });
});


// --- Menu burger avec flou d'arrière-plan ---
document.addEventListener("DOMContentLoaded", () => {
    const burgerBtn = document.getElementById("burgerBtn");
    const burgerMenu = document.getElementById("burgerMenu");
    const mainContent = document.querySelector("main");

    if (burgerBtn && burgerMenu) {
        burgerBtn.addEventListener("click", () => {
            burgerMenu.classList.toggle("active");
            document.body.classList.toggle("menu-open");
        });

        // Fermer le menu si on clique en dehors
        window.addEventListener("click", (e) => {
            if (!burgerMenu.contains(e.target) && !burgerBtn.contains(e.target)) {
                burgerMenu.classList.remove("active");
                document.body.classList.remove("menu-open");
            }
        });
    }
});

//don

document.addEventListener("DOMContentLoaded", () => {
    const freqBtns = document.querySelectorAll(".opt");
    const amtBtns  = document.querySelectorAll(".amt");
    const input    = document.querySelector(".amt-input");
    const deduction = document.querySelector(".deduction strong");

    // Choix de fréquence
    freqBtns.forEach(btn=>{
        btn.addEventListener("click",()=>{
            freqBtns.forEach(b=>b.classList.remove("active"));
            btn.classList.add("active");
        });
    });

    // Choix du montant
    amtBtns.forEach(btn=>{
        btn.addEventListener("click",()=>{
            amtBtns.forEach(b=>b.classList.remove("active"));
            btn.classList.add("active");
            input.value="";
            updateDeduction(parseFloat(btn.textContent));
        });
    });

    // Montant libre
    input.addEventListener("input",()=>{
        const val=parseFloat(input.value);
        if(!isNaN(val)&&val>0){
            amtBtns.forEach(b=>b.classList.remove("active"));
            updateDeduction(val);
        }
    });

    // Calcul déduction (25 % du montant)
    function updateDeduction(montant){
        deduction.textContent=(montant*0.25).toFixed(2)+" €";
    }

    // Par défaut : 15 €
    updateDeduction(15);
});
