<html>
<head>
  <meta charset="UTF-8"/>
      <link rel="Stylesheet" type="text/css" href="css/style.css"/>
   </head>
   <body>
	   <div id="cuerpo">
<?php
$valor1=$_POST['Valor1'];
$valor2=$_POST['Valor2'];
$suma= $valor1 + $valor2;
$resta = $valor1-$valor2;
$multiplicacion = $valor1*$valor2;
$divicion = $valor1/$valor2;
echo "<h1>RESULTADOS</h1>";
echo 'EL RESULTADO DE LA SUMA ES:  '.$valor1.'+'.$valor2.'=  '.$suma;
echo "</br>";
echo 'EL RESULTADO DE LA RESTA ES:  '.$valor1.'-'.$valor2.'=  '.$resta;
echo "</br>";
echo 'EL RESULTADO DE LA MULTIPLICACION ES:  '.$valor1.'*'.$valor2.'=  '.$multiplicacion;
echo "</br>";
echo 'EL RESULTADO DE LA DIVICION ES:  '.$valor1.'/'.$valor2.'=  '.$divicion;
echo "</br>";

?>
<p>Raquel Alejandra Martinez Ramirez</p>

</html>
</body>
</div>