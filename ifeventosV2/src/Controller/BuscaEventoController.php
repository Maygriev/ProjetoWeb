<?php
namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Entity\Evento;
use Ifnc\Tads\Helper\Transaction;

class BuscaEventoController implements IController
{
    public function request(): void
    {
        $funcao = $_POST["funcao"];
        Transaction::open();
        if(strcmp($funcao,"Avaliador") == 0){
            $evento = Evento::allEventoAvaliadorByCpf($_POST["cpf"]);
        }else if(strcmp($funcao,"Coordenador") == 0){
            $evento = Evento::allEventoCoordByCpf($_POST["cpf"]);
        }
        echo json_encode($evento);
        Transaction::close();
    }
}
