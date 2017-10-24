<?php

function sklonen($number, $titles) {
  $cases = array (2, 0, 1, 1, 1, 2);
  return $titles[ ($number%100>4 && $number%100<20)? 2 :
  $cases[min($number%10, 5)] ];
}

 $i = $number;
 for ($i=0; $i <=30; $i++) {
   echo '</br>'. "$i" . sklonen($i,['год', 'года', 'лет']);
 }
