<?php

namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Helper\Flash;
use Ifnc\Tads\Helper\Render;


Class HomeIfeventoController implements IController
{

    use Flash;

    public function request(): void
    {
        echo Render::html(
        [
            "header-default.php",
            "home-ifevento.php",
            "footer.php"
        ],
        [
            "titulo"=>"IFEventos",
            "alerts" =>$this->useAll()
        ]);
    }
}

?>

