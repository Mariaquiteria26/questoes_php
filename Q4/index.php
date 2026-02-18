<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salário do vendedor</title>
</head>
<body>
    <form method="get" action="">
        <label>Nome do vendedor:</label>
        <input type="text" name="vendedor" required><br><br>
        <label>Salario fixo:</label>
        <input type="number" name="salario" step="any" required><br><br>
        <label>Total de vendas:</label>
        <input type="number" name="vendas" step="any" required><br><br>
        <input type="submit" name="calcular" value="Calcular">
    </form>

    <?php
    if (isset($_GET['calcular'])) {
        $vendedor = $_GET['vendedor'];
        $salario = $_GET['salario'];
        $vendas = $_GET['vendas'];

        $comissao = 0.15 * $vendas;
        $salario_final = $salario + $comissao;

        echo "<h3>O nome do vendedor é: $vendedor</h3>";
        echo "<h3>O salário fixo do vendedor $vendedor é: R$ $salario</h3>";
        echo "<h3>O salário final do vendedor $vendedor é: R$ $salario_final</h3>";
    }
    ?>
</body>
</html>