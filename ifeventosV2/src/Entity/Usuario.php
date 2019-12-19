<?php

namespace Ifnc\Tads\Entity;

use Ifnc\Tads\Helper\Record;
use Ifnc\Tads\Helper\Session;

Class Usuario extends Record
{
    use Session;
    use TipoUsuario;
    use Telefone;
    public $id, $nome_completo, $cpf, $data_nascimento, $senha, $email, $id_tipo_usuario;

    public function valide($senha){
        return password_verify($senha,$this->senha);
    }

    public function __sleep()
    {
        return array('id','cpf','nome_completo','data_nascimento','email','cel1','cel2','telefone','logradouro', 'numero','complemento','bairro','cidade','uf','id_tipo_usuario','tipo');
    }

}