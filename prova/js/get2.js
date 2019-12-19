var urlGET = "https://tads-kitchen.herokuapp.com/items";
var urlPOST = "https://tads-kitchen.herokuapp.com/item/create";
var urlREMOVE = "https://tads-kitchen.herokuapp.com/item/remove/";

$("#InsereElemento").on("click", function(){
  adicionaItem();
});

$("#AtualizaLista").on("click", function(){
  esvaziaLista();
  atualizaDados();
});

$("ul").on("dblclick", function(){
  removeItem(event.target);

});

function removeItem(item) {
  var num = item.textContent[0];
  $.get(urlREMOVE + num, function(){
    esvaziaLista();
    atualizaDados();
  });
}

function adicionaItem() {
  var descricaoItem = $("#descricao")[0].value;
  var precoItem = $("#preco")[0].value;
  var obj = JSON.stringify({description : descricaoItem, price : precoItem});
  $.post(
    urlPOST,
    obj, function(){
      esvaziaLista();
      atualizaDados();
    }
  );
  $("#descricao")[0].value = "";
  $("#preco")[0].value = "";
}

function esvaziaLista() {
  $("#lista").empty();
}

function atualizaDados() {
  $.get(
    urlGET,
    function(data) {
      preencheLista(data);
    }
  );
}

function preencheLista(data) {
  var lista = $("#lista")[0];
  var texto = template(data);
  lista.innerHTML = texto;
}

function criaItem(data) {
  var string = "";

  string = template(data.id, data.description, data.price);

  return string;
}

function template(data) {
  return data.map((item)=>`<li class="list-group-item d-flex justify-content-between align-items-center"><span>${item.id}</span><span>${item.description}</span><span class="badge badge-primary badge-pill">R$ ${item.price}</span></li>`).join("");
}
