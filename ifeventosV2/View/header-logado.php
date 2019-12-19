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
            <?php if($usuario){?>
                <a class="nav-link dropdown-toggle text-white" data-toggle="dropdown" id="dropdownMenuLink" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <?php echo $usuario->nome_completo;?>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                    <?php if($usuario->id_tipo_usuario == 1){?>
                        <a class="dropdown-item" href="\dashboard-coord">Painel de Controle</a>
                    <?php }else if($usuario->id_tipo_usuario == 2){?>
                        <a class="dropdown-item" href="\dashboard-user">Painel de Controle</a>
                    <?php }else if($usuario->id_tipo_usuario == 3){?>
                        <a class="dropdown-item" href="\dashboard-coord">Painel de Controle</a>
                    <?php }else if($usuario->id_tipo_usuario == 4){?>
                        <a class="dropdown-item" href="\dashboard-aval">Painel de Controle</a>
                    <?php }?>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="\logout">Sair</a>
                </div>
            <?php }?>
        </div>
    </nav>
</header>
