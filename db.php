<?php 
    $host = "localhost";
    $data = "learning-california";
    $user = "root";
    $pass = "";
    $port = 3306;

    try {
        $pdo = new PDO("mysql:host=$host;port=$port;dbname=$data", $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Connected successfully";
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

        
    }
    catch (PDOException $e) {
        echo $e->getMessage();
    }
?>