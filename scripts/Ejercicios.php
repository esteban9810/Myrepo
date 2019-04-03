<center><font face="Arial" size="5" color="black"><b>TALLER</b></font> </td></center>
Presentado por: RICARDO ESTEBAN AGREDA<BR><BR>
<?php
echo "<b> 1). Lista de números del 1 al 10 Sin hacer uso de ninguna estructura tipo bucle</b><br><br>";
echo "1 ";
echo "2 ";
echo "3 ";
echo "4 ";
echo "5 ";
echo "6 ";
echo "7 ";
echo "8 ";
echo "9 ";
echo "10";
echo "<br><br>";


echo "------------------------------------------------------------------------------------------------------------------------";
echo "<br><br>";
echo "<b> 2). Escriba un Script en PHP que muestre por pantalla los números del 1 al 10</b><br><br>";
for($i = 1; $i <= 10; $i++){
      echo $i ." ";
   }


echo "<br><br>";
echo "------------------------------------------------------------------------------------------------------------------------";
echo "<br><br>";
echo "<b> 3). Escriba un Script en PHP que muestre por pantalla los primeros 100 números naturales.</b><br><br>";
for($i = 1; $i <= 100; $i++){
      echo $i ."  ";
   }


echo "<br><br>";
echo "------------------------------------------------------------------------------------------------------------------------";
echo "<br><br>";
echo "<b> 4). Escriba un Script en PHP que muestre por pantalla los primeros 100 números naturales de 2 en 2.</b><br><br>";
$n=2;
while ($n<= 100) {
 echo $n."  ";
  $n=$n+2; //$i=$i+1;
}


echo "<br><br>";
echo "------------------------------------------------------------------------------------------------------------------------";
echo "<br><br>";
echo "<b> 5). Escriba un Script en PHP que genere aleatoriamente 10 números enteros positivos y los muestre por pantalla. Use la función rand().</b><br><br>";
for ($i=1;$i<=10;$i++) {
    $aleatorio = rand(1,300);
    echo $aleatorio." ";
    }

echo "<br><br>";
echo "------------------------------------------------------------------------------------------------------------------------";
echo "<br><br>";
echo "<b> 6). Escriba un algo Script en PHP ritmo que muestre por pantalla la suma de los primeros 100 números naturales.</b><br><br>";
$num=1;
$suma=0;
while ($num <=100) {
      $suma = $num +$suma;
      $num++;
      }
      echo $suma;


echo "<br><br>";
echo "------------------------------------------------------------------------------------------------------------------------";
echo "<br><br>";
echo "<b> 7). Escriba un Script en PHP que muestre por pantalla los múltiplos de 3 comprendidos en la serie del 1 al 100.</b><br><br>";
$num=1;
while ($num <=100) {
      if ($num%3==0){
        echo $num." ";
         }
      $num++;
      }


echo "<br><br>";
echo "------------------------------------------------------------------------------------------------------------------------";
echo "<br><br>";
echo "<b> 8). . Escriba un Script en PHP que genere aleatoriamente 10 números
      enteros positivos y los muestre por pantalla, y visualice además el
      siguiente reporte en una tabla HTML:
      - Total de números pares generados.
      - Total de números impares generados</b><br><br>";

$par=0;
$impar=0;
for ($i=1;$i<=10;$i++) {
    $aleatorio = rand(1,100);
    if ($aleatorio%2==0) {
      $par=$par+1;
    }
    else {
      $impar=$impar+1;
    }
    echo $aleatorio." ";
    }
    echo "<table border =1>";
    echo "<Br><Br><tr><td>Total numeros pares </td><td> ".$par." </td></tr>";
    echo "<tr> <td>Total numeros impares </td><td> ".$impar." </td></tr>";
echo "</table>";


echo "<br><br>";
echo "------------------------------------------------------------------------------------------------------------------------";
echo "<br><br>";
echo "9). Escriba un Script en PHP que genere aleatoriamente 10 números
enteros positivos y negativos, y los muestre por pantalla, y visualice
además el siguiente reporte en una tabla HTML:
- Total de números positivos pares generados.
- Total de números positivos impares generados.
- Total de números negativos pares generados.
- Total de números negativos impares generados<br><br>";
$parposi=0;
$imparposi=0;
$parneg=0;
$imparneg=0;
  echo "<table border=1>";
for ($i=1;$i<=10;$i++) {
    $aleatorio = rand(-300,300);
      echo "<td>".$aleatorio." </td>";

    if($aleatorio > 0  &&  ($aleatorio%2)==0){
      $parposi=$parposi+1;
    }else if ($aleatorio > 0  && (($aleatorio%3)==0 || ($aleatorio%3)!=0)) {
    $imparposi=$imparposi+1;
  }
  if($aleatorio < 0  &&  ($aleatorio%2)==0){
    $parneg=$parneg+1;
  }else if ($aleatorio < 0  && (($aleatorio%3)==0 || ($aleatorio%3)!=0)) {
  $imparneg=$imparneg+1;
}
}
echo "</table>";

  echo "<br><br>";
  echo "<table border=1>";
  echo "<tr><td> Total de Numeros postivos pares: </td> <td>".$parposi."</td></tr>";
  echo "<tr><td> Total de Numeros postivos impares: </td> <td>".$imparposi."</td></tr>";
  echo "<tr><td> Total de Numeros negativos pares: </td> <td>".$parneg."</td></tr>";
  echo "<tr><td> Total de Numeros negativos impares: </td> <td>".$imparneg."</td></tr>";
echo "</table>";

echo "<br><br>";

echo "------------------------------------------------------------------------------------------------------------------------";
echo "<br><br>";
echo "10)";
echo "<br><br>";
 ?>

 <html>

     <head>
        <title> EJERCICIOS </title>
        </head>

     <body bgcolor="#D3BEBE">  <br>
      <form name=frm1  method="POST">
          <table border="1">
            <tr>
                <td align=center> <font face="Arial" size="4" color="black"><b>TABLA DE MULTIPLICAR</b></font> </td>
            </tr>

            <tr>
               <td font face="Arial" size="3" > Digite numero: <font color="codigocolor"></font> </font> </td>
            </tr>

            <tr>
              <td> <input type="text" name="num1" value="" maxlength="10"onkeypress="if (event.keyCode < 45 || event.keyCode >57) event.returnValue = false; required" placeholder="Digite un numero" required></td></tr>
            </tr>

          </table>
          <BR>
            <input  type="submit" value="GENERAR TABLA">

        </form>
     </body>
 </html>


 <?php

$n1=$_POST ["num1"];
echo "<BR><BR><table border =1>";
echo "TABLA DE MULTIPLICAR";
  for($i=1; $i<=10; $i++)
  {
    echo "<tr><td >$n1</td>
              <td >x</td>
              <td >$i</td>
              <td >=</td>
              <td > ". ($i*$n1) . "</td>
          </tr>";
  }
  echo "</table> ";


  echo "<br><br>Numeros Descendentes de: ".$n1;
  echo "<table border =1>";

  $i=$n1;
  while ($i > 0) {
    echo "<td>".$i."</td>";
    $i--; //$i = $i
  }
  echo "</table>";


  echo "<br><br>Numeros Ascendentes de: ".$n1;
  echo "<table border =1>";
  $i=1;
  while ($i <= $n1) {
    echo "<td>".$i."</td>";
    $i++; //$i = $i
  }
  echo "</table>";


  echo "<br><b>Lista de numeros acendente y decendente</b></br>";
  echo "<table border=1 cellpadding='9' style=float:left>";
  $i=1;
   while  ($i<=$n1){
    if(($i%2)==0){
     echo "<tr><td>".$i."</td></tr>";
   }
   else{
     echo "<tr><td>".$i."</td></tr>";
   }
   $i++;
  }
  echo "</table>";
  echo "<table border=1 cellpadding='9' style=float:left:200px >";
  $i = $n1;
  while  ($i>0){
   if(($i%2)==0){
     echo "<tr><td>".$i."</td></tr>";
   }
   else{
     echo "<tr><td>".$i."</td></tr>";
   }
   $i--;
  }
  echo "</table>";

  ?>
