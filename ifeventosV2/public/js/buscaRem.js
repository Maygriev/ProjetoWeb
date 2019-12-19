
$("#button-pesquisa-rem").click(function (event) {
    event.preventDefault();

    $(".alert").addClass("d-none");

    var cpfusuario = $(this).parents(".aba").find(".cpfusuario").val();
    var cpfcoord = $(this).parents(".aba").find(".cpfcoord").val();

    if(cpfusuario == "" || cpfusuario === "admin" || cpfusuario == cpfcoord) {

        $(".alert").removeClass("d-none");
        $(".alert").text("Caixa de texto vazio ou tentou pesquisar um CPF invalido!");

    }else {

        $.post("/busca-user", {cpf: cpfusuario}).done(function (data) {
            user = JSON.parse(data);
            tipo = user.tipo;
            var texto = templateUser(user);
            $(".tab-pane.active").find(".content-user").html(texto);

            if(tipo == "Comum") {
                $(".alert").removeClass("d-none");
                $(".alert").text("O usuário não tem função para ser removida!");
            }else{
                allEvento(cpfusuario,tipo);
            }
        });

    }

});

function allEvento(cpfusuario,tipouser) {

    teste = {funcao: tipouser, cpf: cpfusuario};
    $.post("/busca-evento",teste).done(function (data) {
        evento = JSON.parse(data);
        var texto = templateTableEvento(evento);
        $(".tab-pane.active").find("tbody").html(texto);
    });

}


function templateUser(data) {

    return `
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Nome Completo: ${data.nome_completo}</li>
                <li class="list-group-item">CPF: ${data.cpf}</li>
                <li class="list-group-item">E-Mail: ${data.email}</li>
                <li class="list-group-item">Tipo de Usuário: ${data.tipo}</li>
            </ul>
        `;
}

function templateTableEvento(data) {

    return data.map((dado)=>`

                <tr>
                    <th scope="row">${dado.id}</th>
                    <td>${dado.titulo}</td>
                    <td>${dado.descricao}</td>
                    <td>${dado.data_inicio}</td>
                    <td>${dado.data_fim}</td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input position-static" type="radio" name="idevento" id="idevento" value="${dado.id}">
                        </div>
                    </td>
                </tr>

        `);
}