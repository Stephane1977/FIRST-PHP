<?php

/**
 * les tableaux
 */
// tableau indexé ou numéroté
//$tableau = array();
 $tableau = ['bonjour',23,true, 34.5];

 echo $tableau [3];
echo $tableau [0];

echo "<p>$tableau[0] Bonjour Guillaume, vous me devez $tableau[3]</p>";

echo'<pre>';
var_dump($tableau);
echo'</pre>';

// Tableau associatif
$penom ='henry';
$client= [
    'prenom' =>'Guillaume',
    'nom'=> 'bouyer',
    'age' => 40

];

echo $client ['prenom'];

// tableau multidimentionnel


echo $clients[1]['nom'];