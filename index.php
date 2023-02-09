<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@100;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,1,0" />
    <link rel="stylesheet" href="style.css">
    <title>All rollercosters</title>
</head>
<body>
    <fieldset class="scroll">
        <legend>
            <h1>All rollercosters</h1>
        </legend>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Park</th>
                <th>Country</th>
                <th>Top speed km/h</th>
                <th>Height</th>
                <th>Date first open</th>
                <th>Rating</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <?php
                include("phpFiles/read.php");

                $allCosters = retInfo();

                foreach($allCosters as $coaster){
                    echo "<tr>";
                        echo "<td>$coaster->id</td>";
                        echo "<td>$coaster->name</td>";
                        echo "<td>$coaster->park</td>";
                        echo "<td>$coaster->country</td>";
                        echo "<td>$coaster->topSpeed</td>";
                        echo "<td>$coaster->height</td>";
                        echo "<td>$coaster->date</td>";
                        echo "<td>$coaster->rating</td>";
                        echo "<td><a href='editForm.php?id=$coaster->id'><span class='material-symbols-outlined'>edit</span></a></td>";
                        echo "<td><a href='phpFiles/delete.php?id=$coaster->id'><span class='material-symbols-outlined'>delete</span></a></td>";
                    echo "</tr>";
                }
            ?>
            <tr>
                <td><a href="createForm.php"><span class='material-symbols-outlined'>add_circle</span></a></td>
            </tr>
        </table>
    </fieldset>
</body>
</html>