<?php

  include 'etablissement.php';
  include 'Salle.php';

  $maSalle1 = new Salle((int)3000, 'Operation1');
  $maSalle2 = new Salle((int)3001, 'Operation2');
  $maSalle3 = new Salle((int)3002, 'Réunion');

  $mesSalles = array($maSalle1, $maSalle2, $maSalle3);

  //1 établissement : La Cavale Blanche
  $monEts= new etablissement((int)1885, 'La Cavale Blanche', $mesSalles);

  $compteur = 0;

  foreach ($monEts-> getmesSalles() as $uneSalle) {
    $compteur = $compteur + 1;
    echo "Salle ".$compteur.": ";
    print_r($uneSalle-> Sallenom);
    echo "\r\n";
}

?>
