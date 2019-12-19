<?php

namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Entity\Usuario;
use Ifnc\Tads\Helper\Flash;
use Ifnc\Tads\Helper\Message;
use Ifnc\Tads\Helper\Transaction;

Class UserController implements IController
{
    use Flash;
    public function request(): void
    {
        $usuario = new Usuario();
        $usuario->nome_completo = $_POST["nomecompleto"];
        $usuario->cpf = $_POST["cpf"];
        $usuario->data_nascimento = date("Y-m-d",strtotime($_POST["datanascimento"]));
        $usuario->senha = password_hash($_POST["senha"],PASSWORD_DEFAULT);
        $confSenha = $_POST["confsenha"];
        $usuario->email = $_POST["email"];
        $usuario->cel1 = $_POST["cel1"];
        $usuario->cel2 = $_POST["cel2"];
        $usuario->telefone = $_POST["telefone"];
        $usuario->logradouro = $_POST["logradouro"];
        $usuario->numero = $_POST["numero"];
        $usuario->complemento = $_POST["complemento"];
        $usuario->bairro = $_POST["bairro"];
        $usuario->cidade = $_POST["cidade"];
        $usuario->uf = $_POST["uf"];
        $usuario->id_tipo_usuario = 2;
        if(password_verify($confSenha, $usuario->senha)) {
            Transaction::open();
            $usuario->store();
            $this->create(
                new Message(
                    "success-usuario",
                    "Cadastro do usuário realizado com sucesso!",
                    "success")
            );
            Transaction::close();
            header('Location: /home-ifevento', true, 302);
            exit();
       }else{
            header('Location: /form-user', true, 302);
            exit();
       }
    }

    public function busca()
    {
        $usuario = new Usuario();
        Transaction::open();
        $user = $usuario->findByCpf($_POST["cpfusuario"]);
        Transaction::close();
        var_dump($user);
//        header("/dashboard-user",true, 302);
//        exit();
    }
}