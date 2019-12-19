<?php

namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Entity\Atividade;
use Ifnc\Tads\Entity\Evento;
use Ifnc\Tads\Helper\Transaction;

class BuscaAtividadeController implements IController
{
    public function request(): void
    {
        Transaction::open();
        $atividade = Atividade::allAtiviade($_POST["tipo_atividade"]);
        echo json_encode($atividade);
        Transaction::close();
    }
}