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
        <a class="navbar-brand text-white" href="index.php">
            <img src="img/ifrn-evento.png">
            Eventos
        </a>
    </nav>
</header>
<main>
    <div class="container mt-5 pt-5 mb-5">
        <div>
            <h1 class="display-3">Cadastro de Usuário</h1>
        </div>
        <div>
            <div class="mt-5">
                <h3 class="display-4">Dados Pessoais</h3>
            </div>
            <form class="mt-5" action="/add-user" method="post">
                <div class="form-row-md-4">
                    <label for="validationDefault01">Nome Completo <span style="color: red">*</span></label>
                    <input type="text" class="form-control" id="validationDefault01" name="nomecompleto" placeholder="Digite seu nome completo" required>
                </div>
                <div class="form-row mt-3">
                    <div class="col-6 md-4 mb-3">
                        <label for="validationDefault02">CPF do Usuário <span style="color: red">*</span></label>
                        <input type="text" class="form-control" id="validationDefault02" name="cpf" placeholder="Digite seu CPF" required>
                    </div>
                    <div class="col-6 md-4 mb-3">
                        <label for="validationDefault03">Data de Nacimento <span style="color: red">*</span></label>
                        <input type="text" class="form-control" id="validationDefault03" name="datanascimento" placeholder="Ex.: DD-MM-AAAA" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-6 md-4 mb-2">
                        <label for="validationDefault04">Senha <span style="color: red">*</span></label>
                        <input type="password" class="form-control" id="validationDefault04" name="senha" aria-describedby="passwordHelpInline" placeholder="Digite uma Senha" required>
                        <small id="passwordHelpInline" class="text-muted">
                            Deve ter entre 8 e 20 caracteres.
                        </small>
                    </div>
                    <div class="col-6 md-4 mb-3">
                        <label for="validationDefault05">Confirmar Senha <span style="color: red">*</span></label>
                        <input type="password" class="form-control" id="validationDefault05" name="confsenha" placeholder="Digite novamente a senha" aria-describedby="inputGroupPrepend2" required>
                    </div>
                </div>
                <div class="form-row-md-4">
                    <label for="validationDefault12">E-mail <span style="color: red">*</span></label>
                    <input type="email" class="form-control" id="validationDefault12" name="email" placeholder="Digite seu e-mail" required>
                </div>
                <div class="form-row mt-3">
                    <div class="col-md-4 mb-3">
                        <label for="validationDefault13">Celular 1<span style="color: red">*</span></label>
                        <input type="text" class="form-control" id="validationDefault13" name="cel1" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationDefault14">Celular 2 </label>
                        <input type="text" class="form-control" id="validationDefault14" name="cel2">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationDefault15">Telefone </label>
                        <input type="text" class="form-control" id="validationDefault15" name="telefone">
                    </div>
                </div>
                <div class="mt-3">
                    <h3 class="display-4">Endereço</h3>
                </div>
                <div class="form-row mt-5">
                    <div class="col-11  md-4 mb-3">
                        <label for="validationDefault06">Logradouro <span style="color: red">*</span></label>
                        <input type="text" class="form-control" id="validationDefault06" name="logradouro" placeholder="Digite o seu logradouro" required>
                    </div>
                    <div class="col-1  md-4 mb-3">
                        <label for="validationDefault07">Nº</label>
                        <input type="text" class="form-control" id="validationDefault07" name="numero">
                    </div>
                </div>
                <div class="form-row-md-4">
                    <label for="validationDefault08">Complemento</label>
                    <input type="text" class="form-control" id="validationDefault08" name="complemento">
                </div>
                <div class="form-row mt-3 mb-5">
                    <div class="col-md-4 mb-3">
                        <label for="validationDefault09">Bairro <span style="color: red">*</span></label>
                        <input type="text" class="form-control" id="validationDefault09" name="bairro" placeholder="Digite o seu Bairro" required>
                    </div>
                    <div class="col-7 md-3 mb-3">
                        <label for="validationDefault10">Cidade <span style="color: red">*</span></label>
                        <input type="text" class="form-control" id="validationDefault10" name="cidade" placeholder="Digite a cidade que você mora" required>
                    </div>
                    <div class="col-1 md-3 mb-3">
                        <label for="validationDefault11">UF <span style="color: red">*</span></label>
                        <select  name="uf" class="form-control custom-select" id="validationDefault11" required>
                            <option value="null">--</option>
                            <option value="Acre">AC</option>
                            <option value="Alagoas">AL</option>
                            <option value="Amazonas">AM</option>
                            <option value="Amapá">AP</option>
                            <option value="Bahia">BA</option>
                            <option value="Ceará">CE</option>
                            <option value="Distrito Federal">DF</option>
                            <option value="Espírito Santo">ES</option>
                            <option value="Goiás">GO</option>
                            <option value="Maranhão">MA</option>
                            <option value="Minas Gerais">MG</option>
                            <option value="Mato Grosso do Sul">MS</option>
                            <option value="Mato Grosso">MT</option>
                            <option value="Pará">PA</option>
                            <option value="Paraíba">PB</option>
                            <option value="Pernambuco">PE</option>
                            <option value="Piauí">PI</option>
                            <option value="Paraná">PR</option>
                            <option value="Rio de Janeiro">RJ</option>
                            <option value="Rio Grande do Norte">RN</option>
                            <option value="Rondônia">RO</option>
                            <option value="Roraima">RR</option>
                            <option value="Rio Grande do Sul">RS</option>
                            <option value="Santa Catarina">SC</option>
                            <option value="Sergipe">SE</option>
                            <option value="São Paulo">SP</option>
                            <option value="Tocantins">TO</option>
                        </select>
                    </div>
                </div>
                <button class="btn btn-success btn-lg" type="submit">Cadastrar</button>
                <a class="btn btn-light btn-lg" href="/home-ifevento">Cancelar</a>
            </form>
        </div>
    </div>
</main>
