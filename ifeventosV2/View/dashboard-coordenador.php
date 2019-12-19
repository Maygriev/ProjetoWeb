
<main class="mt-3 pt-3">
    <?php if(isset($alerts)){?>
        <?php foreach($alerts as $alert){?>
            <div class="alert alert-<?=$alert->context?> mt-2" role="alert">
                <?=$alert->content?>
            </div>
        <?php }?>
    <?php }?>
    <div class="alert alert-danger d-none mt-2" role="alert">

    </div>
    <div class="mt-3">
        <div class="row">
            <div class="col-3">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <h5 class="sidebar-heading d-flex px-3 mt-4 mb-1 text-muted">
                        <span>Painel de Controle</span>
                    </h5>
                    <a class="nav-link" id="v-pills-atribuir-funcao-tab" data-toggle="pill" href="#v-pills-atribuir-funcao" role="tab" aria-controls="v-pills-atribuir-funcao" aria-selected="false">Atribuir Função</a>
                    <a class="nav-link" id="v-pills-remover-funcao-tab" data-toggle="pill" href="#v-pills-remover-funcao" role="tab" aria-controls="v-pills-remover-funcao" aria-selected="false">Remover Função</a>
                    <a class="nav-link" id="v-pills-cadastrar-evento-tab" data-toggle="pill" href="#v-pills-cadastrar-evento" role="tab" aria-controls="v-pills-cadastrar-evento" aria-selected="false">Cadastrar Evento</a>
                    <a class="nav-link" id="v-pills-cadastrar-atividade-tab" data-toggle="pill" href="#v-pills-cadastrar-atividade" role="tab" aria-controls="v-pills-cadastrar-atividade" aria-selected="false">Cadastrar Atividade</a>
                </div>
            </div>
            <div class="col-7">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade" id="v-pills-atribuir-funcao" role="tabpanel" aria-labelledby="v-pills-atribuir-funcao-tab">
                        <div class="container mb-5 pb-3 ">
                            <div>
                                <h1 class="display-3">Atribuir Função ao Usuário</h1>
                            </div>
                            <div class="aba">
                                <div>
                                    <form class="mt-5">
                                        <div class="form-row-md-4">
                                            <label for="cpfusuario">CPF do Usuário</label>
                                            <div class="input-group md-4 mb-3">
                                                <input type="search" class="form-control cpfusuario"  name="cpf" placeholder="Digite o CPF do usuário" aria-describedby="button-pesquisa" required>
                                                <input type="hidden" class="form-control cpfcoord"name="cpfcoord" value="<?=$usuario->cpf?>">
                                                <div class="input-group-append">
                                                    <button class="btn btn btn-success" id="button-pesquisa-att">Pesquisar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="content-user">

                                </div>
                                <div>
                                    <form class="mt-5" action="\atribuir-funcao" method="post">
                                        <div class="form-row-md-4">
                                            <div class="col-9 md-4 mb-3">
                                                <div class="form-control d-none">
                                                    <input type="hidden" name="cpf" value="<?=$busca->cpf?>">
                                                    <input type="hidden" name="id" value="<?=$busca->id?>">
                                                </div>
                                                <p>Funções que podem ser atribuidas</p>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" name="funcao" id="coordenador" value="3" class="custom-control-input">
                                                    <label class="custom-control-label" for="coordenador">Coordenador</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" name="funcao" id="avaliador" value="4" class="custom-control-input">
                                                    <label class="custom-control-label" for="avaliador">Avaliador</label>
                                                </div>

                                            </div>
                                            <div class="content-evento">
                                                <h4>Eventos Cadastrados</h4>
                                                <table class="table">
                                                    <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Título</th>
                                                        <th scope="col">Descrição</th>
                                                        <th scope="col">Data de Inicio</th>
                                                        <th scope="col">Data de termino</th>
                                                        <th scope="col">Selecionar evento</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>

                                                    </tbody>
                                                </table>

                                            </div>
                                            <div class="col-3 mb-3">
                                                <button class="btn btn btn-success" type="submit">Atribuir Função</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-remover-funcao" role="tabpanel" aria-labelledby="v-pills-remover-funcao-tab">
                        <div class="container mb-5 pb-3">
                            <div>
                                <h1 class="display-3">Remover Função ao Usuário</h1>
                            </div>
                            <div class="aba">
                                <div >
                                    <form class="mt-5">
                                        <div class="form-row-md-4">
                                            <label for="cpfusuario">CPF do Usuário</label>
                                            <div class="input-group md-4 mb-3">
                                                <input type="search" class="form-control cpfusuario" name="cpf" placeholder="Digite o CPF do usuário" aria-describedby="button-pesquisa" required>
                                                <div class="input-group-append">
                                                    <button class="btn btn btn-success" id="button-pesquisa-rem">Pesquisar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="content-user">

                                </div>
                                <div>
                                    <form class="mt-5" action="\remover-funcao" method="post">
                                        <div class="form-row-md-4">
                                            <div class="col-9 md-4 mb-3">
                                                <div class="form-control d-none">
                                                    <input type="hidden" name="cpf" value="<?=$busca->cpf?>">
                                                    <input type="hidden" name="id" value="<?=$busca->id?>">
                                                    <input type="hidden" name="funcao" value="<?=$busca->id_tipo_usuario?>">
                                                </div>
                                            </div>
                                            <div class="content-evento">
                                                <h4>Eventos Cadastrados</h4>
                                                <table class="table">
                                                    <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Título</th>
                                                        <th scope="col">Descrição</th>
                                                        <th scope="col">Data de Inicio</th>
                                                        <th scope="col">Data de termino</th>
                                                        <th scope="col">Selecionar evento</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>

                                                    </tbody>
                                                </table>

                                            </div>
                                            <div class="col-3 mb-3">
                                                <button class="btn btn btn-success" type="submit">Remover Função</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-cadastrar-evento" role="tabpanel" aria-labelledby="v-pills-cadastrar-evento-tab">
                        <div class="conatiner mb-5 pb-3">
                            <div>
                                <h1 class="display-3">Cadastro de Evento</h1>
                            </div>
                            <div>
                                <form class="mt-5" action="/add-evento" method="post">
                                    <div class="form-row-md-4">
                                        <div class="form-control d-none">
                                            <input type="hidden" name="id_user" value="<?=$usuario->id?>">
                                        </div>
                                        <div class="form-control d-none">
                                            <input type="hidden" name="id_tipo" value="<?=$usuario->id_tipo_usuario?>">
                                        </div>
                                        <label for="titulo">Título <span style="color: red">*</span></label>
                                        <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Digite o título do evento" required>
                                    </div>
                                    <div class="form-row-md-4">
                                        <label for="descricao">Decrição <span style="color: red">*</span></label>
                                        <textarea class="form-control" id="descricao" name="descricao"  row="5" required></textarea>
                                    </div>
                                    <div class="form-row mt-3">
                                        <div class="col-6 md-4 mb-3">
                                            <label for="datainicio">Data de Inicio <span style="color: red">*</span></label>
                                            <input type="text" class="form-control" id="datainicio" name="datainicio" placeholder="Ex.: DD-MM-AAAA" required>
                                        </div>
                                        <div class="col-6 md-4 mb-3">
                                            <label for="datafinal">Data do Final <span style="color: red">*</span></label>
                                            <input type="text" class="form-control" id="datafinal" name="datafinal" placeholder="Ex.: DD-MM-AAAA" required>
                                        </div>
                                    </div>
                                    <button class="btn btn-success btn-lg" type="submit">Cadastrar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-cadastrar-atividade" role="tabpanel" aria-labelledby="v-pills-cadastrar-atividade-tab">
                        <div>
                            <h1 class="display-3">Cadastro de Atividade</h1>
                        </div>
                        <div>
                            <form action="/add-atividade" method="post">
                                <input type="hidden" class="form-control" id="cpfcoordenador" name="cpfcoord" value="<?=$usuario->cpf?>">
                                <div class="content-event">
                                    <h4>Eventos Cadastrados</h4>
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Título</th>
                                            <th scope="col">Descrição</th>
                                            <th scope="col">Data de Inicio</th>
                                            <th scope="col">Data de termino</th>
                                            <th scope="col">Selecionar evento</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>

                                </div>
                                <div class="form-row-md-4">
                                    <div class="col-4">
                                        <label for="tipo_atividade">tipo da atividade<span style="color: red">*</span></label>
                                        <select id="tipo_atividade" name="tipo_atividade" class="form-control custom-select" required>
                                            <option value="minicurso">Minicurso</option>
                                            <option value="palestra">Palestra</option>
                                            <option value="Trabalho Academico">Trabalho Acadêmico</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row mt-3">
                                    <div class="col-6 md-4 mb-3">
                                        <label for="data">Data<span style="color: red">*</span></label>
                                        <input type="text" class="form-control" id="data" name="data" placeholder="Ex.: DD-MM-AAAA" required>
                                    </div>
                                    <div class="col-6 md-4 mb-3">
                                        <label for="horario">Horario <span style="color: red">*</span></label>
                                        <input type="text" class="form-control" id="horario" name="horario" placeholder="Ex.: 12:30" required>
                                    </div>
                                    <div class="col-6 md-4 mb-3">
                                        <label for="max_proposta">Maxímo de Proposta<span style="color: red">*</span></label>
                                        <input type="number" class="form-control" id="max_proposta" name="max_proposta" required>
                                    </div>
                                </div>
                                <button class="btn btn-success btn-lg" type="submit">Cadastrar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
