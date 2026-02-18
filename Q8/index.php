<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Dólar para Real</title>
</head>
<body>
    <form method="get" action="">
        <label>Cotação do dolar:</label>
        <input type="text" name="cotação" step="any" required><br><br>
        <label>Quantidade de dolares:</label>
        <input type="number" name="quantidade" step="any" required><br><br>
        <input type="submit" name="Converter" value="Converter">
    </form>

    <?php
    if (isset($_GET['Converter'])) { 
        $cotação = $_GET['cotação'];
        $quantidade = $_GET['quantidade'];

        $reais = $cotação * $quantidade;

        echo "<h3>O valor convertido para reais é: R$ $reais</h3>";
    }
    ?>
</body>
</html>