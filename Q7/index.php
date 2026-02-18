<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Temperatura</title>
</head>
<body>
    <form method="get" action="">
        <label>Temperatura em Celsius:</label>
        <input type="number" name="Celsius" step="any" required><br><br>
        <input type="submit" name="Converter" value="Converter para Fahrenheit">
    </form>

    <?php
    if (isset($_GET['Converter'])) {
        $Celsius = $_GET['Celsius'];
        $Fahrenheit = ($Celsius * 1.8) + 32;

        echo "<h3>A temperatura convertida para Fahrenheit é: $Fahrenheit °F</h3>";
    }
    ?>
</body>
</html>