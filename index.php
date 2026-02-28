<?php
require_once 'config.php';
include 'header.php';
?>

<div class="hero">
    <div class="container">
        <h2>Bienvenue chez <?php echo SITE_NAME; ?></h2>
        <p>Découvrez une cuisine raffinée dans un cadre chaleureux</p>
        <a href="menus.php" class="btn">Voir nos menus</a>
    </div>
</div>

<section class="presentation">
    <div class="container">
        <h2>Notre Restaurant</h2>
        <div class="content">
            <div class="text">
                <p>Le Gourmet est un restaurant traditionnel français situé au cœur de la ville. Notre chef passionné vous propose une cuisine authentique préparée avec des produits frais et de saison.</p>
                <p>Notre équipe vous accueille dans une ambiance conviviale pour vous faire vivre une expérience culinaire unique.</p>
            </div>
            <div class="image">
                <img src="images/restaurant.jpg" alt="Notre restaurant">
            </div>
        </div>
    </div>
</section>


<!-- SECTION 3 : ENGAGEMENTS QUALITÉ (IDÉE SUPPLÉMENTAIRE) -->
<!-- À MODIFIER : Tu peux ajouter cette section ou la remplacer par autre chose -->
<section class="engagements">
    <div class="container">
        <h2>Notre Engagement Qualité</h2>
        <div class="engagements-grid">
            <div class="engagement-item">
                <div class="engagement-icon">🌱</div>
                <h3>Produits Frais</h3>
                <p>Livraison quotidienne de nos partenaires locaux pour une fraîcheur optimale</p>
            </div>
            
            <div class="engagement-item">
                <div class="engagement-icon">👨‍🍳</div>
                <h3>Savoir-faire</h3>
                <p>Chefs passionnés qui perpétuent les recettes traditionnelles</p>
            </div>
            
            <div class="engagement-item">
                <div class="engagement-icon">🔍</div>
                <h3>Traçabilité</h3>
                <p>Nous connaissons l'origine de chaque ingrédient que nous utilisons</p>
            </div>
            
            <div class="engagement-item">
                <div class="engagement-icon">💚</div>
                <h3>Commerce Équitable</h3>
                <p>Prix justes pour nos producteurs partenaires</p>
            </div>
        </div>
    </div>
</section>






<!-- SECTION 1 : PLATS LOCAUX -->
<section class="plats-locaux">
    <div class="container">
        <h2>Découvrez quelques plats africains</h2>
        <p class="section-subtitle">Des saveurs authentiques propres à l'Afrique. Dégustez-les dans notre restaurant</p>
        
        <div class="carousel-container">
            <button class="carousel-btn prev" onclick="defilerGauche()">&#10094;</button>
            <button class="carousel-btn next" onclick="defilerDroite()">&#10095;</button>
            
            <div class="plats-carousel" id="platsCarousel">

                <div class="plat-card">
                    <div class="plat-image">
                        <img src="images/galette2.jpeg" alt="Gnommi">
                    </div>
                    <h3>Gnommi</h3>
                    <p class="plat-description">Des galettes faites à base de farine de maïs ou de petit mil.</p>
                    <div class="plat-footer">
                        <button class="btn-info" onclick="ouvrirModal('gnommi')">En savoir plus</button>
                        <span class="origine">Origine: Local</span>
                    </div>
                </div>


                
                
                <div class="plat-card">
                    <div class="plat-image">
                        <img src="images/toDHaricot.jpg" alt="SIMACO">
                    </div>
                    <h3>SIMACO</h3>
                    <p class="plat-description">Le "SIMACO" (en langue Dafing) est un repas à base d'haricot.</p>
                    <div class="plat-footer">
                        <button class="btn-info" onclick="ouvrirModal('simaco')">En savoir plus</button>
                        <span class="origine">Le savoir-faire Africain</span>
                    </div>
                </div>
                
                
                <div class="plat-card">
                    <div class="plat-image">
                        <img src="images/sounma.jpeg" alt="Le Sounma">
                    </div>
                    <h3>Le Sounma</h3>
                    <p class="plat-description">Le "Sounma" (en langue Mooré), ou pois de terre en français.</p>
                    <div class="plat-footer">
                        <button class="btn-info" onclick="ouvrirModal('sounma')">En savoir plus</button>
                        <span class="origine">Recette traditionnelle</span>
                    </div>
                </div>
                
                
                <div class="plat-card">
                    <div class="plat-image">
                        <img src="images/JusDeMil.jpeg" alt="Le Dolo">
                    </div>
                    <h3>Le Dolo</h3>
                    <p class="plat-description">Le DOLO en langue Dioula, communément appelé Dolo est en fait du JUS de MIL</p>
                    <div class="plat-footer">
                        <button class="btn-info" onclick="ouvrirModal('dolo')">En savoir plus</button>
                        <span class="origine">Spécialité du terroir</span>
                    </div>
                </div>
                
                

                <div class="plat-card">
                    <div class="plat-image">
                        <img src="images/baobab.jpeg" alt="TO sauce feuille de baobab">
                    </div>
                    <h3>TO sauce feuille de baobab</h3>
                    <p class="plat-description">Les feuilles de baobab riches en vitamines et aux vertus médicinales.</p>
                    <div class="plat-footer">
                        <button class="btn-info" onclick="ouvrirModal('baobab')">En savoir plus</button>
                        <span class="origine">Recette mystique</span>
                    </div>
                </div>
                
                

                <div class="plat-card">
                    <div class="plat-image">
                        <img src="images/coucous.jpeg" alt="Le Couscous">
                    </div>
                    <h3>Le Couscous</h3>
                    <p class="plat-description">Un repas fait à base de farine de mil ou de maïs, et de la farine de néré.</p>
                    <div class="plat-footer">
                        <button class="btn-info" onclick="ouvrirModal('couscous')">En savoir plus</button>
                        <span class="origine">Le goût du Néré</span>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>

<!-- MODALE POUR LES INFORMATIONS DÉTAILLÉES -->
<div id="modalPlat" class="modal">
    <div class="modal-content">
        <span class="close-modal" onclick="fermerModal()">&times;</span>
        <div id="contenuModal">
            <!-- Le contenu sera chargé dynamiquement via JavaScript -->
        </div>
    </div>
</div>









<!-- SECTION 2 : PARTENAIRES/FOURNISSEURS  -->
<section class="partenaires">
    <div class="container">
        <h2>Nos Partenaires de Confiance</h2>
        <p class="section-subtitle">Pour vous garantir des produits frais et de qualité, nous collaborons avec les meilleurs producteurs et fournisseurs locaux du Burkina Faso</p>
        
        <div class="carousel-container">
            <button class="carousel-btn prev" onclick="defilerPartenairesGauche()">&#10094;</button>
            <button class="carousel-btn next" onclick="defilerPartenairesDroite()">&#10095;</button>
            
            <div class="partenaires-carousel" id="partenairesCarousel">
                <!-- Carte partenaire 1 - Céréales -->
                <div class="partenaire-card">
                    <div class="partenaire-icon">
                        <img src="images/icone-cereales.png" alt="Céréales">
                    </div>
                    <h3>Coopérative Wend Panga</h3>
                    <p class="partenaire-desc">Producteurs de mil, </br>sorgho et maïs bio de la région du Centre-Nord.</br> Culture traditionnelle et commerce équitable.</p>
                    <div class="partenaire-meta">
                        <span class="type">Mil • Sorgho • Maïs</span>
                        <span class="depuis">Depuis 2005</span>
                    </div>
                </div>
                
                <!-- Carte partenaire 2 - Riz -->
                <div class="partenaire-card">
                    <div class="partenaire-icon">
                        <img src="images/icone-riz.png" alt="Riz">
                    </div>
                    <h3>Fermes rizicoles de Bagré</h3>
                    <p class="partenaire-desc">Riz étuvé de qualité supérieure </br>cultivé dans la plaine de Bagré. </br>Irrigation maîtrisée et récolte artisanale.</p>
                    <div class="partenaire-meta">
                        <span class="type">Riz étuvé • Riz parfumé</span>
                        <span class="depuis">Partenaires depuis 2012</span>
                    </div>
                </div>
                
                <!-- Carte partenaire 3 - Légumes -->
                <div class="partenaire-card">
                    <div class="partenaire-icon">
                        <img src="images/icone-legumes.png" alt="Légumes">
                    </div>
                    <h3>Association des Maraîchers de Ouagadougou</h3>
                    <p class="partenaire-desc">Légumes frais produits dans </br>les périmètres maraîchers de Tanghin et</br> de Gounghin. Livraison quotidienne.</p>
                    <div class="partenaire-meta">
                        <span class="type">Tomates • Oignons • Aubergines</span>
                        <span class="depuis">Depuis 2010</span>
                    </div>
                </div>
                
                <!-- Carte partenaire 4 - Viande -->
                <div class="partenaire-card">
                    <div class="partenaire-icon">
                        <img src="images/icone-viande.png" alt="Viande">
                    </div>
                    <h3>Fermes d'Élevage du Sahel</h3>
                    <p class="partenaire-desc">Viande de zébu et de mouton issue</br> d'élevages extensifs dans la région </br>du Sahel. Viande halal certifiée.</p>
                    <div class="partenaire-meta">
                        <span class="type">Bœuf • Mouton • Chèvre</span>
                        <span class="depuis">Certifié bio</span>
                    </div>
                </div>
                
                <!-- Carte partenaire 5 - Produits divers -->
                <div class="partenaire-card">
                    <div class="partenaire-icon">
                        <img src="images/icone-marche.png" alt="Marché">
                    </div>
                    <h3>Union des Producteurs de la Comoé</h3>
                    <p class="partenaire-desc">Regroupement de petits producteurs</br> fournissant haricots, niébé, pois de terre et</br> arachides de la région des Cascades.</p>
                    <div class="partenaire-meta">
                        <span class="type">Haricot • Niébé • Arachide</span>
                        <span class="depuis">Depuis 2008</span>
                    </div>
                </div>
                
                <!-- Carte partenaire 6 - Volaille -->
                <div class="partenaire-card">
                    <div class="partenaire-icon">
                        <img src="images/icone-poulet.png" alt="Volaille">
                    </div>
                    <h3>Ferme Avicole du Plateau</h3>
                    <p class="partenaire-desc">Poulets fermiers et pintades élevés</br> en plein air dans la région du Plateau </br>Central. Alimentation sans OGM.</p>
                    <div class="partenaire-meta">
                        <span class="type">Poulet • Pintade • Œufs</span>
                        <span class="depuis">Fournisseur exclusif</span>
                    </div>
                </div>
                
                <!-- Carte partenaire 7 - Poisson -->
                <div class="partenaire-card">
                    <div class="partenaire-icon">
                        <img src="images/icone-poisson.png" alt="Poisson">
                    </div>
                    <h3>Pisciculture de la Kompienga</h3>
                    <p class="partenaire-desc">Poissons d'eau douce élevés dans</br> le lac de la Kompienga. Tilapia </br>et silure frais toute l'année.</p>
                    <div class="partenaire-meta">
                        <span class="type">Tilapia • Silure • Carp</span>
                        <span class="depuis">Pêche du jour</span>
                    </div>
                </div>
                
                <!-- Carte partenaire 8 - Produits transformés -->
                <div class="partenaire-card">
                    <div class="partenaire-icon">
                        <img src="images/icone-epice.png" alt="Épices">
                    </div>
                    <h3>Groupement féminin Benkadi</h3>
                    <p class="partenaire-desc">Association de femmes transformant</br> le néré en soumbala, et produisant épices</br> traditionnelles et beurre de karité.</p>
                    <div class="partenaire-meta">
                        <span class="type">Soumbala • Épices • Karité</span>
                        <span class="depuis">Artisanales</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!--  JavaScript pour le défilement -->
<script>
function defilerPartenairesGauche() {
    const carousel = document.getElementById('partenairesCarousel');
    carousel.scrollLeft -= 350; // Largeur carte + gap
}

function defilerPartenairesDroite() {
    const carousel = document.getElementById('partenairesCarousel');
    carousel.scrollLeft += 350; // Largeur carte + gap
}
</script>



























<script>
// Données des plats avec leurs histoires et mythes
const platsData = {
    gnommi: {
        nom: "Gnommi",
        image: "images/galette2.jpeg",
        histoire: "Les galettes Gnommi sont préparées depuis des générations dans les villages du Burkina Faso. Traditionnellement, elles étaient offertes aux voyageurs comme signe d'hospitalité.",
        mythe: "On raconte que ces galettes auraient le pouvoir de protéger les chasseurs lors de leurs expéditions en brousse. Les anciens disent que la forme ronde représente le cycle de la vie.",
        origine: "Région des Hauts-Bassins, Burkina Faso",
        ingredients: ["Farine de mil", "Farine de maïs", "Eau", "Sel", "Épices locales"],
        saison: "Toute l'année",
        tradition: "Servi lors des cérémonies de mariage et des baptêmes"
    },
    simaco: {
        nom: "SIMACO",
        image: "images/toDHaricot.jpg",
        histoire: "Le SIMACO tire son nom de la langue Dafing. Ce plat nourrissant était traditionnellement consommé par les guerriers avant les batailles pour sa richesse en protéines.",
        mythe: "Selon la légende, ce plat aurait été révélé en rêve à une ancêtre par les esprits de la forêt. Les haricots symboliseraient la prospérité et la fertilité.",
        origine: "Région de la Boucle du Mouhoun",
        ingredients: ["Haricots rouges", "Huile de palme", "Oignons", "Piment", "Sel"],
        saison: "Saison des récoltes (octobre-décembre)",
        tradition: "Plat rituel pour les cérémonies de fin de deuil"
    },
    sounma: {
        nom: "Le Sounma",
        image: "images/sounma.jpeg",
        histoire: "Le Sounma (pois de terre) est cultivé dans les régions sahéliennes depuis des siècles. C'était la nourriture de base des commerçants traversant le désert.",
        mythe: "Les griots racontent que manger du Sounma rend sage, car la plante pousse en s'enfonçant dans la terre, symbolisant l'humilité et la connaissance profonde.",
        origine: "Zone sahélienne, Burkina Faso",
        ingredients: ["Pois de terre", "Sel", "Eau"],
        saison: "Récolte en fin de saison des pluies",
        tradition: "Offert aux écoliers pour stimuler leur intelligence"
    },
    dolo: {
        nom: "Le Dolo",
        image: "images/JusDeMil.jpeg",
        histoire: "Le Dolo est bien plus qu'une boisson, c'est un élément central de la culture. Brassé par les femmes selon des méthodes ancestrales, il est présent à toutes les étapes importantes de la vie.",
        mythe: "On dit que le Dolo a le pouvoir de révéler la vérité. Lors des palabres, boire du Dolo ensemble scelle les accords et les serments. Les esprits des ancêtres seraient présents dans chaque calebasse.",
        origine: "Communautés Dioula du Burkina Faso",
        ingredients: ["Mil rouge", "Eau", "Levure traditionnelle"],
        saison: "Préparation quotidienne",
        tradition: "Indispensable lors des mariages, funérailles et fêtes villageoises"
    },
    baobab: {
        nom: "TO sauce feuille de baobab",
        image: "images/baobab.jpeg",
        histoire: "Le baobab, arbre sacré, offre ses feuilles pour cette sauce traditionnelle. Chaque famille garde secrète sa recette transmise de mère en fille.",
        mythe: "Le baobab est considéré comme l'arbre qui parle. Ses feuilles auraient des vertus protectrices. Manger cette sauce protégerait des mauvais esprits et apporterait longévité.",
        origine: "Toutes les régions du Burkina Faso",
        ingredients: ["Feuilles de baobab séchées", "Viande séchée", "Poisson fumé", "Gombo", "Épices"],
        saison: "Saison sèche (récolte des feuilles)",
        tradition: "Servi lors des rituels de protection et des bénédictions"
    },
    couscous: {
        nom: "Le Couscous",
        image: "images/coucous.jpeg",
        histoire: "Le couscous africain se distingue par l'utilisation du néré (parkia biglobosa), une graine fermentée qui donne ce goût unique et umami caractéristique.",
        mythe: "Le néré serait un cadeau des dieux pour nourrir les humains. La fermentation représente la transformation, le passage du temps. Chaque bouchée rappelle que tout se transforme dans la vie.",
        origine: "Régions soudaniennes d'Afrique de l'Ouest",
        ingredients: ["Farine de mil", "Farine de maïs", "Graines de néré fermentées (soumbala)", "Eau"],
        saison: "Préparation traditionnelle pendant les fêtes",
        tradition: "Plat de partage par excellence, il rassemble les familles autour d'un même plat"
    }
};

function ouvrirModal(platId) {
    const plat = platsData[platId];
    if (!plat) return;
    
    const contenu = `
        <div class="modal-plat">
            <div class="modal-plat-image">
                <img src="${plat.image}" alt="${plat.nom}">
            </div>
            <h2>${plat.nom}</h2>
            
            <div class="modal-section">
                <h3>📜 Histoire et origine</h3>
                <p><strong>Origine:</strong> ${plat.origine}</p>
                <p>${plat.histoire}</p>
            </div>
            
            <div class="modal-section">
                <h3>✨ Mythes et légendes</h3>
                <p>${plat.mythe}</p>
            </div>
            
            <div class="modal-section">
                <h3>🥘 Ingrédients traditionnels</h3>
                <ul>
                    ${plat.ingredients.map(ing => `<li>${ing}</li>`).join('')}
                </ul>
            </div>
            
            <div class="modal-section">
                <h3>📅 Tradition et saison</h3>
                <p><strong>Saison:</strong> ${plat.saison}</p>
                <p><strong>Tradition:</strong> ${plat.tradition}</p>
            </div>
            
            <div class="modal-footer">
                <p class="invitation">Venez déguster ce plat traditionnel dans notre restaurant !</p>
                <button class="btn" onclick="fermerModal()">Fermer</button>
            </div>
        </div>
    `;
    
    document.getElementById('contenuModal').innerHTML = contenu;
    document.getElementById('modalPlat').style.display = 'block';
    document.body.style.overflow = 'hidden'; // Empêche le défilement
}

function fermerModal() {
    document.getElementById('modalPlat').style.display = 'none';
    document.body.style.overflow = 'auto'; // Réactive le défilement
}

// Fermer la modale si on clique en dehors
window.onclick = function(event) {
    const modal = document.getElementById('modalPlat');
    if (event.target == modal) {
        fermerModal();
    }
}
</script>

<?php include 'footer.php'; ?>