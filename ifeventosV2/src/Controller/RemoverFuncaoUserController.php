<?php

namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Entity\Evento;
use Ifnc\Tads\Entity\Usuario;
use Ifnc\Tads\Helper\Flash;
use Ifnc\Tads\Helper\Message;
use Ifnc\Tads\Helper\Transaction;

class RemoverFuncaoUserController implements IController
{
    use Flash;
    public function request(): void
    {
        Transaction::open();
        Evento::deleteFuncaoEvento($_POST["cpf"],$_POST["funcao"]);
        Usuario::updateTypeUser($_POST["cpf"], 2);
        $this->create(
            new Message(
                "success-remove",
                "Remoção da função realizada com sucesso!",
                "success")
        );
        Transaction::close();
        header("Location: /dashboard-coord");
        exit();
    }
}