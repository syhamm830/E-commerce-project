<?php
function getAllCategories(){
  $servername = "localhost";
  $DBuser= "root" ;
  $DBpassword = "";
  $DBname= "ecommerce" ;

try {
    $conn = new PDO("mysql:host=$servername;dbname=$DBname", $DBuser, $DBpassword);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }

$requette = "SELECT * FROM categories";

$resultat = $conn -> query($requette);
$categories = $resultat -> fetchall();
return $categories;
}
function getAllProducts(){
  $servername = "localhost";
  $DBuser= "root" ;
  $DBpassword = "";
  $DBname= "ecommerce" ;

try {
    $conn = new PDO("mysql:host=$servername;dbname=$DBname", $DBuser, $DBpassword);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }

$requette = "SELECT * FROM produits";

$resultat = $conn -> query($requette);
$produits = $resultat -> fetchall();
return $produits;

}
?>
