<!DOCTYPE HTML>
<html>
    <body>
    <?php
    $a = 0 ; 
    $b = rand(1,100) ;
    for ( $a = 0 ; 
      $a <=20;
      $a++ ) {
          $resultat = $a*$b ; 
          echo $resultat . "<br>" ; 
      }
?>

    </body>
</html>