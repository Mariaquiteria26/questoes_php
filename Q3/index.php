<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consumo médio de automovel</title>
</head>
<body>
    <form method="get" action="">
        <label>Distancia total:</label>
        <input type="number" name="distancia"step="any"required><br><br>
        <label>Combustivel gasto:</label>
        <input type="number" name="combustivel" step="any" required><br><br>
        <input type="submit" name="calcular" value="Calcular">
    </form>

    <?php
    if (isset($_GET['calcular'])) {
        $distancia = $_GET['distancia'];
        $combustivel = $_GET['combustivel'];
        if ($combustivel != 0) {
            $consumo = $distancia / $combustivel;
            echo "<h3>O consumo médio do veículo é: $consumo km/l</h3>";
        } else {
            echo "<h3>O consumo médio do veículo é: Não é possível calcular o consumo com combustível gasto igual a zero.</h3>";
        }
    }
    ?>
</body>
</html>