<?php

namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Entity\Usuario;
use Ifnc\Tads\Helper\Render;
use Ifnc\Tads\Helper\Flash;
use Ifnc\Tads\Helper\Transaction;

Class HomeIfeventoLogadoController implements IController
{
    use Flash;

    public function request(): void
    {
        Transaction::open();
        echo Render::html(
            [
                "header-logado.php",
                "home-ifevento.php",
                "footer.php"
            ],
            [
                "usuario" => Usuario::download(),
                "titulo"=> "IFEventos",
                "alerts" =>$this->useAll()
            ]);
    }
}

