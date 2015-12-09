<?php

function getFrenchDate($date){
  $dateExp = explode("-", $date);
  $dateFr = $dateExp[2].'/'.$dateExp[1].'/'.$dateExp[0];
  return $dateFr;
}

?>
