
$("#pills-minicurso-tab, #pills-palestra-tab, #pills-trabalho-academico-tab").click(function (event) {
    event.preventDefault();
    if($(this).attr("id") == "pills-minicurso-tab"){
        tipo = $(this).parents(".aba").find("#minicurso").val();
    }else if($(this).attr("id") == "pills-palestra-tab"){
        tipo = $(this).parents(".aba").find("#palestra").val();
    }else{
        tipo = $(this).parents(".aba").find("#trabalhoAcademico").val();
    }

    $.post("/busca-atividade", {tipo_atividade : tipo}).done(function (data) {
        json = JSON.parse(data);
        var texto = template(json);
        $(".tab-pane.active").find("tbody").html(texto);
    });
});

function template (data) {
    console.log(data)
    return data.map((dado)=>  `
        <tr>     
            <td>${dado.data}</td>
            <td>${dado.horario}</td>
            <td>
                <div class="form-check">
                    <input class="form-check-input position-static" type="radio" name="selecao" id="selecao" value="${dado.id}">
                </div>
            </td>
        </tr>
                                      
    `);
}

