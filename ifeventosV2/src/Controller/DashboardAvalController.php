<?php

namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Entity\Usuario;
use Ifnc\Tads\Helper\Flash;
use Ifnc\Tads\Helper\Render;

Class DashboardAvalController implements IController
{
    use Flash;

    public function request(): void
    {
        echo Render::html(
            [
                "header-logado.php",
                "dashboard-avaliador.php",
                "footer.php"
            ],
            [
                "usuario" => Usuario::download(),
                "busca" => Usuario::downloadBusca(),
                "tipo_proposta" => $_SESSION["tipo_proposta"],
                "titulo"=>"Painel de Controle",
                "alerts" =>$this->useAll()
            ]);
    }
}
