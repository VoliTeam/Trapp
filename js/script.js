function cuestionario(){
  var cont=0;
  var p = document.getElementsByTagName('p');
  var answer;
  var resp = new Array (p.length);
var comp = document.getElementById('comprobar');

  for(var j=0; j<p.length;j++){
    var parrafo = document.getElementById('p'+cont);
    var contenido = parrafo.innerHTML;
    var textoseparado = contenido.split(")");
    answer = contenido.split("ANSWER: ");

    switch (answer) {
      case "A":
        resp[j]=1;
        break;
      case "B":
        resp[j]=2;
        break;
      case "C":
        resp[j]=3;
        break;
      case "D":
        resp[j]=4;
        break;
      default: null;

    }

      for (var i = 0; i < textoseparado.length; i++) {
        if (i==0){
          p[j].innerHTML = j + "<strong>" + textoseparado[i] + "</strong></br>";
        }else{
          if(i==4){
          var aux = textoseparado[i].split("ANSWER: ");
          p[j].innerHTML = p[j].innerHTML + "<input type='radio' name='p" + cont +"' value=" + i +">" + aux[0] + "</input></br>";
          }else{
          p[j].innerHTML = p[j].innerHTML + "<input type='radio' name='p" + cont +"' value=" + i +">" + textoseparado[i] + "</input></br>";
          }
        }
      }
  cont++;
  comp.innerHTML = "<button type='button' name='button' onclick='comprobar();'>Comprobar</button>";
  }

}


  function comprobar(){
    alert("yee");/*
    var comp = document.getElementById('comprobar');
    var res = document.getElementsByTagName('input');

    for (var i = 0; i < res.length; i++) {
      comp.innerHTML = es[i].value;
    }*/


  }
