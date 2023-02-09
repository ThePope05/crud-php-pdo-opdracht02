<?php

include("config.php");

$dsn = "mysql:host=$dbHost;dbname=$dbName;charset=UTF8";

var_dump($_POST);

try {
    $pdo = new PDO($dsn, $dbUser, $dbPass);
} catch(PDOException $e){
    echo $e->getMessage();
}

$sql = "UPDATE pizzas SET 
    size = :size,
    sauce = :sauce,
    topping = :topping,
    spices = :spices
    WHERE id = :id";

$statement = $pdo->prepare($sql);

$statement->bindValue(":size", $_POST["size"]);
$statement->bindValue(":sauce", $_POST["sauce"]);
$statement->bindValue(":topping", $_POST["topping"]);
$statement->bindValue(':id', $_POST['id']);

$usedSpices = "";
$allSpices = ["parsley", "oregano", "chiliFlakes", "blackPeper"];

$i = 0;
foreach($_POST as $item){
    if(in_array($item, $allSpices)){
        $usedSpices = $usedSpices . $item . " ";
    }
}

$statement->bindValue(":spices", $usedSpices);

$statement->execute();

if($statement){
    echo "Record is veranderd";
    header('Refresh:3; url=../index.php');
}
else{
    echo "Record is niet veranderd";
    header('Refresh:3; url=../index.php');
}