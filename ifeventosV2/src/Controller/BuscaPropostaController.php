<?php
namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Entity\Proposta;
use Ifnc\Tads\Helper\Transaction;

class BuscaPropostaController implements IController
{
    public function request(): void
    {
        Transaction::open();
        $proposta = Proposta::allPropostaByTipo($_POST["tipo_atividade"]);
        $_SESSION["tipo_proposta"] = $_POST["tipo_atividade"];
        echo json_encode($proposta);
        Transaction::close();
    }
}
