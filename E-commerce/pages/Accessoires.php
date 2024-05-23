
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./main page.css">
    <title>Accessoires</title>
</head>
<body>
<?php 
include "header.php";
$produits = getAllProducts();
?>
    <br/>
    <img class="image" src="">
    <div class="linetitle">
        <div class="coloredline"></div>
        <h1 class="top" >Accessoires</h1>
        <div class="coloredline"></div>
    </div>
    <div class="products-container">
        <?php
            foreach($produits as $produit){
                print'<div class="product">
                <a href= "#"> <img class="img" src="../imgs/'.$produit['image'].'" > </a>
                <p>'.$produit['nom'].'</p>
                <p class="price">'.$produit['prix'].'</p>
                </div> ';
            }
        ?>
        
    </div>
    <br/>
    <footer>
        <div class="footer-container">
            <div class="footer-logo">
                <img src="../imgs/logo.jpg" alt="Logo de l'entreprise">
            </div>
            <div class="footer-info">
                <p>Téléphone: +216 55 519 895</p>
                <p>Adresse:
                    <ol>
                        <li>Avenue Habib Bourguiba, Ezzahra</li>
                        <li>Tunisia Mall 1 Lac 2(3ème étage)</li>
                        <li>Manar City (3ème étage)</li>
                    </ol>
                </p>
            </div>
            <div class="footer-social">
                <a href="https://www.facebook.com/KarinaTunisie"><img src="../imgs/facebookicon.jpg" alt="Facebook"></a>
                <a href="https://www.instagram.com/karina.tunisie/"><img src="../imgs/instagramicon.jpg" alt="Instagram"></a>
                <a href="#"><img src="../imgs/tiktokicon.jpg" alt="Tiktok"></a>
            </div>
        </div>
    </footer>
    
</body>
</html>