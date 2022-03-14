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
  
      $nom=$_POST['nom'];
      $postnom=$_POST['postnom'];
      $prenom=$_POST['prenom'];
      $sexe=$_POST['sexe'];
      $datenaiss=$_POST['datenaiss'];
      $etatcivil=$_POST['etatcivil'];
      $adresse=$_POST['adresse'];
      $telephone=$_POST['telephone'];
      $mail=$_POST['mail']; 
      $id=$_POST['id']; 
      
            $stmt=$db->prepare('UPDATE personnel SET nom=:nom,postnom=:postnom,prenom=:prenom,sexe=:sexe,datenaiss=:datenaiss,etatcivil=:etatcivil,adresse=:adresse,telephone=:telephone,mail=:mail WHERE id=:id');
            $stmt->execute(array(           
              'nom' => $nom,
              'postnom'=>$postnom,
              'prenom'=>$prenom,
              'sexe'=>$sexe,
              'datenaiss'=>$datenaiss,
              'etatcivil'=>$etatcivil,
              'adresse'=>$adresse,
              'telephone'=>$telephone,
              'mail'=>$mail,
              'id'=>$id
             ));
            
        

}

?>