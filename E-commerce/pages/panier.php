<?php
include "functionpanier.php";
if (!empty($_POST) ){
    AddLivraison($_POST);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panier et Paiement</title>
    <link rel="stylesheet" href="./main page.css">
</head>
<body>
<?php 
include "header.php";
?>
    <br/>
    <div class="container-panier">
        <div class="cart-panier">
            <h2>Votre Panier</h2>
            <table class="table-panier">
                <thead>
                    <tr>
                        <th>Produit</th>
                        <th>Description</th>
                        <th>Prix</th>
                    </tr>
                </thead>
                <tbody id="cart-body">
                    <!-- Table rows for cart items will be dynamically added here -->
                </tbody>
            </table>
            <div class="total-panier">
                <h3>Total</h3>
                <p id="total-price">0dt</p>
            </div>
            
            <label for="confirm-panier" id="conf-panier">Confirmer la Commande</label>
            <label   id="conf-panier" onclick="clearCart()" >Vider le panier</label>
            <input type="checkbox" id="confirm-panier" class="confirm-panier">
            <div class="payment-panier" id="paymentForm-panier">
                <div class="box1">
                    <h2>Informations de livraison</h2>
                    <form id="formu" action="panier.php" method="POST">
                        <div>
                            <label for="add">Adresse Précise:</label>
                            <input type="text" name="adresse"id="add" required>
                        </div>
                        <div>
                            <label for="num">Numéro de Téléphone :</label>
                            <input type="number" name="numerodetelephone"id="num" required>
                        </div>
                        <div>
                            <label for="payment-method">Méthode de Paiement :</label><br><br/>
                            <input type="radio" id="payment-carte"  value="carte">
                            <label for="payment-carte">Par Carte</label><br>
                            <input type="radio" id="payment-espece" value="espece">
                            <label for="payment-espece">En Espèce</label>
                        </div>
                        <div id="carte-fields" style="display: none;">
                            <label for="name-panier">Nom sur la Carte :</label>
                            <input type="text" id="name-panier" required><br>
                            <label for="card-panier">Numéro de Carte :</label>
                            <input type="number" id="card-panier" required><br>
                            <label for="expiry-panier">Date d'Expiration :</label>
                            <input type="date" id="expiry-panier" required>
                        </div>
                        <div>
                            <label for="code-promo">Code promo :</label>
                            <select id="code-promo" onchange="togglePromoInput()">
                                <option value="disponible">Indisponible</option>
                                <option value="indisponible">Disponible</option>
                            </select>
                            <input type="text" name="codepromo" id="promo-input" style="display: none;" placeholder="Entrez votre code promo">
                        </div>
                        <button type="submit" onclick="handleFormSubmit()" onclick="window.location.href='mainpage.php'">Valider</button>
                    </form>
                </div>
            </div>
        </div>
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
    <script>
        
        const paymentCarte = document.getElementById('payment-carte');
        const paymentEspece = document.getElementById('payment-espece');
        const carteFields = document.getElementById('carte-fields');

        
        paymentCarte.addEventListener('change', () => {
            if (paymentCarte.checked) {
                carteFields.style.display = 'block';
            } else {
                carteFields.style.display = 'none';
            }
        });

        paymentEspece.addEventListener('change', () => {
            if (paymentEspece.checked) {
                carteFields.style.display = 'none';
            }
        });
        function togglePromoInput() {
            const promoSelect = document.getElementById('code-promo');
            const promoInput = document.getElementById('promo-input');

            if (promoSelect.value === 'indisponible') {
                promoInput.style.display = 'block';
            } else {
                promoInput.style.display = 'none';
            }
        }
        togglePromoInput();

        function handleFormSubmit() {
        alert("Votre commande a été placée avec succès !");
        }
    </script>
    <script src="../js/product.js"></script>
    <script src="../js/goback.js"></script>
</body>
</html>
