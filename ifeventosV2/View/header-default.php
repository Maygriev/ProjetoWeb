<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" integrity="sha384-KA6wR/X5RY4zFAHpv/CnoG2UW1uogYfdnP67Uv7eULvTveboZJg0qUpmJZb5VqzN" crossorigin="anonymous">

</head>
<body class="bg-light">
<header class="mb-5">
    <nav class="navbar navbar-expand-lg  navbar-dark bg-dark fixed-top">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand text-white" href="#">
            <img src="img/ifrn-evento.png">
            Eventos
        </a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link text-white" href="#">Todos os Eventos<span class="sr-only">(current)</span></a>
                </li>
                <li class=" nav-item">
                    <a class="nav-link text-white" href="#">Notícias</a>
                </li>
            </ul>
            <a class="nav-link btn btn-outline-light mr-3" href="\form-user"> Cadastre-se</a>
            <a class="nav-link btn btn-outline-success" data-toggle="modal" data-target="#login" href="#"> Entrar</a>
        </div>
    </nav>
    <div class="modal fade bd-example-modal-sm" id="login" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title align-items-center" id="login">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="mx-auto" style="width: 100px;">
                        <ion-icon  style="font-size: 100px;" name="contact"></ion-icon>
                    </div>
                    <form action="/login" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" id="cpf" name="cpf" placeholder="CPF">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control btn btn-success" name="entrar">Entrar</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <a href="#">Esqueci minha senha</a>
                </div>
            </div>
        </div>
    </div>
</header>
