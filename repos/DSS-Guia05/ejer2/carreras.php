<?php
require("class/page.class.php");

$page = new page();

$page->content = "
<section class='contenido-alterno'>
<h2>Carreras Disponibles</h2>

<table class='tabla'>
<tr>
<th>Carrera</th>
<th>Duración</th>
</tr>
<tr>
<td>Ingeniería en Sistemas</td>
<td>5 años</td>
</tr>
<tr>
<td>Maestría en Redes</td>
<td>2 años</td>
</tr>
<tr>
<td>Diplomado en Desarrollo Web</td>
<td>1 año</td>
</tr>
</table>

</section>
";

$page->display();
