<?php

namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Entity\Atividade;
use Ifnc\Tads\Helper\Transaction;
use Ifnc\Tads\Entity\Proposta;

class PropostaController implements IController
{
    public function request(): void
    {
       $proposta = new Proposta();
       $proposta->titulo = $_POST["titulo"];
       $proposta->area_academica = $_POST["area_academica"];
       $proposta->descricao = $_POST["descricao"];

       Transaction::open();
       $atividade = Atividade::findAtividadeById($_POST["selecao"]);

       if($atividade->tipo_atividade == "minicurso"){
            $proposta->max_participante = $_POST["max_participante"];
       }else if($atividade->tipo_atividade == "trabalho academico"){
           $proposta->tipo_trabalho = $_POST["tipotrabalho"];
       }

       $proposta->data_requisitada = $atividade->data;
       $proposta->horario_requisitado = $atividade->horario;
       $proposta->estado = "a avaliar";
       $proposta->store();
       Transaction::close();
       header("Location: /dashboard-user");
       exit();
    }
}