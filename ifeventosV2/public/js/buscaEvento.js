$("#v-pills-cadastrar-atividade-tab").click(function (event) {
    event.preventDefault();
    var cpfcoord = $("#cpfcoordenador").val();
    console.log(cpfcoord);
    allEventCoord(cpfcoord);
});

function allEventCoord(cpfcoord) {

    $.post("/busca-evento-coord",{cpf : cpfcoord}).done(function (data) {
        console.log(data);
        evento = JSON.parse(data);
        var texto = templateTableEvento(evento);
        $(".tab-pane.active").find("tbody").html(texto);
    });

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