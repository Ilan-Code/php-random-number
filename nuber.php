<?php
$min = 0;
$max = 5;
 $test = rand($min,$max);

$chiffre = readline("entreter un chiffre entre $min et $max");
while ($test != $chiffre) {
 
$chiffre = readline('reconmence ');

  while ($chiffre > $max || $chiffre < $min) {
echo "le chiffre doit être compris entre $min et $max \n";
$chiffre = readline("reconmence \n ");
}


}




  echo "Bravo";
 ?>
