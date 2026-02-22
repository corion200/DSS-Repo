<?php
require("class/page.class.php");

$page = new page();

$page->content = "
<section class='contenido'>
<h2>Bienvenidos</h2>
<p>
La Universidad Don Bosco mantiene una expansión constante en su oferta académica.
</p>
<img src='img/plaza-de-las-banderas.jpg' class='imagen'>
</section>
";

$page->display();
?>