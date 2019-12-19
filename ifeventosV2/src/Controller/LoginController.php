<?php


namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Entity\Usuario;
use Ifnc\Tads\Helper\Flash;
use Ifnc\Tads\Helper\Message;
use Ifnc\Tads\Helper\Transaction;

class LoginController implements IController
{
    use Flash;

    public function request(): void
    {

        $cpf = filter_input(INPUT_POST,
            'cpf',
            FILTER_SANITIZE_STRING
        );

        Transaction::open();
        $cpfUser = Usuario::findByCpf($_POST['cpf'],2);
        if (is_null($cpf) || strcmp($cpf, $cpfUser) != 0 ) {
            $this->create( new Message(
                    "alert-login",
                    "login ou senha inválido!",
                    "danger")
            );
            header('Location: /home-ifevento');
            exit();
        }

        $senha = filter_input(INPUT_POST,
            'senha',
            FILTER_SANITIZE_STRING);

        $usuario = Usuario::findByCondition("cpf='{$_POST['cpf']}'");
        if (!$usuario || !$usuario->valide($senha)) {
            $this->create(
                new Message(
                    "alert-login",
                    "login ou senha inválido!",
                    "danger")
            );
            header('Location: /home-ifevento');
            exit();
        }

        $usuario->upload();
        $this->create(
            new Message(
                "success-login",
                "login realizado com sucesso!",
                "success")
        );


        header('Location: /home-logado');
        exit();
    }
}