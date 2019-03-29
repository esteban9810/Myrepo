<html>

  <head>
    <title> Mi Tienda </title>
    <link rel="icon" type="image/ico" href="icons/danger.png"/>
  </head>

  <body background="images/fondo.jpg">

  <form name="frm1" method="post">
  <center> <font face="verdana" size="6"  color="gold"><b><b> <b>Series</b></b></b></font></center>

    <table border="1" align="center">

      <tr>
        <td align="center"> <font face="verdana" size="3" color="black"<b><b>Ingrese el numero</b></b></font></td>
      </tr>

      <tr>
        <td> <input type="text" name="num" value="" maxlength="10"onkeypress="if (event.keyCode < 45 || event.keyCode >57)
          event.returnValue = false; required" placeholder="Ingrese el numero" required><br></td>
      </tr>

    </table>

    <center><font face="verdana" size="3" color="white"<b><b><input type="submit" value="Procesar"></font></center>

    </form>

  </body>

</html>


<?php
  $n=$_POST["num"];
echo "Serie Descendente";
  echo "<table border =1>";
    $i=$n;
    while ($i>0) {
      echo "<td>". $i ."</td>";
        $i--;
    }
  echo "</table>";

echo "Serie Ascendente";
echo "<table border =1>";
  $i=1;
  while ($i <= $n) {
    echo "<td>". $i ."</td>";
      $i++;
  }
echo "</table>";

echo "Serie -----";
echo "<table border =1>";
 $i=1;
  while ($n>0) {
    echo "<tr><td>".$n."</td></tr>";
      $n--;

  while ($i<= $n) {
    echo "<tr><td>". $i ."</td></tr>";
      $i++;
  }
  }
echo "</table>";






 ?>
