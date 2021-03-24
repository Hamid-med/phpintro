<!doctype html>
<html>
<body>
<?php
$departements = array(1 => 'Ain',2 => 'Aisne',3 => 'Allier',4 =>'Alpes-de-Haute-Provence',5 =>'Hautes-Alpes',6 =>'Alpes-Maritimes',7 =>'Ardèche
', 8=>'Ardennes',9 =>'Ariège',10 =>'Aube',11 =>'Bouches-du-Rhône',12 =>'Calvados',13 =>'Dordogne',14 =>'Haute-Garonne');
foreach ($departements as $x => $x_value) {
	echo "Key=" . $x . ", Value=" . $x_value;
	echo "<br>";
}

    ?>
</body>
</html>
