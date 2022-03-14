<?php
   include 'database.php';

   header('Access-Control-Allow-Origin: *'); 
   header("Access-Control-Allow-Credentials: true");
   header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
   header('Access-Control-Max-Age: 1000');
   header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token , Authorization');

   $_POST=json_decode(file_get_contents("php://input"),true);

  if(isset($_POST['id']) && isset($_POST['produit']) && isset($_POST['fournisseur']) && isset($_POST['quantite']) && isset($_POST['prix']) && isset($_POST['devise']) && isset($_POST['dateoperation'])){
   
        $id=$_POST['id'];
        $produit=$_POST['produit'];
        $fournisseur=$_POST['fournisseur'];      
        $quantite=$_POST['quantite'];
        $prix=$_POST['prix'];
        $devise=$_POST['devise'];
        $dateoperation=$_POST['dateoperation'];

            // $stmt=$db->prepare("CALL updateprovision(:produit,:fournisseur,:quantite,:prix,:devise,:dateoperation,:id)");
            $stmt=$db->prepare("UPDATE approvision SET produit=:produit,fournisseur=:fournisseur,quantite=:quantite,prix=:prix,devise=:devise,dateoperation=:devise WHERE id=:id");
            $stmt->execute([
                'produit'=>$produit,
                'fournisseur'=>$fournisseur,                     
                'quantite'=>$quantite,                
                'prix'=>$prix,                
                'devise'=>$devise,                
                'dateoperation'=>$dateoperation,                
                'id'=>$id                
            ]);
         
    }
?>