<?php
class page
{

    public $content;
    public $title = "Centro de Estudios de Postgrados - Universidad Don Bosco";
    public $keywords = "Universidad Don Bosco, UDB, Educación superior";

    public $buttons = array(
        "Inicio" => "home.php",
        "Carreras" => "carreras.php",
        "Institucional" => "institucional.php",
        "Contacto" => "contacto.php"
    );

    public function display()
    {
        echo "<!DOCTYPE html>
<html lang='es'>
<head>
<meta charset='utf-8'>
<title>{$this->title}</title>
<meta name='keywords' content='{$this->keywords}'>
<link rel='stylesheet' href='../css/home.css'>
</head>
<body>";

        $this->displayHeader();
        $this->displayMenu();
        echo $this->content;
        $this->displayFooter();

        echo "</body></html>";
    }

    private function displayHeader()
    {
        echo "
<header class='header'>
<h1>Universidad Don Bosco</h1>
</header>";
    }

    private function displayMenu()
    {
        echo "<nav><ul class='menu'>";
        foreach ($this->buttons as $name => $url) {
            echo "<li><a href='$url'>$name</a></li>";
        }
        echo "</ul></nav>";
    }

    private function displayFooter()
    {
        echo "
<footer class='footer'>
<p>&copy; 2026 - Universidad Don Bosco</p>
</footer>";
    }
}
