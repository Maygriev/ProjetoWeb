<?php
namespace Ifnc\Tads\Entity;

use Ifnc\Tads\Helper\Record;
use Ifnc\Tads\Helper\Session;

Class Endereco extends Record
{
    use Session;
    public $id, $id_usuario, $logradouro, $numero_casa, $complemento, $bairro, $cidade, $uf;
}
