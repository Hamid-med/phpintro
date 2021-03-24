<!doctype html>
<html>
<body>
<?php
function ex4(int $x, int $y) : string {
    if ($x < $y) {
        return "$x plus petit que $y";
    }
    if ($x > $y) {
        return "$x plus grand que $y";
    }
    if($x==$y){
    return "$x égal à $y";}
}
echo ex4(45,63);
echo'</br>';
echo ex4(63,45);
echo'</br>';
echo ex4(63,63);

?>
</body>
</html>