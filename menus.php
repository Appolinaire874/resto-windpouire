<?php
require_once 'config.php';
include 'header.php';

// Tableau des menus (vous pourrez plus tard les mettre en base de données)
$menus = [
    'entrees' => [
        ['nom' => 'Salade de chèvre chaud', 'prix' => '12€', 'description' => 'Salade verte, toasts de chèvre, miel'],
        ['nom' => 'Terrine de campagne', 'prix' => '10€', 'description' => 'Terrine maison, cornichons, pain de campagne'],
        ['nom' => 'Saumon fumé', 'prix' => '14€', 'description' => 'Saumon fumé, blinis, crème fraîche']
    ],
    'plats' => [
        ['nom' => 'Entrecôte grillée', 'prix' => '24€', 'description' => 'Entrecôte de bœuf, sauce béarnaise, frites maison'],
        ['nom' => 'Filet de bar', 'prix' => '22€', 'description' => 'Filet de bar, risotto aux légumes, sauce champagne'],
        ['nom' => 'Magret de canard', 'prix' => '23€', 'description' => 'Magret de canard, pommes sautées, sauce aux figues']
    ],
    'desserts' => [
        ['nom' => 'Crème brûlée', 'prix' => '9€', 'description' => 'Crème brûlée à la vanille de Madagascar'],
        ['nom' => 'Fondant au chocolat', 'prix' => '10€', 'description' => 'Fondant au chocolat, glace vanille'],
        ['nom' => 'Tarte Tatin', 'prix' => '9€', 'description' => 'Tarte Tatin maison, crème fraîche']
    ]
];
?>

<div class="container">
    <h2>Nos Menus</h2>
    
    <div class="menu-section">
        <h3>Entrées</h3>
        <div class="menu-items">
            <?php foreach ($menus['entrees'] as $item): ?>
            <div class="menu-item">
                <div class="menu-header">
                    <h4><?php echo $item['nom']; ?></h4>
                    <span class="prix"><?php echo $item['prix']; ?></span>
                </div>
                <p class="description"><?php echo $item['description']; ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    
    <div class="menu-section">
        <h3>Plats</h3>
        <div class="menu-items">
            <?php foreach ($menus['plats'] as $item): ?>
            <div class="menu-item">
                <div class="menu-header">
                    <h4><?php echo $item['nom']; ?></h4>
                    <span class="prix"><?php echo $item['prix']; ?></span>
                </div>
                <p class="description"><?php echo $item['description']; ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    
    <div class="menu-section">
        <h3>Desserts</h3>
        <div class="menu-items">
            <?php foreach ($menus['desserts'] as $item): ?>
            <div class="menu-item">
                <div class="menu-header">
                    <h4><?php echo $item['nom']; ?></h4>
                    <span class="prix"><?php echo $item['prix']; ?></span>
                </div>
                <p class="description"><?php echo $item['description']; ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    
    <div class="menu-info">
        <p>Menu du jour (entrée + plat + dessert) : 35€</p>
        <p>Menu enfant (moins de 12 ans) : 15€</p>
    </div>
</div>

<?php include 'footer.php'; ?>