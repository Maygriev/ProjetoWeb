<?php
namespace Ifnc\Tads\Mapper;
use Ifnc\Tads\Entity\Usuario;

class UsuarioMapper
{
    public static function find(){
        $usuario = Usuario::findByCpf($_POST["cpfusuario"]);
        return $usuario;
    }
}