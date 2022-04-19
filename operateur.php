<?php

/**
 * Les operateurs
 */

 /**
  * Calculs
  */
$one= 10;
$two= 20;

var_dump($one + $two);
var_dump($one - $two);
var_dump($one * $two);
var_dump($one / $two);
var_dump($one % $two);
var_dump($one ** $two);//puissance


/**
 * incrementation & décrémentation
 */
// post-incrementation
var_dump($one++,$one);

//post-decrementation
var_dump($two--,$two);

// pre-incrementation
var_dump(++$one);

// pre-decrementation
var_dump(--$two);


/**
 * comaparaison
 */
// egal à ...
var_dump($one==$two);



// Different de ...
var_dump($one != $two);

//strictement different de ...
var_dump($one !== $two);

//superieur à...

var_dump($one>= $two);

//inferieur à ...
var_dump($on<$two);

//inferieur ou egal à ...
var_dump($one<= $two);

//** logique
// condition OU condition

var_dump($one === $two || $one < $two);

// condition ET condition
var_dump($one === $two && $one < $two);

//Operateur de logique inversé (!)
var_dump(!false);

/**
 * *coalescence nulle
 * 
  */

  $var=null;
  $autreVariable=12;

  $resultat = $var ?? 'je suis recupéré';
  var_dump($resultat);

  $resultat = $autreVariable ?? 56;
  var_dump($resultat);


?>