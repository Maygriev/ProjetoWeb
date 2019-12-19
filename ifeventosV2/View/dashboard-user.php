
<main class="mt-3 pt-3">
    <div class="alert alert-danger d-none mt-2" role="alert">

    </div>
    <div class="mt-3">
        <div class="row">
            <div class="col-3">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <h5 class="sidebar-heading d-flex px-3 mt-4 mb-1 text-muted">
                        <span>Painel de Controle</span>
                    </h5>
                    <a class="nav-link" id="v-pills-enviar-proposta-tab" data-toggle="pill" href="#v-pills-enviar-proposta" role="tab" aria-controls="v-pills-enviar-proposta" aria-selected="false">Enviar Proposta</a>
                </div>
            </div>
            <div class="col-7">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade aba" id="v-pills-enviar-proposta" role="tabpanel" aria-labelledby="v-pills-enviar-proposta-tab">
                        <div class="container mb-5 pb-3 ">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-minicurso-tab" data-toggle="pill" href="#pills-minicurso" role="tab" aria-controls="pills-minicurso" aria-selected="true">
                                        MiniCurso
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-palestra-tab" data-toggle="pill" href="#pills-palestra" role="tab" aria-controls="pills-palestra" aria-selected="false">
                                        Palestra
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-trabalho-academico-tab" data-toggle="pill" href="#pills-trabalho-academico" role="tab" aria-controls="pills-trabalho-academico" aria-selected="false">
                                        Trabalho Acadêmico
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade" id="pills-minicurso" role="tabpanel" aria-labelledby="pills-minicurso-tab">
                                    <input type="hidden" name="tipo_atividade" id="minicurso" value="minicurso">
                                    <form action="/add-proposta" method="post">
                                        <h4>Eventos Cadastrados</h4>
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th scope="col">data</th>
                                                <th scope="col">Horario</th>
                                                <th scope="col">Selecionar</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                        </table>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="titulo">Título</label>
                                                <input type="text" class="form-control title"  name="titulo" id="titulo" placeholder="Digite o Título">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="area-academica">Área Acadêmica</label>
                                                <input type="text" class="form-control academy" name="area_academica" id="area-academica" placeholder="Digite a área acadêmica">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="descricao">Descrição</label>
                                            <textarea type="text" class="form-control descrition" name="descricao" id="descricao" placeholder="Digite uma Descrição"></textarea>
                                        </div>
                                        <div class="form-row mb-6">
                                            <div class="form-group col-md-2">
                                                <label for="max-participante">Número de Participante</label>
                                                <input type="number" class="form-control descrition " name="max_participante" id="max-participante">
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-success btn-lg">Enviar</button>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="pills-palestra" role="tabpanel" aria-labelledby="pills-palestra-tab">
                                    <input type="hidden" name="tipo_atividade" id="palestra" value="palestra">
                                    <form action="/add-proposta" method="post">
                                        <h4>Eventos Cadastrados</h4>
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th scope="col">data</th>
                                                <th scope="col">Horario</th>
                                                <th scope="col">Selecionar</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                        </table>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="titulo">Título</label>
                                                <input type="text" class="form-control title" id="titulo" name="titulo" placeholder="Digite o Título">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="area-academica">Área Acadêmica</label>
                                                <input type="text" class="form-control academy" id="area-academica" name="area_academica" placeholder="Digite a área acadêmica">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="descricao">Descrição</label>
                                            <textarea type="text" class="form-control descrition" id="descricao" name="descricao" placeholder="Digite uma Descrição"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-success btn-lg">Enviar</button>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="pills-trabalho-academico" role="tabpanel" aria-labelledby="pills-trabalho-academico-tab">
                                    <input type="hidden" name="tipo_atividade" id="trabalhoAcademico" value="trabalho academico">
                                    <form action="/add-proposta" method="post">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th scope="col">data</th>
                                                <th scope="col">Horario</th>
                                                <th scope="col">Selecionar</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                        </table>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="titulo">Título</label>
                                                <input type="text" class="form-control title" id="titulo" name="titulo" placeholder="Digite o Título">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="area-academica">Área Acadêmica</label>
                                                <input type="text" class="form-control academy" id="area-academica"  name="area_academica" placeholder="Digite a área acadêmica">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="descricao">Descrição</label>
                                            <textarea type="text" class="form-control descrition" id="descricao" name="descricao" placeholder="Digite uma Descrição"></textarea>
                                        </div>
                                        <p>Tipo do Trabalho Acadêmico</p>
                                        <div class="form-row mb-6 pb-5">
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="tipotrabalho" id="banner" value="Banner" class="custom-control-input">
                                                <label class="custom-control-label" for="banner">Banner</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="tipotrabalho" id="oral" value="Apresentação Oral" class="custom-control-input">
                                                <label class="custom-control-label" for="oral">Apresentação Oral</label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-success btn-lg">Enviar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
