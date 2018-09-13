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

<form class="" action="TA1_6701170104_Rafata Baharansyah.php" method="post">
  Batas Piramida<input type="number" name="bts"><br>
  <input type="submit" name="submit">
</form>

<?php

  if (isset($_POST['submit'])) {
      $batas = $_POST['bts'];
      piramidaRekursif(0,$batas);
  }

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




