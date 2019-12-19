
<main class="mt-5">
    <?php if(isset($alerts)){?>
        <?php foreach($alerts as $alert){?>
            <div class="alert alert-<?=$alert->context?> mt-2" role="alert">
                <?=$alert->content?>
            </div>
        <?php }?>
    <?php }?>
    <div id="carouselEvento01" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/sitads.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="display-4">SITADS</h5>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/expotec.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="display-4">EXPOTEC</h5>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/semadec.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="display-4">SEMADEC</h5>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselEvento01" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselEvento01" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="container mb-5 pt-5">
        <div class="mb-5">
            <h1 class="display-4">Eventos Recentes ou em andamento</h1>
        </div>
        <div id="carouselEvento02" class="carousel slide" data-ride="carousel" data-interval="0">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-sm">
                            <div class="card" style="width: 100%;">
                                <img src="img/sitads.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h3 class="card-title">SITADS</h3>
                                    <p class="card-text">Evento de informatica.</p>
                                    <p class="card-text">25-11-2019</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="card" style="width: 100%;">
                                <img src="img/expotec.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h3 class="card-title">EXPOTEC</h3>
                                    <p class="card-text">Evento de informatica.</p>
                                    <p class="card-text">25-11-2019</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="card" style="width: 100%;">
                                <img src="img/semadec.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h3 class="card-title">SEMADEC</h3>
                                    <p class="card-text">Evento de informatica.</p>
                                    <p class="card-text">25-11-2019</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-sm">
                            <div class="card" style="width: 100%;">
                                <img src="img/sitads.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h3 class="card-title">SITADS</h3>
                                    <p class="card-text">Evento de informatica.</p>
                                    <p class="card-text">25-11-2019</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="card" style="width: 100%;">
                                <img src="img/expotec.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h3 class="card-title">EXPOTEC</h3>
                                    <p class="card-text">Evento de informatica.</p>
                                    <p class="card-text">25-11-2019</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="card" style="width: 100%;">
                                <img src="img/semadec.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h3 class="card-title">SEMADEC</h3>
                                    <p class="card-text">Evento de informatica.</p>
                                    <p class="card-text">25-11-2019</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-sm">
                            <div class="card" style="width: 100%;">
                                <img src="img/sitads.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h3 class="card-title">SITADS</h3>
                                    <p class="card-text">Evento de informatica.</p>
                                    <p class="card-text">25-11-2019</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="card" style="width: 100%;">
                                <img src="img/expotec.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h3 class="card-title">EXPOTEC</h3>
                                    <p class="card-text">Evento de informatica.</p>
                                    <p class="card-text">25-11-2019</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="card" style="width: 100%;">
                                <img src="img/semadec.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h3 class="card-title">SEMADEC</h3>
                                    <p class="card-text">Evento de informatica.</p>
                                    <p class="card-text">25-11-2019</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselEvento02" role="button" data-slide="prev">
                <ion-icon name="arrow-dropleft-circle" style="font-size: 60px; color: dodgerblue;" aria-hidden="true"></ion-icon>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselEvento02" role="button" data-slide="next">
                <ion-icon name="arrow-dropright-circle" style="font-size: 60px; color: dodgerblue;" aria-hidden="true"></ion-icon>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="jumbotron g-dark">
        <div class="container mb-5">
            <h1 class="display-4">Notícias Recentes</h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2>Funcern e Campus Central abrem inscrições para Exame de Proficiência</h2>
                    <p>As inscrições seguem até às 23h59 do dia 1º de dezembro. </p>
                    <p><a class="btn btn-secondary" href="#" role="button">Ver Detalhes »</a></p>
                </div>
                <div class="col-md-4">
                    <h2>IFRN oferta vagas para bolsista de iniciação científica</h2>
                    <p>As inscrições estarão abertas durante o período de 9 a 15 de novembro. </p>
                    <p><a class="btn btn-secondary" href="#" role="button">Ver Detalhes »</a></p>
                </div>
                <div class="col-md-4">
                    <h2>Campus realiza Encontro para o fortalecimento da capoeira</h2>
                    <p>Programação inclui posse da Câmara Setorial da Capoeira no RN.</p>
                    <p><a class="btn btn-secondary" href="#" role="button">Ver Detalhes »</a></p>
                </div>
            </div>
        </div>
    </div>
</main>
