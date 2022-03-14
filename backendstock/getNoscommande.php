<?php
    include 'database.php';

    header('Access-Control-Allow-Origin: *'); 
    header("Access-Control-Allow-Credentials: true");
    header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
    header('Access-Control-Max-Age: 1000');
    header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token , Authorization');

    $id=(int) $_GET['id'];
    $stmt=$db->query("SELECT * FROM commandecompany WHERE id=$id");
    $data=$stmt->fetch();
    echo json_encode($data);

    if($data == null){
        echo "
            <script>
                document.location.href='http://localhost:3000'
            </script>
        ";
    }
?>