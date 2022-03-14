<?php
    include 'database.php';

    header('Access-Control-Allow-Origin: *'); 
    header("Access-Control-Allow-Credentials: true");
    header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
    header('Access-Control-Max-Age: 1000');
    header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token , Authorization');


    $stmt = $db->query("SELECT * FROM produit");

    $json_data = [];
    while ($data=$stmt->fetchAll()){
        $json_data[]=$data;
    }
    echo json_encode(['res'=>$json_data]);

?>