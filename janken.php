<?php
define("PIERRE", 0);
define("CISEAUX", 1);
define("FEUILLE", 2);

function jaken() {

     echo "Pierre = 0 / Ciseaux = 1 / Feuille = 2" . "\n";
     $choix = readline();
     $r = mt_rand(0, 2);

     echo "Vous avez joué : ";
     switch ($choix) {
          case PIERRE :
               echo "Pierre\n";
               break;
          case CISEAUX :
               echo "Ciseaux\n";
               break;
          case FEUILLE :
               echo "Feuille\n";
               break;
          default :
               echo "Autre chose " . $r . "\n";
     }

     echo "L'ordinateur a joué : ";
     switch ($r) {
          case PIERRE :
               echo "Pierre\n";
               break;
          case CISEAUX :
               echo "Ciseaux\n";
               break;
          case FEUILLE :
               echo "Feuille\n";
               break;
          default :
               echo "Autre chose " . $r . "\n";
     }
     if($choix == $r) {
          echo "Egalité"."\n";
     }
     elseif(($choix == PIERRE and $r == CISEAUX) or ($choix == CISEAUX and $r == FEUILLE) or ($choix == FEUILLE and $r == PIERRE)) {
          echo "Vous gagnez"."\n";
     }
     else {
          echo "Vous perdez"."\n";
     }
     echo "Rejouer ? o/n";
     if(readline() == "o") {
          jaken();
     }
}
jaken();
