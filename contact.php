<?php
require_once 'config.php';
include 'header.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';
    
    // Ici vous pouvez ajouter l'envoi d'email ou la sauvegarde en base de données
    $success = "Merci pour votre message, nous vous répondrons dans les plus brefs délais.";
}
?>

<div class="container">
    <h2>Contactez-nous</h2>
    
    <div class="contact-info">
        <div class="info">
            <h3>Adresse</h3>
            <p>123 Rue de la Gastronomie<br>
            75001 Paris</p>
            
            <h3>Téléphone</h3>
            <p>01 23 45 67 89</p>
            
            <h3>Email</h3>
            <p>contact@legourmet.fr</p>
        </div>
        
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?..." width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
    
    <?php if (isset($success)): ?>
        <div class="success"><?php echo $success; ?></div>
    <?php endif; ?>
    
    <div class="contact-form">
        <h3>Envoyez-nous un message</h3>
        <form method="POST" action="">
            <div class="form-group">
                <label for="nom">Nom :</label>
                <input type="text" id="nom" name="nom" required>
            </div>
            
            <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" id="email" name="email" required>
            </div>
            
            <div class="form-group">
                <label for="message">Message :</label>
                <textarea id="message" name="message" rows="5" required></textarea>
            </div>
            
            <button type="submit" class="btn">Envoyer</button>
        </form>
    </div>
</div>

<?php include 'footer.php'; ?>