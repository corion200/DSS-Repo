<?php
$resultado = "";
$total = 0;

if (isset($_POST['Enviar'])) {

    $text = $_POST['comment'];
    $palabra = trim($_POST['palabra']);

    if (!empty($palabra)) {

        $patron = "/\b(" . preg_quote($palabra, "/") . ")\b/i";

        preg_match_all($patron, $text, $coincidencias);
        $total = count($coincidencias[0]);

        $resultado = preg_replace(
            $patron,
            '<span class="highlight">\1</span>',
            $text
        );
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Buscador de Palabras</title>
    <link rel="stylesheet" href="../css/home.css">
</head>

<body>

    <div class="contenedor">
        <h1>Buscador de Palabras</h1>

        <form method="post">
            <label>Palabra a buscar:</label>
            <input type="text" name="palabra" required>

            <label>Texto:</label>
            <textarea name="comment" rows="8">
Sample sentence from KomunitasWeb, regex has become popular in web programming. Now we learn regex.
According to wikipedia, Regular expressions abbreviated as regex.
</textarea>

            <button type="submit" name="Enviar">Buscar</button>
        </form>

        <?php if (!empty($resultado)): ?>
            <div class="resultado">
                <h2>Resultado</h2>
                <p><strong>Coincidencias encontradas:</strong> <?= $total ?></p>
                <p><?= $resultado ?></p>
            </div>
        <?php endif; ?>

    </div>
</body>

</html>