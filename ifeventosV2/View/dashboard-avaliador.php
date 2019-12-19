
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
                    <a class="nav-link" id="v-pills-avaliar-proposta-tab" data-toggle="pill" href="#v-pills-avaliar-proposta" role="tab" aria-controls="v-pills-avaliar-proposta" aria-selected="false">Avaliar Proppostas</a>
                </div>
            </div>
            <div class="col-7">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade" id="v-pills-avaliar-proposta" role="tabpanel" aria-labelledby="v-pills-avaliar-proposta-tab">
                        <div class="container mb-5 pb-3 ">
                            <div>
                                <h1 class="display-3">Avaliar Propostas de Usuários</h1>
                            </div>
                            <div class="aba">
                                <form>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" name="proposta" id="minicurso" value="minicurso" class="custom-control-input minicurso">
                                        <label class="custom-control-label" for="minicurso">Minicurso</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" name="proposta" id="palestra" value="palestra" class="custom-control-input palestra">
                                        <label class="custom-control-label" for="palestra">Palestra</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" name="proposta" id="trabalho_academico" value="trabalho academico" class="custom-control-input trabalho_academico">
                                        <label class="custom-control-label" for="trabalho_academico">Trabalho Acadêmico</label>
                                    </div>
                                </form>
                                    <div class="content-proposta">
                                        <h4>Propostas Enviadas</h4>

                                    </div>
                                <div class="modal fade" id="modalmotivo" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="titulo">Informe o Motivo</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="/reprovar" method="post">
                                                    <div class="form-group">
                                                        <input type="hidden" name="reprovada" value="reprovada">
                                                        <input type="hidden" name="idproposta">
                                                        <textarea type="text" class="form-control" id="motivo" name="motivo" rows="6"></textarea>
                                                    </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-success">enviar</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

