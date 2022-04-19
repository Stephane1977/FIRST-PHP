<?php

/**
 * les conditions
 * if (condition) { ... }
 * if (condition) { ... } else { ... }
 * if (condition) { ... } elseif (condition) { ... } else { ... }
 * 
 * 
 */


/**if */
 $nombre = 100;

 if ($nombre !== 12) {

    echo'il est différent de 12';
 }

 /** if (condition {...} elese { ... } */

 if ($nombre===12) {

    echo 'il est strictement egale de 12';

 }

 else {

    echo 'il ne vaut pas 12';
 }


 // if else, else if

 if ($nombre<200){

    echo 'il est inferieur à 200';
 }

 elseif ($nombre === 1000) {
     echo 'il est strictement à 100! bravo';

 }

 else {
     echo 'rien ve va ...';
 }

 /**
  * switch

  * verifie seulement l'egalité d'une variable à une valeur
  */
$prenom = 'stephane';


  switch ($prenom) {
      case 'juliette':
        echo "hello $prenom!";
        break; // arrête le switch
    
        case 'jean':
            echo "hello $prenom!";
            break; // arrête le switch

        case 'guillaume':
            echo "hey $prenom!";
             break; // arrête le switch
    
        default :
        echo ' t\'es qui ?';       

  }
 
