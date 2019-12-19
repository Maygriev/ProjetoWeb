<?php
namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Entity\Evento;
use Ifnc\Tads\Helper\Transaction;

class BuscaEventoCoordController implements IController
{
    public function request(): void
    {

        Transaction::open();
        $evento = Evento::allEventoCoordByCpf($_POST["cpf"]);
        echo json_encode($evento);
        Transaction::close();
    }
}