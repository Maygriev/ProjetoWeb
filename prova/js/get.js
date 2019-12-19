var urlGET = "https://tads-kitchen.herokuapp.com/cards";
var urlCREATE = "https://tads-kitchen.herokuapp.com/card/create";
var urlTOGGLE = "https://tads-kitchen.herokuapp.com/card/toggle/";
var updateLista = setInterval(temporizador, 5000);

$("#CriaCartao").on("click", function(){
  $.get(urlCREATE);
});

$("ul").on("click", function(){
  alternaCartao(event.target);
});

function temporizador() {
  esvaziaLista();
  atualizaDados();
}

function alternaCartao(item) {
  var num = item.childNodes[0].textContent;
  $.get(urlTOGGLE + num);
}

function atualizaDados() {
  $.get(
    urlGET,
    function(data) {
      preencheLista(data);
    }
  );
}

function esvaziaLista() {
  $("#lista").empty();
}

function preencheLista(data) {
  var lista = $("#lista")[0];
  data.map(function(dado){
    var item = criaItem(dado);
    lista.innerHTML = item + lista.innerHTML;
  });
}

function criaItem(data) {
  var string = "";
  var classe = "";

  if(data.status == "off") {
    classe = "list-group-item-danger";
  } else {
    classe = "list-group-item-success";
  }

  string = template(data.number, data.status, classe);

  return string;
}

function template(number, status, classe) {
  return `<li class="list-group-item d-flex justify-content-between align-items-center ${classe}">${number}<span class="badge badge-primary badge-pill">${status}</span></li>`
}
