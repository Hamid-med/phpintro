<!doctype html>
<html>
<body>
<?php
$mois = array ('janvier','février','mars','avril','mai','juin','juillet','aout','septembre','octobre','novembre','décembre');
$arrlength = count($mois);

for($x = 0; $x < $arrlength; $x++) {
  echo $mois[$x];
  echo "<br>";
}


?>
</body>
</html>