<?php

include("config.php");

$dsn = "mysql:host=$dbHost;dbname=$dbName;charset=UTF8";

try {
    $pdo = new PDO($dsn, $dbUser, $dbPass);
} catch(PDOException $e){
    echo $e->getMessage();
}

$sql = "INSERT INTO pizzas 
                (`id`,
                `size`,
                `sauce`,
                `topping`,
                `spices`) 
VALUES 
                (NULL,
                :size,
                :sauce, 
                :toppings,
                :spices);";

$statement = $pdo->prepare($sql);

$statement->bindValue(":size", $_POST["size"]);
$statement->bindValue(":sauce", $_POST["sauce"]);
$statement->bindValue(":toppings", $_POST["topping"]);

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
    echo "Record is toegevoegd";
    header('Refresh:3; url=../index.php');
}
else{
    echo "Record is niet toegevoegd";
    header('Refresh:3; url=../index.php');
}