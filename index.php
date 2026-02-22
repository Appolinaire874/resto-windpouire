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

<section class="horaires">
    <div class="container">
        <h2>Horaires d'ouverture</h2>
        <table>
            <tr>
                <td>Lundi - Vendredi</td>
                <td>12h00 - 14h30 | 19h00 - 22h30</td>
            </tr>
            <tr>
                <td>Samedi</td>
                <td>12h00 - 15h00 | 19h00 - 23h00</td>
            </tr>
            <tr>
                <td>Dimanche</td>
                <td>12h00 - 15h00</td>
            </tr>
        </table>
    </div>
</section>

<?php include 'footer.php'; ?>