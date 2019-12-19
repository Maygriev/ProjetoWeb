<?php

namespace Ifnc\Tads\Entity;

use Ifnc\Tads\Helper\Record;
use Ifnc\Tads\Helper\Session;

class Atividade extends Record
{
    use Session;
    public $id, $tipo_atividade, $descricao, $data, $horario, $id_evento, $max_proposta;
}