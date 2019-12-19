<?php

namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Entity\Atividade;
use Ifnc\Tads\Helper\Transaction;

class AtividadeController implements IController
{
    public function request(): void
    {
        $atividade = new Atividade();
        $atividade->tipo_atividade = $_POST["tipo_atividade"];
        $atividade->data = date("Y-m-d",strtotime($_POST["data"]));;
        $atividade->horario = $_POST["horario"];
        $atividade->id_evento = $_POST["idevento"];
        $atividade->max_proposta = $_POST["max_proposta"];
        Transaction::open();
        $atividade->store();
        Transaction::close();
        header("Location: /dashboard-coord");
        exit();
    }
}
