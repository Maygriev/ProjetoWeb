<?php

    namespace Ifnc\Tads\Controller;

    use Ifnc\Tads\Entity\Evento;
    use Ifnc\Tads\Helper\Flash;
    use Ifnc\Tads\Helper\Message;
    use Ifnc\Tads\Helper\Transaction;

    class EventoController implements IController
    {
        use Flash;
        public function request(): void
        {
            $evento = new Evento();
            $evento->titulo = $_POST["titulo"];
            $evento->descricao = $_POST["descricao"];
            $evento->data_inicio = date("Y-m-d", strtotime($_POST["datainicio"]));
            $evento->data_fim = date("Y-m-d", strtotime($_POST["datafinal"]));
            $tipo = $_POST["id_tipo"];
            Transaction::open();
            $evento->store();
            $evento->insertFuncaoEvento(null, $_POST["id_user"], $tipo);
            $this->create(
                new Message(
                    "success-evento",
                    "Cadastro do evento realizado com sucesso!",
                    "success")
            );
            Transaction::close();
            header('Location: /dashboard-coord', true, 302);
            exit();
        }
    }