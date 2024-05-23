
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./main page.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    </style>
        
    <title>Karina Tunisie-Main Page</title>
</head>
<body>
    <header>
        <div class="header-container">
            <div class="logo">
                <img src="./imgs/logo.jpg" alt="Logo de l'entreprise">
            </div>
            <nav class="main-nav">
                <ul>
                    <li ><a href="mainpage.php">Accueil</a></li>
                    <li><a href="#">Produits ▼</a>
                        <ul class="sub-menu">
                            <li><a href="./pages/Visage.php">Visage</a></li>
                            <li><a href="./pages/Cheveux.php">Cheveux</a></li>
                            <li><a href="./pages/Corps.php">Corps</a></li>
                            <li><a href="./pages/Maison.php">Maison</a></li>
                            <li><a href="./pages/Accessoires.php">Accessoires</a></li>
                        </ul>
                    </li>
                    <li><a href="./pages/panier.php">Panier et Paiement</a></li>
                    <li><a href="./pages/instructions.php">Instructions</a></li>
                    <li><a href="./pages/contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="slider">
        <div class="slides">
          <div class="slide">
            <img src="imgs/tem3.png" alt="Image 1">
          </div>
          <div class="slide">
            <img src="imgs/tem2.png" alt="Image 2">
          </div>
          <div class="slide">
            <img src="imgs/tem1.png" alt="Image 3">
          </div>
        </div>
    </div>
    <!--Ventes flash-->
    <div class="container">
        <div class="countventes">
            <div class="linetitle">
                <div class="coloredline"></div>
                <h1 class="top" >Ventes flash</h1>
                <div class="wrapper">
                    <div class="timer">
                        <div class="sub_timer">
                            <h1 id="day" class="digit">00</h1>
                            <p class="digit_name">Jours</p>
                        </div>
                        <div class="sub_timer">
                            <h1 id="hour" class="digit">00</h1>
                            <p class="digit_name">H</p>
                        </div>
                        <div class="sub_timer">
                            <h1 id="min" class="digit">00</h1>
                            <p class="digit_name">Min</p>
                        </div>
                        <div class="sub_timer">
                            <h1 id="sec" class="digit">00</h1>
                            <p class="digit_name">Sec</p>
                        </div>
                    </div>
                </div>
                <div class="coloredline"></div>
            </div>
        </div>
        
        <div class="products-container">
            <div class="product">
                <a href="dp/description pack highlighter.html"><img  class="img" src="imgs/pack highlighter.png" ></a>
                <p>Pack Highlighter</p>
                <p class="price">98dt </p>
            </div>
            <div class="product">
                <a href="dp/description pack soin du corps.html"><img class="img" src="imgs/pack soin du corps.png" ></a>
                <p>Pack soin du corps</p>
                <p class="price">75dt</p>
            </div>
            <div class="product">
                <a href="dp/description pack sidr.html"><img class="img" src="imgs/pack sidr.png" ></a>
                <p>Pack Sidr</p>
                <p class="price">53.9dt</p>
            </div>
            <div class="product">
                <a href="dp/description pack repousse cheveux.html"><img class="img" src="imgs/pack repousse cheveux.png" ></a>
                <p>Pack Repousse cheveux</p>
                <p class="price">129dt</p>
            </div>
        </div>
    <!--top des ventes-->
    <div class="linetitle">
        <div class="coloredline"></div>
        <h1 class="top" >Top des ventes</h1>
        <div class="coloredline"></div>
    </div>
        <div class="products-container">
            <div class="product">
                <a href="dp/description ecran solaire.php"><img  class="img" src="imgs/ecran sol.png" ></a>
                <p>Ecran solaire</p>
                <p class="price">74dt </p>
            </div>
            <div class="product">
                <a href="dp/description shampoing.php"><img class="img" src="imgs/shampoing.png" ></a>
                <p>SHAMPOOING CAVIAR VITAMINÉ</p>
                <p class="price">44 dt</p>
            </div>
            <div class="product">
                <a href="dp/description beurre de karité.php"><img class="img" src="imgs/beurre de carité.png" ></a>
                <p> beurre de karité PUR</p>
                <p class="price">25dt</p>
            </div>
            <div class="product">
                <a href="dp/description kari age.php"><img class="img" src="imgs/charbon.png" ></a>
                <p>KARI AGE</p>
                <p class="price">55dt</p>
            </div>
            <div class="product">
                <a href="dp/description avocado banane.php"><img class="img" src="imgs/choco.png" ></a>
                <p>AVOCADO BANANE</p>
                <p class="price">38dt</p>
            </div>
            <div class="product">
                <a href="dp/description gel aloe vera.php"><img class="img" src="imgs/aloe vera.png" ></a>
                <p>GEL ALOE VERA PUR</p>
                <p class="price">30dt</p>
            </div>
            <div class="product">
                <a href="dp/description créme collagéne.php"><img class="img" src="imgs/collagéne.png" ></a>
                <p>CRÈME COLLAGÈNE</p>
                <p class="price">35dt</p>
            </div>
            <div class="product">
                <a href="dp/description ampoules k10.php"><img class="img" src="imgs/vitamin.png" ></a>
                <p>LES AMPOULES K10</p>
                <p class="price">139dt</p>
            </div>
            <div class="product">
                <a href="dp/description kari eye.php"><img class="img" src="imgs/eye.png" ></a>
                <p>KARI EYE</p>
                <p class="price">89dt</p>
            </div>
            <div class="product">
                <a href="dp/description GEL ALOE VERA À BASE DE VITAMINE C.php"><img class="img" src="imgs/vitamin c.png" ></a>
                <p>GEL ALOE VERA À BASE DE VITAMINE C</p>
                <p class="price">65dt</p>
            </div>
        </div>
        <!--Nouveau arrivage-->
        <div class="linetitle">
            <div class="coloredline"></div>
            <h1 class="top" >Nouveau Arrivage</h1>
            <div class="coloredline"></div>
        </div>
        <div class="products-container">
            <div class="product">
                <a href="dp/description Sérum à acide Hyaluronique.php"><img  class="img" src="imgs/sérum à acide.png" ></a>
                <p>Sérum à l'Acide Hyaluronique</p>
                <p class="price">109dt </p>
            </div>
            <div class="product">
                <a href="dp/description ALOE FRAMBOISE.php"><img class="img" src="imgs/aloe framboise.png" ></a>
                <p>ALOE FRAMBOISE</p>
                <p class="price">47dt</p>
            </div>
            <div class="product">
                <a href="dp/description gelée capillaire.php"><img class="img" src="imgs/gelée capillaire.png" ></a>
                <p>gelée capillaire</p>
                <p class="price">32dt</p>
            </div>
            <div class="product">
                <a href="dp/description BRUME à base de musc blanc.php"><img class="img" src="imgs/brume.png" ></a>
                <p>BRUME à base de musc blanc</p>
                <p class="price">35dt</p>
            </div>
            <div class="product">
                <a href="dp/description BAUME À LÈVRES Orange à base de VITAMINE C.php"><img class="img" src="imgs/baume à lèvres.png" ></a>
                <p>BAUME À LÈVRES Orange à base de VITAMINE C</p>
                <p class="price">13.9dt</p>
            </div>
        </div>
        <!--Découvrez nos produits-->
        <div class="linetitle">
            <div class="coloredline"></div>
            <h1 class="top" >Découvrez nos produits</h1>
            <div class="coloredline"></div>
        </div>
        <div class="products-container">
        <div class="product">
                <a href="dp/description ecran solaire.php"><img  class="img" src="imgs/ecran sol.png" ></a>
                <p>Ecran solaire</p>
                <p class="price">74dt </p>
            </div>
            <div class="product">
                <a href="dp/description kari tint.php"><img class="img" src="imgs/kari tint.png" ></a>
                <p>KARI TINT</p>
                <p class="price">17.9dt</p>
            </div>
            <div class="product">
                <a href="dp/description tonique eclat.php"><img class="img" src="imgs/tonique éclat.png" ></a>
                <p>TONIQUE ÉCLAT VITAMINÉ</p>
                <p class="price">29dt</p>
            </div>
            <div class="product">
                <a href="dp/description kari d'or.php"><img class="img" src="imgs/kari d'or.png" ></a>
                <p>KARI D'OR</p>
                <p class="price">38dt</p>
            </div>
            <div class="product">
                <a href="dp/description ecran cheveux.php"><img class="img" src="imgs/ecran protecteur cheveux.png" ></a>
                <p>ECRAN CHEVEUX</p>
                <p class="price">49dt</p>
            </div>
        </div>
        <div class="products-container">
            <div class="product">
                <a href="dp/description kari mousse.php"><img  class="img" src="imgs/gel nettoyant.png" ></a>
                <p>KARI MOUSSE GLOW</p>
                <p class="price">33dt </p>
            </div>
            <div class="product">
                <a href="dp/description créme collagéne.php"><img class="img" src="imgs/collagéne.png" ></a>
                <p>CRÈME COLLAGÈNE</p>
                <p class="price">35dt</p>
            </div>
            <div class="product">
                <a href="dp/description Gel Aloe Vera au caviar et acide hyaluronique.php"><img class="img" src="imgs/gel aloe vera.png" ></a>
                <p>Gel d’Aloe Vera au caviar et acide hyaluronique</p>
                <p class="price">79dt</p>
            </div>
            <div class="product">
                <a href="dp/description GEL ALOE VERA À BASE DE VITAMINE C.php"><img class="img" src="imgs/gel vitamin c.png" ></a>
                <p> GEL ALOE VERA À BASE DE VITAMINE C</p>
                <p class="price">65dt</p>
            </div>
            <div class="product">
                <a href="dp/description GEL ALOE VERA À LA BAVE ESCARGOT.php"><img class="img" src="imgs/brave esc.png" ></a>
                <p>GEL ALOE VERA À LA BAVE D'ESCARGOT</p>
                <p class="price">45dt</p>
            </div>
        </div>
        
        <div class="voiri">
            <input type="checkbox" id="voir-plus-toggle" class="toggle-input">
            <label for="voir-plus-toggle" class="voirp" onclick="toggleProducts()">voir plus →</label>
        </div>
        
        <div class="products-container" id="products-container">
            <div class="product">
                <a href="dp/description kari age.php"><img class="img" src="imgs/charbon.png" ></a>
                <p>KARI AGE</p>
                <p class="price">55dt</p>
            </div>
            <div class="product">
                <a href="dp/description kari white.php"><img class="img" src="imgs/kari white.png" ></a>
                <p>KARI WHITE</p>
                <p class="price">47dt</p>
            </div>
            <div class="product">
                <a href="dp/description kari pure.php"><img class="img" src="imgs/kari pure.png" ></a>
                <p>KARI PURE </p>
                <p class="price">47dt</p>
            </div>
            <div class="product">
                <a href="dp/description beurre de karité.php"><img class="img" src="imgs/beurre de carité.png" ></a>
                <p> beurre de karité PUR</p>
                <p class="price">25dt</p>
            </div>
            <div class="product">
                <a href="dp/description eau micellaire.php"><img class="img" src="imgs/eau micellaire .png" ></a>
                <p>eau micellaire</p>
                <p class="price">34dt</p>
            </div>
        </div>
        <div class="products-container" id="product-container">
            <div class="product">
                <a href="dp/description Sérum immortel.php"><img  class="img" src="imgs/serum immortelle.png" ></a>
                <p>Sérum immortel</p>
                <p class="price">25dt </p>
            </div>
            <div class="product">
                <a href="dp/description huile de coco.php"><img class="img" src="imgs/huile coco.png" ></a>
                <p>huile de coco</p>
                <p class="price">17dt</p>
            </div>
            <div class="product">
                <a href="dp/description HUILE DE PÉPINS DE FIGUE DE BARBARIE.php"><img class="img" src="imgs/huile de pépin .png" ></a>
                <p>HUILE DE PÉPINS DE FIGUE DE BARBARIE</p>
                <p class="price">35dt</p>
            </div>
            <div class="product">
                <a href="dp/description vitamine E.php"><img class="img" src="imgs/vitamin E.png" ></a>
                <p>VITAMINE E</p>
                <p class="price">13dt</p>
            </div>
            <div class="product">
                <a href="dp/description Sérum à Acide Hyaluronique.php"><img  class="img" src="imgs/sérum à acide.png" ></a>
                <p>Sérum à l'Acide Hyaluronique</p>
                <p class="price">109dt </p>
            </div>
        </div>
        <div class="products-container" id="producs-container">
            <div class="product">
                <a href="dp/description shampoing.php"><img class="img" src="imgs/shampoing.png" ></a>
                <p>SHAMPOOING CAVIAR VITAMINÉ</p>
                <p class="price">44 dt</p>
            </div>
            <div class="product">
                <a href="dp/description huile magique.php"><img class="img" src="imgs/huile magique.png" ></a>
                <p>HUILE MAGIQUE</p>
                <p class="price">35dt</p>
            </div>
            <div class="product">
                <a href="dp/description kari pousse pro.php"><img class="img" src="imgs/kari pousse.png" ></a>
                <p>KARI POUSSE PRO</p>
                <p class="price">69dt</p>
            </div>
            <div class="product">
                <a href="dp/description ampoules k10.php"><img class="img" src="imgs/les ampoules.png" ></a>
                <p>LES AMPOULES K10</p>
                <p class="price">139dt</p>
            </div>
            <div class="product">
                <a href="dp/description sérum protecteur.php"><img class="img" src="imgs/SERUM KAVIAR.png" ></a>
                <p> SÉRUM THERMO PROTECTEUR </p>
                <p class="price">38dt</p>
            </div>
        </div>
        <div class="products-container" id="produts-container">
            <div class="product">
                <a href="dp/description HUILE D'AIL.php"><img  class="img" src="imgs/HUILE VEGETALE.png" ></a>
                <p>HUILE D'AIL</p>
                <p class="price">15dt </p>
            </div>
            <div class="product">
                <a href="dp/description tea tree.php"><img class="img" src="imgs/TEA TREE.png" ></a>
                <p>HUILE ESSENTIELLE DE TEA TREE </p>
                <p class="price">18dt</p>
            </div>
            <div class="product">
                <a href="dp/description choco banane.php"><img class="img" src="imgs/CHOCO BANANE.png" ></a>
                <p>CHOCO BANANE</p>
                <p class="price">38dt</p>
            </div>
            <div class="product">
                <a href="dp/description mango banane.php"><img class="img" src="imgs/MANGO BANANE.png" ></a>
                <p>MANGO BANANE</p>
                <p class="price">38dt</p>
            </div>
            <div class="product">
                <a href="dp/description baume rose.php"><img class="img" src="imgs/baume rouge.png" ></a>
                <p>BAUME À LÈVRES ROSE PROTECTEUR RAYON UV</p>
                <p class="price">12.9dt</p>
            </div>   
        </div>
    </div>
     <br/>
     <div class="audi">
        <audio controls>
            <source src="./James Blunt - You're Beautiful (Lyrics).mp3" type="audio/mp3">
         </audio>
     </div>
     
    <!--now the footer-->
    <footer>
        <div class="footer-container">
            <div class="footer-logo">
                <img src="imgs/logo.jpg" alt="Logo de l'entreprise">
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
                <a href="https://www.facebook.com/KarinaTunisie"><img src="imgs/facebookicon.jpg" alt="Facebook"></a>
                <a href="https://www.instagram.com/karina.tunisie/"><img src="imgs/instagramicon.jpg" alt="Instagram"></a>
                <a href="#"><img src="imgs/tiktokicon.jpg" alt="Tiktok"></a>
            </div>
        </div>
    </footer>
    <script src="js/countdown.js"></script>
    <script src="js/mainpage.js"></script>
    <script src="js/slider.js"></script>
    <script src="js/goback.js"></script>
</body>
</html>