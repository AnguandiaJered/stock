<?php
  include 'database.php';
    
  header('Access-Control-Allow-Origin: *'); 
  header("Access-Control-Allow-Credentials: true");
  header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
  header('Access-Control-Max-Age: 1000');
  header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token , Authorization');

  $_POST=json_decode(file_get_contents("php://input"),true);

    if(isset($_POST['designation']) && isset($_POST['quantite']) && isset($_POST['prix']) && isset($_POST['devise']) && isset($_POST['dateoperation']) && isset($_POST['categorie'])){

        $designation=$_POST['designation'];
        $quantite=$_POST['quantite'];
        $prix=$_POST['prix'];
        $devise=$_POST['devise'];
        $dateoperation=$_POST['dateoperation'];
        $categorie=$_POST['categorie'];     


            $stmt=$db->prepare("INSERT INTO produit(designation, quantite, prix, devise, dateoperation, categorie) VALUES (:designation, :quantite, :prix, :devise, :dateoperation, :categorie)");
            $stmt->execute([
                'designation'=>$designation,                
                'quantite'=>$quantite,                
                'prix'=>$prix,                
                'devise'=>$devise,                
                'dateoperation'=>$dateoperation,                
                'categorie'=>$categorie                 
            ]);
                
    }
?>