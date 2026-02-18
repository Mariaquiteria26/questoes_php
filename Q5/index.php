<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média do aluno</title>
</head>
<body>
    <form method="get" action="">
        <label>Nome do aluno:</label>
        <input type="text" name="aluno" required><br><br>
        <label>Nota 1:</label>
        <input type="number" name="nota1" step="any" required><br><br>
        <label>Nota 2:</label>
        <input type="number" name="nota2" step="any" required><br><br>
        <label>Nota 3:</label>
        <input type="number" name="nota3" step="any" required><br><br>
        <input type="submit" name="calcular" value="Calcular">
    </form>

    <?php
    if (isset($_GET['calcular'])) {
        $aluno = $_GET['aluno'];
        $nota1 = $_GET['nota1'];
        $nota2 = $_GET['nota2'];
        $nota3 = $_GET['nota3'];

        $media = ($nota1 + $nota2 + $nota3) / 3;

        echo "<h3>O nome do aluno é: $aluno</h3>";
        echo "<h3>A média do aluno $aluno é: $media</h3>";
    }
    ?>
   
</body>
</html>