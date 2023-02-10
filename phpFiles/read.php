<?php

function retInfo($catagory = null){
    include('config.php');

    $dsn = "mysql:host=$dbHost;dbname=$dbName;charset=UTF8";

    try {
        $pdo = new PDO($dsn, $dbUser, $dbPass);
    } catch(PDOException $e){
        echo $e->getMessage();
    }

    if($catagory == null){
        $sql = "SELECT * FROM rollercoaster";
        
        $statement = $pdo->prepare($sql);
    }else{
        $sql = "SELECT * FROM rollercoaster 
        WHERE park = :park";

        $statement = $pdo->prepare($sql);

        $statement->bindValue(":park", $catagory);
    }

    $statement->execute();

    $result = $statement->fetchAll(PDO::FETCH_OBJ);

    return $result;
}