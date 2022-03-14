<?php
    include 'database.php';

    header('Access-Control-Allow-Origin: *'); 
    header("Access-Control-Allow-Credentials: true");
    header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
    header('Access-Control-Max-Age: 1000');
    header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token , Authorization');

    $_POST=json_decode(file_get_contents("php://input"),true);

    if(isset($_POST['quantite']) && isset($_POST['quantite'])){

        $id=$_POST['id'];
        $quantite=$_POST['quantite'];

            $stmt=$db->prepare("UPDATE alerte SET quantite=:quantite WHERE id=:id");
            $stmt->execute([
                'quantite'=>$quantite,
                'id'=>$id                
            ]);      
    }
?>