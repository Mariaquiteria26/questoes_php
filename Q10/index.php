<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja mamão com açucar</title>
</head>
<body>
    <form method="get" action="">
        <label>Valor do produto:</label>
        <input type="number" name="valor" step="0.01" required><br><br>
        <input type="submit" name="calcular" value="Calcular">
    </form>

    <?php
    if (isset($_GET['valor'])) {
        $valor = $_GET["valor"];
        $prestacao = $valor / 5;

        echo "<h3>Resultado:<h3>";
        echo "<h3>Valor do produto: R$ $valor</h3>";
        echo "<h3>Valor da prestação: R$ $prestacao</h3>";
    }
    ?>
       
</body>
</html>