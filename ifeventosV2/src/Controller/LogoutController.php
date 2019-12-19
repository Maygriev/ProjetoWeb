<?php


namespace Ifnc\Tads\Controller;


class LogoutController implements IController
{

    public function request(): void
    {
        session_destroy();
        header("Location: /home-ifevento");
        exit();
    }
}