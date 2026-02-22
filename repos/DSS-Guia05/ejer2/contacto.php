<?php
require("class/page.class.php");

$page = new page();

$page->content = "
<section class='contenido'>
<h2>Contacto</h2>
<p>Tel: (503) 2251-8200</p>
<p>Email: info@udb.edu.sv</p>
<img src='img/entradapostgrados.jpg' class='imagen'>
</section>
";

$page->display();
?>