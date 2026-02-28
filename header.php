<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITE_NAME; ?> - Restaurant</title>
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
    <header>
        <!-- Barre d'information supérieure (élégante et discrète) -->
        <div class="header-top">
            <div class="container">
                <div class="header-info">
                    <div class="header-info-item">
                        <span class="icon">🕒</span>
                        <span>Lun-Ven: <span class="highlight">12h-14h30</span> | <span class="highlight">19h-22h30</span></span>
                    </div>
                    <div class="header-info-item">
                        <span class="icon">🕒</span>
                        <span>Sam: <span class="highlight">12h-15h</span> | <span class="highlight">19h-23h</span></span>
                    </div>
                    <div class="header-info-item">
                        <span class="icon">🕒</span>
                        <span>Dim: <span class="highlight">12h-15h</span></span>
                    </div>
                </div>
                <div class="header-info">
                    <div class="header-info-item">
                        <span class="icon">📞</span>
                        <span>+226 72 85 15 41</span>
                    </div>
                    <div class="header-info-item">
                        <span class="icon">📍</span>
                        <span>Ouagadougou, Burkina Faso</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Header principal (inchangé mais mieux intégré) -->
        <div class="header-main">
            <div class="container">
                <h1><?php echo SITE_NAME; ?></h1>
                <nav>
                    <ul>
                        <li><a href="index.php" class="active">Accueil</a></li>
                        <li><a href="menus.php">Nos Menus</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <main></main>