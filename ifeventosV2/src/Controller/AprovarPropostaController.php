<?php

namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Entity\Proposta;
use Ifnc\Tads\Helper\Flash;
use Ifnc\Tads\Helper\Message;
use Ifnc\Tads\Helper\Transaction;

class AprovarPropostaController implements IController
{
    use Flash;
    public function request(): void
    {
        Transaction::open();
        Proposta::updateProposta($_POST['aprovada'],$_POST['idproposta']);
        $this->create(
            new Message(
                "success-reprovar",
                "Aprovação da Proposta realizada com sucesso!",
                "success")
        );
        Transaction::close();
        header("Location: \dashboard-aval");
        exit();
    }
}
