$("#descricao").on("input", function(){
  var filtro = event.target.value;
  if(filtro.length > 0){
    var exp = new  RegExp("^"+filtro, "i");
    $("li").each(function(index){
      var item = $("li")[index];
      testaExpressao(item, exp);
    });
  } else {
    $("li").each(function(index){
      console.log("chegou");
      var item = $("li")[index];
      item.classList.add("d-flex");
      item.classList.remove("d-none");
    });
  }
});


function testaExpressao(item, exp) {
  if (exp.test(item.childNodes[1].textContent)) {
    item.classList.add("d-flex");
    item.classList.remove("d-none");
  } else {
    item.classList.remove("d-flex");
    item.classList.add("d-none");
  }
}
