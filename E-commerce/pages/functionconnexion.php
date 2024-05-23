<?php
function ConnectVisiteur($data){
    error_log('Contenu de $data : ' . print_r($data, true));
    $conn = connect();
    $requette = "SELECT * FROM visiteurs WHERE email='".$data['email1']."' AND mdp='".$data['mdp1']."'";
    $resultat = $conn->query($requette);
    $user = $resultat->fetch();
    
}
?>