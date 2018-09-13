<?php

function rekursif($i){
  echo "$i <br>";
  $i--;
  if($i>0)
    rekursif($i);
}
rekursif(5);
?>


/*===================================================================================*/

<?php


  function piramidaRekursif($i = 0, $bts = 5){
    echo "*";
    $i++;
    if ($i<$bts) {
      piramidaRekursif($i,$bts);
    }else {
      echo "<br>";
      $bts--;
      if ($bts!=0) {
          piramidaRekursif(0,$bts);
      }
    }
  }

  piramidaRekursif(0,5);

echo "<br>";
/*==========================================================================*/
echo "<br>";

  function piramidaRekursif2($i = 1, $bts = 1){
    echo "$i";
    $i++;
    if ($i<=$bts) {
      piramidaRekursif2($i,$bts);
    }else {
      echo "<br>";
      $bts++;
      if ($bts<=5) {
          piramidaRekursif2(1,$bts);
      }
    }
  }

piramidarekursif2();

?>




