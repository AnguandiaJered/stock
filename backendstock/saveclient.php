<?php
      include 'database.php';
  
      header('Access-Control-Allow-Origin: *'); 
      header("Access-Control-Allow-Credentials: true");
      header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
      header('Access-Control-Max-Age: 1000');
      header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token , Authorization');

      $_POST=json_decode(file_get_contents("php://input"),true);
    if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['sexe']) && isset($_POST['adresse']) && isset($_POST['telephone']) && isset($_POST['mail'])){

        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $sexe=$_POST['sexe'];
        $adresse=$_POST['adresse'];
        $telephone=$_POST['telephone'];
        $mail=$_POST['mail'];


            $stmt=$db->prepare("INSERT INTO client(nom, prenom, sexe, adresse, telephone, mail) VALUES (:nom, :prenom, :sexe, :adresse, :telephone, :mail)");
            $stmt->execute([
                'nom'=>$nom,                
                'prenom'=>$prenom,                
                'sexe'=>$sexe,                
                'adresse'=>$adresse,                
                'telephone'=>$telephone,                
                'mail'=>$mail                
            ]);   
        
    }
?>