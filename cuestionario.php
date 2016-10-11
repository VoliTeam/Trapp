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
  //  session_start(); //lo pones al principio de toda  la pagina donde hace falta pasar parametros


    function mostrarCuestionario (){    //Muestra la pregunta que hemos solicitado
          global $preguntasTotales, $pregunta, $r1,$r2,$r3,$r4;
        for ($i=0; $i < $preguntasTotales; $i++) {
          $cont=0;
          echo "<form class='' action='cuestionario.php' method='post'>\n";
          echo "<h3>".$pregunta[$i]."</h3>\n";
          echo "<input type='radio' name='p".$i."' value='".($cont+1)."'>".$r1[$i]."</input></br>\n";
          echo "<input type='radio' name='p".$i."' value='".($cont+2)."'>".$r2[$i]."</input></br>\n";
          echo "<input type='radio' name='p".$i."' value='".($cont+3)."'>".$r3[$i]."</input></br>\n";
          echo "<input type='radio' name='p".$i."' value='".($cont+4)."'>".$r4[$i]."</input></br>\n";

        }

        echo "<input type='submit' name='corregir' value='corregir'></br>\n";
        echo "</form>\n";
    }


    function corregir(){
          global $preguntasTotales, $pregunta,$cierta;

          echo "nº preguntas: ". $preguntasTotales."</br>";

          for ($i=0; $i < $preguntasTotales; $i++) {
            if($_POST["p".$i]==$cierta[$i]){
              echo "PREGUNTA Nº $i: acertaste</br>";
            }else{
              echo "PREGUNTA Nº $i: fallaste</br>";
            }

          }
    }
      //
    if(!isset($_POST['corregir'])){
          $preguntasTotales;
          $pregunta;
          $pregunta = array();
          $r1;
          $r1 = array();
          $r2;
          $r2 = array();
          $r3;
          $r3 = array();
          $r4;
          $r4 = array();
          $cierta;
          $cierta = array();
          $fp = fopen("./user_data/test.txt", "r");     //abrimos en modo lectura
          $cont=0;


          $linea = fgets($fp);          //guardamos todo el texto en var $linea

          $aux = split('[*]', $linea);  //separamos por asteriscos

          $preguntasTotales = (sizeof($aux)-1)/6;
          for($i = 0; $i<$preguntasTotales; $i++){

                $pregunta[$i]=$aux[$cont];

                $r1[$i]=$aux[$cont+1];
                $r2[$i]=$aux[$cont+2];
                $r3[$i]=$aux[$cont+3];
                $r4[$i]=$aux[$cont+4];
                $cierta[$i]=$aux[$cont+5];
                $cont=$cont + 6;
              }
              fclose($fp);
      mostrarCuestionario();
    }else{

      //volvemos a ejecutar el codigo para recoger las variables del fichero, porque como no sabemos todavia establecer sesiones... pues toca hacer la trapa
      $preguntasTotales;
      $pregunta;
      $pregunta = array();
      $r1;
      $r1 = array();
      $r2;
      $r2 = array();
      $r3;
      $r3 = array();
      $r4;
      $r4 = array();
      $cierta;
      $cierta = array();
      $fp = fopen("./user_data/test.txt", "r");     //abrimos en modo lectura
      $cont=0;


      $linea = fgets($fp);          //guardamos todo el texto en var $linea

      $aux = split('[*]', $linea);  //separamos por asteriscos

      $preguntasTotales = (sizeof($aux)-1)/6;
      for($i = 0; $i<$preguntasTotales; $i++){

            $pregunta[$i]=$aux[$cont];

            $r1[$i]=$aux[$cont+1];
            $r2[$i]=$aux[$cont+2];
            $r3[$i]=$aux[$cont+3];
            $r4[$i]=$aux[$cont+4];
            $cierta[$i]=$aux[$cont+5];
            $cont=$cont + 6;
          }
          fclose($fp);

      corregir();
    }
      ?>
    </div>

    <div id="rightpanel">
    			e
    </div>

    </div>
    </body>
    </html>
  </body>
</html>
