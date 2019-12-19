$("#minicurso,#palestra,#trabalho_academico").change(function (event) {
    event.preventDefault();
    if($(this).attr("id") == "minicurso"){
        tipo = $(this).parents(".aba").find("#minicurso").val();
    }else if($(this).attr("id") == "palestra"){
        tipo = $(this).parents(".aba").find("#palestra").val();
    }else{
        tipo = $(this).parents(".aba").find("#trabalho_academico").val();
    }

    $.post("/busca-proposta", {tipo_atividade : tipo}).done(function (data) {
        proposta = JSON.parse(data);
        if(tipo == 'minicurso'){
            texto = tableMC(proposta);
        }else if(tipo == "palestra"){
            texto = tableP(proposta);
        }else if(tipo == "trabalho academico"){
            texto = tableTA(proposta);
        }
        $(".tab-pane.active").find(".content-proposta").html(texto);
    });
});

function tableMC(dado) {

    return `
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Título da Proposta</th>
                        <th scope="col">Area Acadêmica</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Máximo de Participante</th>
                        <th scope="col">Data</th>
                        <th scope="col">hora</th>
                        <th scope="col">Título do Evento</th>
                    </tr>
                </thead>
                <tbody>
                     ${templateMC(dado)}
                </tbody>
             </table>
           `;
}

function tableP(dado) {

    return `
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Título da Proposta</th>
                        <th scope="col">Area Acadêmica</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Data</th>
                        <th scope="col">hora</th>
                        <th scope="col">Título do Evento</th>
                    </tr>
                </thead>
                <tbody>
                     ${templateP(dado)}
                </tbody>
             </table>
           `;
}

function tableTA(dado) {

    return `
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Título da Proposta</th>
                        <th scope="col">Area Acadêmica</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Tipo de Apresentação do Trabalho</th>
                        <th scope="col">Data</th>
                        <th scope="col">hora</th>
                        <th scope="col">Título do Evento</th>
                    </tr>
                </thead>
                <tbody>
                     ${templateTA(dado)}
                </tbody>
             </table>
           `;
}

function templateMC(data) {

    return data.map((dado)=>  `
        <tr>     
            <td>${dado.titulo}</td>
            <td>${dado.area_academica}</td>
            <td>${dado.descricao}</td>
            <td>${dado.max_participante}</td>
            <td>${dado.data_requisitada}</td>
            <td>${dado.horario_requisitado}</td>
            <td>${dado.titulo_evento}</td>
            <td>
                <form action="/aprovar" method="post">
                    <div>
                        <input type="hidden" name="idproposta" value="${dado.id}">
                        <input type="hidden" name="aprovada" value="aprovada">
                   
                    </div>
                    <div class="form-row">
                        <div class="col-mb-3">
                            <button type="submit" class="btn btn-outline-success">Aprovar</button>
                        </div>
                        <div class="col">
                            <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#modalmotivo">Reprovar</button>
                        </div>
                    </div>    
                </form>
            </td>
        </tr>
                                      
    `);
}

function templateP(data) {

    return data.map((dado)=>  `
        <tr>     
            <td>${dado.titulo}</td>
            <td>${dado.area_academica}</td>
            <td>${dado.descricao}</td>
            <td>${dado.data_requisitada}</td>
            <td>${dado.horario_requisitado}</td>
            <td>${dado.titulo_evento}</td>
            <td>
                <form action="/aprovar" method="post">
                    <div>
                        <input type="hidden" name="idproposta" value="${dado.id}">
                        <input type="hidden" name="aprovada" value="aprovada">
                   
                    </div>
                    <div class="form-row">
                        <div class="col-mb-3">
                            <button type="submit" class="btn btn-outline-success">Aprovar</button>
                        </div>
                        <div class="col">
                            <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#modalmotivo">Reprovar</button>
                        </div>
                    </div>    
                </form>
            </td>
        </tr>
                                      
    `);
}

function templateTA(data) {

    return data.map((dado)=>  `
        <tr>     
            <td>${dado.titulo}</td>
            <td>${dado.area_academica}</td>
            <td>${dado.descricao}</td>
            <td>${dado.tipo_trabalho}</td>
            <td>${dado.data_requisitada}</td>
            <td>${dado.horario_requisitado}</td>
            <td>${dado.titulo_evento}</td>
            <td>
                <form action="/aprovar" method="post">
                    <div>
                        <input type="hidden" name="idproposta" value="${dado.id}">
                        <input type="hidden" name="aprovada" value="aprovada">
                   
                    </div>
                    <div class="form-row">
                        <div class="col-mb-3">
                            <button type="submit" class="btn btn-outline-success">Aprovar</button>
                        </div>
                        <div class="col">
                            <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#modalmotivo">Reprovar</button>
                        </div>
                    </div>    
                </form>
            </td>
        </tr>
                                      
    `);
}