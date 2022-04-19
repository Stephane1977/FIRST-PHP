
<?php

/**boucles
*/

$penom ='henry';
$client= [
    'prenom' =>'Guillaume',
    'nom'=> 'bouyer',
    'age' => 40,
    'newletter'=> false

];


$clients =[
    ['id' =>1,'nom'=>'Bouyer', 'prenom'=> 'Guillaume'],
    ['id'=>2, 'nom'=>'Doe', 'prenom'=>'John']
    
];

//while..

$index = 0;
echo '<ul>';
while ($index<=10){

    echo "<li>$index</li>";
    $index++;
}

echo '</ul>';


//do..while
$i=0;
do{
    echo "<p>$i</p>";
    $i++;
} while($i <=10);

//for

$phrase=null;
for($index = 0; $index <=5; $index++){

    // concatene l'index à la variable phrase
    $phrase .=$index;
    // si l'index est inferieur à 5..
    if ($index <5){

        // on concatene une virgule

        $phrase .= ',';
    }
    
}

echo $phrase;
echo '<hr>';


$numeros= [12,5,68,43,6,3];


for($i = 0; $i< count($numeros); $i++) {

    echo $numeros[$i] .',';
}

echo '<hr>';
// foreach

foreach($numeros as $item) {

    echo "$item;";
}

echo '<hr>';

foreach($numeros as $item =>$value) {

    echo "$item: $value -";
}

echo '<hr>';

foreach($clients as $client) {
 echo"{$client['nom']}, {$client['prenom']}";

}