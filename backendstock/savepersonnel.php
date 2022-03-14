<?php  

  include 'database.php';
    
  header('Access-Control-Allow-Origin: *'); 
  header("Access-Control-Allow-Credentials: true");
  header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
  header('Access-Control-Max-Age: 1000');
  header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token , Authorization');

  $_POST=json_decode(file_get_contents("php://input"),true);
  if(isset($_POST['nom']) && isset($_POST['postnom']) && isset($_POST['prenom']) && isset($_POST['sexe']) && isset($_POST['datenaiss']) && isset($_POST['etatcivil']) && isset($_POST['adresse']) && isset($_POST['telephone']) && isset($_POST['mail']))
  {

            $req=$db->prepare('INSERT INTO `personnel`(nom, postnom, prenom, sexe, datenaiss, etatcivil, adresse, telephone, mail) VALUES (:nom, :postnom, :prenom, :sexe, :datenaiss, :etatcivil, :adresse, :telephone, :mail)');
            $req->execute(array(              
              'nom' => $nom,            
              'postnom' => $postnom,            
              'prenom' => $prenom,            
              'sexe' => $sexe,            
              'datenaiss' => $datenaiss,            
              'etatcivil' => $etatcivil,            
              'adresse' => $adresse,            
              'telephone' => $telephone,            
              'mail' => $mail           
             ));
    
    }

?>