<?php
     include 'database.php';

     header('Access-Control-Allow-Origin: *'); 
     header("Access-Control-Allow-Credentials: true");
     header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
     header('Access-Control-Max-Age: 1000');
     header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token , Authorization');
 
     $_POST=json_decode(file_get_contents("php://input"),true);

    if(isset($_POST['id']) && isset($_POST['fournisseur']) && isset($_POST['produit']) && isset($_POST['quantite']) && isset($_POST['prix']) && isset($_POST['devise']) && isset($_POST['dateoperation'])){

        $id=$_POST['id'];
        $fournisseur=$_POST['fournisseur'];
        $produit=$_POST['produit'];
        $quantite=$_POST['quantite'];
        $prix=$_POST['prix'];
        $devise=$_POST['devise'];
        $dateoperation=$_POST['dateoperation'];

            $stmt=$db->prepare("UPDATE commandecompany SET fournisseur=:fournisseur,produit=:produit,quantite=:quantite,prix=:prix,devise=:devise,dateoperation=:dateoperation WHERE id=:id");
            $stmt->execute([
                'fournisseur'=>$fournisseur,                
                'produit'=>$produit,                
                'quantite'=>$quantite,                
                'prix'=>$prix,                
                'devise'=>$devise,                
                'dateoperation'=>$dateoperation,
                'id'=>$id                
            ]);
  
    }
?>