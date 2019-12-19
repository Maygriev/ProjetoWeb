<?php
namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Entity\Usuario;
use Ifnc\Tads\Helper\Message;
use Ifnc\Tads\Helper\Transaction;

class BuscaUserController implements IController
{
    public function request(): void
    {
        Transaction::open();
        $usuario = Usuario::findByCpf($_POST["cpf"],1);
        $usuario->uploadBusca($usuario);
        echo json_encode($usuario);
        Transaction::close();
    }
}
