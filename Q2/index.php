<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <form method="get" action="">
        <label>Número 1:</label>
        <input type="number" name="num1" required><br><br>
        <label>Número 2:</label>
        <input type="number" name="num2" required><br><br>
        <input type="submit" name="operacao" value="Somar">
        <input type="submit" name="operacao" value="Subtrair">
        <input type="submit" name="operacao" value="Multiplicar">
        <input type="submit" name="operacao" value="Dividir">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["num1"],$_GET["num2"],$_GET['operacao'])) {

        $numero1 = $_GET['num1'];
        $numero2 = $_GET['num2'];
        $operacao = $_GET['operacao'];

        if ($operacao == "Somar") {
            $resultado = $numero1 + $numero2;
        } elseif ($operacao == "Subtrair") {
            $resultado = $numero1 - $numero2;
        } elseif ($operacao == "Multiplicar") {
            $resultado = $numero1 * $numero2;
        } elseif ($operacao == "Dividir") {
            if ($numero2 != 0) {
                $resultado = $numero1 / $numero2;
            } else {
                $resultado = "Não é possível dividir por zero!";
            }
        }
        echo "<h3>O resultado da operação é:$resultado</h3>";
    }
?>
</body>
</html>