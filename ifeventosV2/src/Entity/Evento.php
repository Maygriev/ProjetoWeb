<?php
 namespace Ifnc\Tads\Entity;

 use Ifnc\Tads\Helper\Record;
 use Ifnc\Tads\Helper\Session;

 class Evento extends  Record
 {
     use Session;
     public $titulo, $descricao, $data_inicio, $data_fim;
 }