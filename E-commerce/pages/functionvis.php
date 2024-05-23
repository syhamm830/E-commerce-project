<?php
function AddVisiteur($data){
    error_log('Contenu de $data : ' . print_r($data, true));
    $conn = connect();
    $requette = "INSERT INTO visiteurs(nomprenom,email,mdp,message) VALUES ('".$data['nomprenom']."','".$data['email']."','".$data['mdp']."','".$data['message']."')";
    $resultat = $conn->query($requette);
    if ($resultat){
      return true;
    }else{
      return false;
    }
}
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
function ConnectVisiteur($data){
  error_log('Contenu de $data : ' . print_r($data, true));
  $conn = connect();
  $requette = "SELECT * FROM visiteurs WHERE email='".$data['email1']."' AND mdp='".$data['mdp1']."'";
  $resultat = $conn->query($requette);
  $user = $resultat->fetch();
  
}


?>
