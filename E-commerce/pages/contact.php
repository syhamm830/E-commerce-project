<?php

include 'functionvis.php';
if (!empty($_POST) and !empty($_POST['email'])){
    AddVisiteur($_POST);
    $user = AddVisiteur($_POST);   
        Session_start();;
        $_SESSION['email']=$user['email'];
        $_SESSION['nomprenom']=$user['nomprenom'];
        $_SESSION['mdp']=$user['mdp'];
        header('location:profile.php');
}
if (!empty($_POST) and !empty($_POST['email1'])){
    $user = ConnectVisiteur($_POST);
    
        Session_start();;
        $_SESSION['email']=$user['email1'];
        $_SESSION['nomprenom']=$user['nomprenom'];
        $_SESSION['mdp']=$user['mdp'];
        header('location:profile.php');
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>contact</title>
    <style>
        .checkbox-container {
            display: flex;
            align-items: center;
            margin-top: 2px; 
        }
        .checkbox-container input[type="checkbox"] {
            margin-left: -120px; 
        }
    </style>
</head>

<body>
<?php 
include "header.php";
?>    
    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="contact.php" method="POST">
                <h1>Créer un Compte</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                </div>
                <span>ou utilisez votre email pour vous inscrire</span>
                <input id="fullname" type="text" name="nomprenom" placeholder="Nom et Prénom" required>
                <input id="email" type="email" name="email" placeholder="Email" required>
                <input type="password" name="mdp" placeholder="Mot de passe" required>
                <textarea class="inputcontact1" name="message"  placeholder="Message"></textarea>
                <div class="checkbox-container">
                    <input type="checkbox" id="ageCheck">
                    <span for="ageCheck">Je confirme que j'ai plus de 18 ans.</span>
                </div>
                <button onclick="window.location.href='profile.php'">S'inscrire</button>
                
            </form>
        </div>

        <div class="form-container sign-in">
            <form action="contact.php" method="POST">
                <h1>Se Connecter</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                </div>
                <span>ou utilisez votre email et mot de passe</span>
                <input id="email1" type="email" name="email1" placeholder="Email" required>
                <input type="password" name="mdp1" placeholder="Mot de passe" required>
                <a href="#">Mot de passe oublié ?</a>
                <button><a href="./profile.php">Se Connecter</a></button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>De Retour !</h1>
                    <p>Entrez vos détails personnels pour profiter de toutes les fonctionnalités du site</p>
                    <button class="hidden" id="login">Se Connecter</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Bonjour !</h1>
                    <p style="margin-left: 40px;">Inscrivez-vous avec vos détails personnels pour profiter de toutes les fonctionnalités du site</p>
                    <button class="hidden" id="register">S'inscrire</button>
                </div>
            </div>
        </div>
    </div>
    <br/>
    

    <script src="../js/script.js"></script>
</body>
<footer>
    <div class="footer-container">
        <div class="footer-logo">
            <img src="../imgs/logo.jpg" alt="Logo de l'entreprise">
        </div>
        <div class="footer-info">
            <p>Téléphone: +216 55 519 895</p>
            <p>Adresse:
                <ul>
                    <li>Avenue Habib Bourguiba, Ezzahra</li>
                    <li>Tunisia Mall 1 Lac 2(3ème étage)</li>
                    <li>Manar City (3ème étage)</li>
                </ul>
            </p>
        </div>
        <div class="footer-social">
            <a href="https://www.facebook.com/KarinaTunisie"><img src="../imgs/facebookicon.jpg" alt="Facebook"></a>
            <a href="https://www.instagram.com/karina.tunisie/"><img src="../imgs/instagramicon.jpg" alt="Instagram"></a>
            <a href="#"><img src="../imgs/tiktokicon.jpg" alt="Tiktok"></a>
        </div>
    </div>
</footer>
</html>
