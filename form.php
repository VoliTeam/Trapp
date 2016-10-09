<!DOCTYPE html>
<html>
<?php
include 'includes/header.php' ;
cabecera ( 'Trapp' );
?>
  <body>
    <div id="wrapper">

    	<?php
    	nav();
    	?>

    <div id="leftpanel">
    w
    </div>
    <div id="centerpanel">


    <?php
    // Iremos leyendo línea a línea del fichero.txt hasta llegar al fin (feof($fp))

    //$fecha = "04/30/1973";
    //list($mes, $día, $año) = split('[/.-]', $fecha);
    //list($pregunta, $r1) = split('[*]', $linea);

    function solicitarPregunta (){    //Muestra la pregunta que hemos solicitado
    $num = $_POST['num'];             //el numero de pregunta
    $pregunta = array();
    $r1 = array();
    $r2 = array();
    $r3 = array();
    $r4 = array();
    $cierta = array();
    $fp = fopen("data.txt", "r");     //abrimos en modo lectura
    $cont=0;

        $linea = fgets($fp);          //guardamos todo el texto en var $linea

        $aux = split('[*]', $linea);  //separamos por asteriscos
        for($i = 0; $i<(sizeof($aux)-1)/6; $i++){

              $pregunta[$i]=$aux[$cont];

              $r1[$i]=$aux[$cont+1];
              $r2[$i]=$aux[$cont+2];
              $r3[$i]=$aux[$cont+3];
              $r4[$i]=$aux[$cont+4];
              $cierta[$i]=$aux[$cont+5];
              $cont=$cont + 6;

        }
        echo (sizeof($aux)-1)/6;

        echo $pregunta[$num-1]."</br>".$r1[$num-1]."</br>".$r2[$num-1]."</br>".$r3[$num-1]."</br>".$r4[$num-1]."</br>".$cierta[$num-1];

    fclose($fp);
    }

    if(isset($_POST['enviar'])){  //si hemos dado a enviar pregunta, ejecuta esto
      $saltoLinea="\r\n";

        $fp = fopen("data.txt", "a+");
        $question = $_POST['question'];
        $resp1 = $_POST['answer1'];
        $resp2 = $_POST['answer2'];
        $resp3 = $_POST['answer3'];
        $resp4 = $_POST['answer4'];
        $cierta = $_POST['cierta'];
        fputs($fp, $question."*".$resp1."*".$resp2."*".$resp3."*".$resp4."*".$cierta."*");


    fclose($fp);

    ?>
    <form class="" action="form.php" method="post">
        <label>dime nº de pregunta</label>
        <input type="text" name="num" value="">
        <input type="submit" name="solicitar" value="solicitar">
    </form>
    </br>
    <?php

    }else if(isset($_POST['solicitar'])){    //si hemos enviado la pregunta, y hemos dado a solicitar
      solicitarPregunta();
    }else{  //si no hemos enviado nada, ejecuta el primer paso
      ?>

    <form class="" action="form.php" method="post">
        <label>Pregunta</label>
        <input type="text" name="question" value="" required>
      </br>
        <label>Respuesta 1</label>
        <input type="text" name="answer1" value="" required>
      </br>
        <label>Respuesta 2</label>
        <input type="text" name="answer2" value="" required>
      </br>
        <label>Respuesta 3</label>
        <input type="text" name="answer3" value="" required>
      </br>
        <label>Respuesta 4</label>
        <input type="text" name="answer4" value="" required>
      </br>
        <label>Respuesta válida</label>
        <input type="text" name="cierta" value="" required>




        <input type="submit" name="enviar" value="enviar">
    </form>
<?php } ?>

</div>

<div id="rightpanel">
      e
</div>

</div>
</body>
</html>
</body>
</html>
