var aciertos = 0;


function generarFormulario(){
  var cont=0;
  var p = document.getElementsByTagName('p');              //Guarda un array con todos los objetos <p>
  var numPreguntas = p.length;
  var answer;                                              //para obtener la respuesta. Es necesario usar tokenizer
  var resp = new Array (p.length);                         //Array para almacenar en cada indice la respuesta del usuario a cada pregunta
  var comp = document.getElementById('comprobar');         //Obtenemos el objeto <span id=comprobar> para generar un button en ese espacio

  for(var j=0; j<p.length;j++){                            //Recorremos cada objeto
    var parrafo = document.getElementById('p'+cont);       //Por cada pasada, cogemos el siguiente <p>
    var contenido = parrafo.innerHTML;                     //obtenemos el contenido dentro de <p></p>
    var textoseparado = contenido.split(")");
    answer = contenido.split("ANSWER: ");                  //Separamos la palabra ANSWER del la respuesta

    switch (answer) {                                      //De cada respuesta obtenida, obtenemos una letra. Esa letra equivale a un numero. Si elección == respuesta --> acierto
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

      for (var i = 0; i < textoseparado.length; i++) {                            //generamos el formulario de cada objeto <p>
        if (i==0){
          p[j].innerHTML = j + "<strong>" + textoseparado[i] + "</strong></br>";   //el primer elemento es el titulo de la pregunta
        }else{
          if(i==4){
          var aux = textoseparado[i].split("ANSWER: ");                            //recortamos la parte ANSWER de la frase
          p[j].innerHTML = p[j].innerHTML + "<input type='radio' name='p" + cont +"' value=" + i +">" + aux[0] + "</input></br>";
          }else{
          p[j].innerHTML = p[j].innerHTML + "<input type='radio' name='p" + cont +"' value=" + i +">" + textoseparado[i] + "</input></br>";
          }
        }
      }
  cont++;

  }
  //comp.innerHTML = "<button type='button' name='button' onclick='comprobar()'>Comprobar</button>";
  /*var inputElement = document.createElement('input');
  inputElement.type = "button";
  inputElement.addEventListener('click', comprobar());
​             comp.appendChild(inputElement);​*/

ele = document.createElement('input'); // 5
  ele.type = 'button'; // 6
  ele.value = 'Comprobar'; // 8
  ele.name = 'buttn'; // 8
  ele.onclick = function () {comprobar(resp)} // 9
  comp.appendChild(ele); // 7
}


  function comprobar(resp){
alert("entra");
alert(resp[1].value);
    var comp = document.getElementById('comprobar');                            //Obtenemos el objeto <span id=comprobar
    var elecc = document.getElementsByTagName('input');                           //Obtenemos todos los input a saco

    for (var i = 0; i < elecc.length; i++) {

      if(elecc[i].checked){
      comp.innerHTML = elecc[i].value;
      //alert(elecc[i].value);
      alert(resp[i].value);
      }
    }


  }
