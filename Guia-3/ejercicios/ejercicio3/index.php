<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <h1>Promedio de notas de alumnos</h1>

    <table>
        <?php
            $notas = array(
                "nombre Alumno1" => array(
                    "Parcial" => 9.1,
                    "Investigación" => 8.5,
                    "Tarea" => 4.8
                ),
                "nombre Alumno2" => array(
                    "Parcial" => 7.1,
                    "Investigación" => 10.0,
                    "Tarea" => 9.8
                ),
                "nombre Alumno3" => array(
                    "Parcial" => 8.5,
                    "Investigación" => 8.5,
                    "Tarea" => 8.5
                ),
                "nombre Alumno4" => array(
                    "Parcial" => 3.3,
                    "Investigación" => 4.4,
                    "Tarea" => 5.5
                ),
                "nombre Alumno5" => array(
                    "Parcial" => 7.8,
                    "Investigación" => 6.5,
                    "Tarea" => 8.2
                )
            );

            echo "<tr><th>Alumno</th><th>Parcial</th><th>Investigación</th><th>Tarea</th><th>Promedio</th></tr>";
            foreach($notas as $alumn => $promedio):
                echo "<tr><td>".$alumn."</td><td>".$promedio['Parcial']."</td><td>".$promedio['Investigación']."</td><td>".$promedio['Tarea']."</td><td>".($nota_promedio = ($promedio['Parcial'] * 0.50) + ($promedio['Investigación'] * 0.30) + ($promedio['Tarea'] * 0.20))."</td></tr>";
            endforeach;
        ?>
    </table>
</body>
</html>