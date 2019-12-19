<?php

 namespace Ifnc\Tads\Controller;

 use Ifnc\Tads\Entity\Evento;
 use Ifnc\Tads\Entity\Usuario;
 use Ifnc\Tads\Helper\Flash;
 use Ifnc\Tads\Helper\Message;
 use Ifnc\Tads\Helper\Transaction;

 class AtribuirFuncaoUserController implements IController
 {
     use Flash;
     public function request(): void
     {
         Transaction::open();
         Usuario::updateTypeUser($_POST["cpf"],$_POST["funcao"]);
         Evento::insertFuncaoEvento($_POST["idevento"], $_POST["id"], $_POST["funcao"]);
         $this->create(
             new Message(
                 "success-atribui",
                 "Atribuição da função realizada com sucesso!",
                 "success")
         );
         Transaction::close();
         header("Location: \dashboard-coord");
         exit();
     }
 }