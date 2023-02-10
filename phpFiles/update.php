<?php

include("config.php");

$dsn = "mysql:host=$dbHost;dbname=$dbName;charset=UTF8";

var_dump($_POST);

try {
    $pdo = new PDO($dsn, $dbUser, $dbPass);
} catch(PDOException $e){
    echo $e->getMessage();
}

$sql = "UPDATE rollercoaster SET 
    name = :name,
    park = :park,
    country = :country,
    topSpeed = :topSpeed,
    height = :height,
    date = :date,
    rating = :rating

    WHERE id = :id";

$statement = $pdo->prepare($sql);

$statement->bindValue(":name", $_POST["name"]);
$statement->bindValue(":park", $_POST["park"]);
$statement->bindValue(":country", $_POST["country"]);
$statement->bindValue(":topSpeed", $_POST["topSpeed"]);
$statement->bindValue(":height", $_POST["height"]);
$statement->bindValue(":date", $_POST["date"]);
$statement->bindValue(":rating", $_POST["rating"]);
$statement->bindValue(':id', $_POST['id']);

$statement->execute();

if($statement){
    echo "Record is changed";
    header('Refresh:3; url=../index.php');
}
else{
    echo "Record is not changed";
    header('Refresh:3; url=../index.php');
}