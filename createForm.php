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
    <title>Document</title>
</head>
<body>
<fieldset>
        <legend><h1>Add record</h1></legend>
        <form action="phpFiles/create.php" method="post">

            <label>Coaster name:</label>
            <input type="text" name="name">

            <label>Park name:</label>
            <input type="text" name="park">

            <label>Country:</label>
            <input type="text" name="country">
            
            <label>Top speed:</label>
            <input type="text" name="topSpeed">
            
            <label>Height:</label>
            <input type="text" name="height">
            
            <label>Opening date:</label>
            <input type="date" name="date">

            <label>Rating: <output>5.5</output></label>
            <input type="range" name="rating" min="0" max="10" step="0.1"
            oninput="document.querySelector('output').innerHTML = this.value" value="5.5">

            <button type="submit">Submit</button>
        </form>
    </fieldset>
</body>
</html>