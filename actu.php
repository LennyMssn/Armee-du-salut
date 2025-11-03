<!DOCTYPE html>
<html lang="fr">
<?php require_once 'block/head.php';?>
<body>
<header><?php require_once 'block/nav.php'; ?></header>
<main>
    <section class="actu-section">
        <h1 class ="titre-actu" >Actualités</h1>
        <p>Suivez nos actions sur le terrain et découvrez l'impact de votre solidarité</p>
    </section>
    <article class="actualités">
        <div class="all-actu">
            <article class="primary-actu" data-tag="Actualités">
                <div class="image-container">
                    <img src="assets/images/actualite1.jpg" alt="Familles touchées par les ouragans">
                    <span class="badge">À la une</span>
                </div>

                <div class="info-actu">
                    <div class="date-tag">
                        <p class="heure">31 octobre 2025</p>
                        <p class="tag">Actualités</p>
                    </div>
                    <h2>Aidez les familles touchées par l’ouragan Melissa</h2>
                    <p>L’ouragan Melissa a frappé de plein fouet la Jamaïque, laissant derrière lui un pays dévasté.
                        Avec des vents atteignant près de 300 km/h, c’est l’une des pires tempêtes qu’ait connue l’île dans son histoire récente.</p>
                    <button onclick="window.location.href='https://armeedusalut.fr/blog/actualites/urgence-jamaique/';" class="btn-actu">Lire l'article complet -></button>
                </div>
            </article>
            <div class="filter">
                <button class="filtre-btn active" data-filtre="all">Tous les articles</button>
                <button class="filtre-btn" data-filtre="actualite">Actualités</button>
                <button class="filtre-btn" data-filtre="action-en-cours">Actions en cours</button>
                <button class="filtre-btn" data-filtre="temoignage">Témoignages</button>
            </div>
            <div class="blocs-actu">
                <a href="https://armeedusalut.fr/blog/temoignages/gagner-en-autonomie-et-sepanouir/">
                    <article class="article-actu" data-tag="action-en-cours">
                        <img src="/assets/images/action-en-cours1.jpg" alt="Personnes travaillant sur un chantier extérieur avec un véhicule utilitaire">
                        <div class="info-actu">
                            <div class="date-tag">
                                <p class="heure">7 octobre 2025</p>
                                <p class="tag">Action en cours</p>
                            </div>
                            <h2>Gagner en autonomie et s’épanouir</h2>
                        </div>
                    </article>
                </a>
                <a href="https://armeedusalut.fr/blog/actualites/moi-demain-promotion-parcours-vie/">
                    <article class="article-actu" data-tag="actualite">
                        <img src="/assets/images/actualite2.jpg" alt="Deux femmes discutant lors d’un événement">
                        <div class="info-actu">
                            <div class="date-tag">
                                <p class="heure">1 octobre 2025</p>
                                <p class="tag">Actualités</p>
                            </div>
                            <h2>Moi demain : promouvoir la parole et le parcours de vie</h2>
                        </div>
                    </article>
                </a>
                <a href="https://armeedusalut.fr/blog/actualites/jeunes-vulnerables-combats-armee-du-salut/">
                    <article class="article-actu" data-tag="actualite">
                        <img src="/assets/images/actualite3.jpg" alt="Homme et femme en train de travailler devant un ordinateur dans un espace de coworking">
                        <div class="info-actu">
                            <div class="date-tag">
                                <p class="heure">29 septembre 2025</p>
                                <p class="tag">Actualités</p>
                            </div>
                            <h2>Les jeunes vulnérables au cœur des combats de la Fondation</h2>
                        </div>
                    </article>
                </a>
                <a href="https://armeedusalut.fr/blog/actualites/colline-lyon-meres-isolees/">
                    <article class="article-actu" data-tag="action-en-cours">
                        <img src="/assets/images/action-en-cours2.jpg" alt="Entrée d’un bâtiment avec le panneau 'La Colline' et une porte vitrée">
                        <div class="info-actu">
                            <div class="date-tag">
                                <p class="heure">26 septembre 2025</p>
                                <p class="tag">Action en cours</p>
                            </div>
                            <h2>A Lyon, un nouveau refuge pour les mères isolées et leurs enfants</h2>
                        </div>
                    </article>
                </a>
                <a href="https://armeedusalut.fr/blog/temoignages/inconditionnalite-accueil-etablissements/">
                    <article class="article-actu" data-tag="temoignage">
                        <img src="/assets/images/temoignage1.jpg" alt="Un homme et une femme souriant à table avec des plateaux-repas">
                        <div class="info-actu">
                            <div class="date-tag">
                                <p class="heure">16 septembre 2025</p>
                                <p class="tag">Témoignages</p>
                            </div>
                            <h2>Dans nos établissements : un engagement quotidien</h2>
                        </div>
                    </article>
                </a>
                <a href="https://armeedusalut.fr/blog/temoignages/musicotherapie-ehpad-nantes/">
                    <article class="article-actu" data-tag="temoignage">
                        <img src="/assets/images/temoignage2.jpg" alt="Une animatrice interagit avec des personnes âgées dans une salle d’activité">
                        <div class="info-actu">
                            <div class="date-tag">
                                <p class="heure">15 septembre 2025</p>
                                <p class="tag">Témoignages</p>
                            </div>
                            <h2>La musicothérapie en EHPAD</h2>
                        </div>
                    </article>
                </a>
            </div>
        </div>
    </article>
</main>
<footer><?php require_once 'block/footer.php'; ?></footer>
</body>
</html>
