<?php

namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Entity\Proposta;
use Ifnc\Tads\Helper\Flash;
use Ifnc\Tads\Helper\Message;
use Ifnc\Tads\Helper\Transaction;

class ReprovarPropostaController implements IController
{
    use Flash;
    public function request(): void
    {
        Transaction::open();
        Proposta::updateProposta($_POST['reprovada'],$_POST['idproposta']);
        Proposta::insertLog($_POST['motivo'],$_POST['idproposta']);
        $this->create(
            new Message(
                "success-reprovar",
                "Reprovação da Proposta realizada com sucesso!",
                "success")
        );
        Transaction::close();
        header("Location: \dashboard-aval");
        exit();
    }
}
