<?php
require("class/page.class.php");

$page = new page();

$page->content = "
<section class='contenido-institucional'>
<h2>Institucional</h2>

<div class='grid'>
<div>
<h3>Misión</h3>
<p>Formar profesionales con valores y excelencia académica.</p>
</div>

<div>
<h3>Visión</h3>
<p>Ser líderes en educación superior en El Salvador.</p>
</div>
</div>

</section>
";

$page->display();
?>