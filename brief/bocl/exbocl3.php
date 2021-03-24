<!DOCTYPE HTML>
<html>
    <body>
    <?php 
    $a = 100 ; 
    $b = rand(1,100) ;
    for ( $a = 100 ; 
      $a > 10;
      $a-- ) {
          $resultat = $a*$b ; 
          echo $resultat . "<br>" ; 
      }
?>
    </body>
</html>