<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma simples</title>
</head>
<body>
    <form method="get" action="">
        <label>Número 1:</label>
        <input type="number" name="num1" required><br><br>
        <label>Número 2:</label>
        <input type="number" name="num2" required><br><br>
        <input type="submit" name="somar" value="Somar">
    </form>
    <?php

    if (isset($_GET['somar'])) {
        $numero1 = $_GET['num1'];
        $numero2 = $_GET['num2'];
        $soma = $numero1 + $numero2;
        echo "<h3>O resultado da soma é: $soma</h3>";
        }

    ?>
</body>
</html>
