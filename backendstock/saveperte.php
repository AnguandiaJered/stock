<?php
  include 'database.php';
    
  header('Access-Control-Allow-Origin: *'); 
  header("Access-Control-Allow-Credentials: true");
  header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
  header('Access-Control-Max-Age: 1000');
  header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token , Authorization');

  $_POST=json_decode(file_get_contents("php://input"),true);
    if(isset($_POST['produit']) && isset($_POST['dateperte']) && isset($_POST['quantite']) && isset($_POST['typegaspillage'])){

        $produit=$_POST['produit'];
        $dateperte=$_POST['dateperte'];
        $quantite=$_POST['quantite']; 
        $typegaspillage=$_POST['typegaspillage']; 


            $stmt=$db->prepare("INSERT INTO perteproduit(produit, dateperte, quantite, typegaspillage) VALUES (:produit, :dateperte, :quantite, :typegaspillage)");
            $stmt->execute([
                'produit'=>$produit,                
                'dateperte'=>$dateperte,                
                'quantite'=>$quantite,                           
                'typegaspillage'=>$typegaspillage                           
            ]);
         
    }
?>