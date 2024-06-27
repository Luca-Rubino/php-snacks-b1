<?php


$eta =  intval($_GET["eta"]);


isset($_GET["eta"]);
echo $eta;




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Es2</title>
</head>
<body>
    

<form action="./index.php" method="get">

<label for="nome">Nome: </label>
<input type="text" name="nome" id="nome">

<label for="eta">Eta: </label>
<input type="text" name="eta" id="eta">

<label for="email">Email: </label>
<input type="email" name="email" id="email">
<input type="submit" value="Convalida">


</form>


</body>
</html>