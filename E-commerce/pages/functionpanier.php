<?php
function connect(){
  $servername = "localhost";
  $DBuser= "root" ;
  $DBpassword = "";
  $DBname= "ecommerce" ;


  try {
      $conn = new PDO("mysql:host=$servername;dbname=$DBname", $DBuser, $DBpassword);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $conn;
  } catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
  }
}
function AddLivraison($data){
  error_log('Contenu de $data : ' . print_r($data, true));
  $conn = connect();
  $req = "INSERT INTO livraisons(adresse,numerodetelephone,codepromo) VALUES ('".$data['adresse']."','".$data['numerodetelephone']."','".$data['codepromo']."')";
  $resultat = $conn->query($req);
}
?>