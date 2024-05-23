<?php
Session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php 
include "header.php";
?>

<h1>Bienvenue <span style="text-primary"><?php echo $_SESSION['mdp']; ?></span></h1>
<table class="account-page">
        <tr>
            <td class="logout-orders">
                <h1>COMPTE</h1>
                <ul>
                    <li class="dec">
                        <img src="../imgs/dec.png" alt="user">
                        <a href="../mainpage.php" onclick="logout()">Déconnexion</a>
                    </li>
                    <li><h2>Historique des commandes</h2></li>
                </ul>
                <div class="orders">
                    <p>Vous n'avez encore passé aucune commande</p>
                </div>
            </td>
            
        </tr>
    </table>
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