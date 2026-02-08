<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Formulario - Dos números</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

    <form action="index.php" method="post">

        <label for="num">Primer número:</label><br>
        <input type="number" id="num" name="numero" step="any" required><br><br>
        <button type="submit">Enviar</button>

    </form>

    <br>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST'):
        $a = $_POST['numero'] ?? '';
        $b=0;


        if($a > 0 && $a < 10){
            echo "<table>";
            
            for ($i = 1; $i <= 10; $i++) {
                echo "<tr>";
                echo "<th>".$a." x ".$i."</th>";
                echo '
                        <th>'.$b=$a * $i .'</th>
                ';
                echo "</tr>";
                }
            
            echo "</table>";
        
        }else{
            echo"<h1>El numero no cumple la condicion</h1>";
        }
    endif;
    ?>

</body>
</html>