<?php

namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Entity\Usuario;
use Ifnc\Tads\Helper\Flash;
use Ifnc\Tads\Helper\Render;

Class DashboardCoordController implements IController
{
    use Flash;

    public function request(): void
    {
        echo Render::html(
            [
                "header-logado.php",
                "dashboard-coordenador.php",
                "footer.php"
            ],
            [
                "usuario" => Usuario::download(),
                "busca" => Usuario::downloadBusca(),
                "titulo"=>"Painel de Controle",
                "alerts" =>$this->useAll()
            ]);
    }
}
