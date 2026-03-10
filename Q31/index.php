<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Digite três números</h2>
    <form method="post">
        Número 1:
        <input type="number" name="n1" required>
        <br><br>
        Número 2:
        <input type="number" name="n2" required>
        <br><br>
        Número 3:
        <input type="number" name="n3" required>
        <br><br>
        <input type="submit" value="Ordenar">
    </form>

<?php

if(isset($_POST["n1"])){

$n1 = $_POST["n1"];
$n2 = $_POST["n2"];
$n3 = $_POST["n3"];

$numeros = array($n1, $n2, $n3);

sort($numeros);

echo "Ordem crescente: ";
echo $numeros[0] . " - " . $numeros[1] . " - " . $numeros[2];

}

?>
</body>
</html>