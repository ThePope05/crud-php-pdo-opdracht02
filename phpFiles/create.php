<?php

include("config.php");

$dsn = "mysql:host=$dbHost;dbname=$dbName;charset=UTF8";

var_dump($_POST);

try {
    $pdo = new PDO($dsn, $dbUser, $dbPass);
} catch(PDOException $e){
    echo $e->getMessage();
}

$sql = "INSERT INTO rollercoaster 
            (`id`,
             `name`, 
             `park`, 
             `country`, 
             `topSpeed`, 
             `height`, 
             `date`, 
             `rating`)
VALUES(
            null,
            :name,
            :park,
            :country,
            :topSpeed,
            :height,
            :date,
            :rating
            )";

$statement = $pdo->prepare($sql);

$statement->bindValue(":name", $_POST["name"]);
$statement->bindValue(":park", $_POST["park"]);
$statement->bindValue(":country", $_POST["country"]);
$statement->bindValue(":topSpeed", $_POST["topSpeed"]);
$statement->bindValue(":height", $_POST["height"]);
$statement->bindValue(":date", $_POST["date"]);
$statement->bindValue(":rating", $_POST["rating"]);

$statement->execute();

if($statement){
    echo "Record is added";
    header('Refresh:3; url=../index.php');
}
else{
    echo "Record is not added";
    header('Refresh:3; url=../index.php');
}