<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rendimento</title>
</head>
<body>
    <form method="get" action="">
        <label>Valor depositado:</label>
        <input type="number" name="deposito" step="any" required><br><br>
        <input type="submit" name="calcular" value="Calcular rendimento">
    </form>
    
    <?php
    if (isset($_GET['calcular'])) {
        $deposito = $_GET['deposito'];
        $rendimento = $deposito * 0.007;
        $valor_final = $deposito + $rendimento;
        
        echo "<h3>O valor final é: R$ $valor_final</h3>";
        echo "<h3>Valor depositado: R$ $deposito</h3>";
        echo "<h3>Rendimento após um mês: R$ $rendimento</h3>";
    }
    ?>
</body>
</html>