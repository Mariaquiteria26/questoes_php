<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trocar valores</title>
</head>
<body>
    <form method="get" action="">
        <label> valor de A:</label>
        <input type="number" name="A" required><br><br>
        <label> valor de B:</label>
        <input type="number" name="B" required><br><br>
        <input type="submit" name="Trocar" value="trocar valores">
    </form>

    <?php
    if (isset($_GET['Trocar'])) {
        $A = $_GET['A'];
        $B = $_GET['B'];

        $temp = $A;
        $A = $B;
        $B = $temp;

        echo "<h3>O valor de A é: $A</h3>";
        echo "<h3>O valor de B é: $B</h3>";
    }
    ?>
</body>
</html>