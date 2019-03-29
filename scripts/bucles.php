<?php
 //Generar lista de numeros del 1-10
 //script con while, for y Do-while

 echo "<b>Lita de numeros con while</b>";
 echo "<table border =1>";
 $i =1;
 while ($i <= 10) {
   echo "<tr><td>".$i. "</tr></td>";
   $i++; //$i=$i+1;
 }
echo "</table>";

echo "-------------------------------------------------------------------------";

  echo "<table border =1>";
  $i =1;
  while ($i <= 10) {

    if (($i%2)==0) {
      echo "<td bgcolor='RED'>". $i ."</td>";
    } else {
      echo "<td bgcolor='yellow'>".$i."</td>";
      }
  $i++; //$i=$i+1;

  }
echo "</table>";



 ?>
