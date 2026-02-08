<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Formulario - Dos números</title>
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<form action="index.php" method="post">

  <label for="num1">Primer número:</label><br>
  <input type="number" id="num1" name="numero1" step="any" required><br><br>

  <label for="num2">Segundo número:</label><br>
  <input type="number" id="num2" name="numero2" step="any" required><br><br>

  <button type="submit">Enviar</button>

</form>

<?php
    if($_SERVER['REQUEST_METHOD'] === 'POST'):
        $a = $_POST['numero1'] ?? '';
        $b = $_POST['numero2'] ?? '';
        $c = $a;

        for($i=2; $i<=$b; $i++):
            $a= $a*$c;
        endfor;
        echo "<h1>".$a."</h1>";
    endif
?>

</body>
</html>
