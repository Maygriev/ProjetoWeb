<?php

namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Entity\Evento;
use Ifnc\Tads\Entity\Usuario;
use Ifnc\Tads\Helper\Render;

Class DashboardUserController implements IController
{

    public function request(): void
    {
        echo Render::html(
          [
              "header-logado.php",
              "dashboard-user.php",
              "footer.php"
          ],
          [
              "usuario" => Usuario::download(),
              "busca" => Usuario::downloadBusca(),
              "titulo"=>"Painel de Controle"
          ]);
    }
}
