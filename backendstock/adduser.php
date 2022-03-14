<?php

  include 'database.php';

  header('Access-Control-Allow-Origin: *'); 
  header("Access-Control-Allow-Credentials: true");
  header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
  header('Access-Control-Max-Age: 1000');
  header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token , Authorization');

  $_POST=json_decode(file_get_contents("php://input"),true);
    if(isset($_POST['noms']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['role'])){

        $noms=$_POST['noms'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $role=$_POST['role'];

            $stmt=$db->prepare("CALL pro_users(:noms, :username, :password, :role);");
            $stmt->execute([
                'noms'=>$noms, 
                'username'=>$username, 
                'password'=>$password, 
                'role'=>$role
            ]);
   
    }

?>