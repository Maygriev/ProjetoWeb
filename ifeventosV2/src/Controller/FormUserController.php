<?php

namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Helper\Render;

Class FormUserController implements IController
{

    public function request(): void
    {
        echo Render::html(
        [
            "form-user.php",
            "footer.php"
        ],
        [
            "titulo"=>"Cadastro de Usuário"
        ]);
    }

}