<?php
include 'functions.php' ;
$categories = getAllCategories();

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vente de produits cosmétiques bio</title>
    <link rel="stylesheet" href="./main page.css">
</head>
<body>
    <header>
        <div class="header-container">
            <div class="logo">
                <img src="../imgs/logo.jpg" alt="Logo de l'entreprise">
            </div>
            <nav class="main-nav">
                <ul>
                    <li ><a href="../mainpage.php">Accueil</a></li>
                    <li><a href="#">Produits ▼</a>
                        <ul class="sub-menu">
                        <?php foreach ($categories as $categorie): ?>
                        <li><a href="<?= $categorie['nom'] . '.php'; ?>"><?= $categorie['nom']; ?></a></li>
                        <?php endforeach; ?>
                        </ul>
                    </li>
                    <li><a href="panier.php">Panier et Paiement</a></li>
                    <li><a href="instructions.php">Instructions</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
</body>
</html>
