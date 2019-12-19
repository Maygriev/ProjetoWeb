<?php


namespace Ifnc\Tads\Helper;


use Ifnc\Tads\Entity\Usuario;

trait Session
{


    public function upload(){
        $className = self::class;
        $_SESSION[$className]=serialize($this);
    }

    public function uploadBusca($busca){
        $_SESSION["busca"]=serialize($busca);
    }

    public function uploadBuscaEvento($busca){
        $_SESSION["buscaEvento"]=serialize($busca);
    }

    public static function download($init = false){
        $className = self::class;
        if(!isset($_SESSION[$className])){
            $_SESSION[$className]=serialize(($init?new $className():null));
        }
        return unserialize($_SESSION[$className]);
    }

    public static function downloadBusca(){
        return unserialize($_SESSION["busca"]);
    }

    public static function downloadBuscaEvento(){
        return unserialize($_SESSION["buscaEvento"]);
    }
}