<?php

namespace Ifnc\Tads\Entity;

use Ifnc\Tads\Helper\Record;
use Ifnc\Tads\Helper\Session;

class Proposta extends Record
{
    use Session;
    public $id, $titulo, $area_academica, $descricao, $max_participante, $tipo_trabalho;
    public $nota_trabalho, $data_requisitada, $horario_requisitado, $estado, $id_atividade;

}