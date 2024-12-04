<?php

// $string = file_get_contents("dictionnaire.txt", FILE_USE_INCLUDE_PATH);
// $dico = explode("\n", $string);

// print_r(count($dico));
// Combien de mots contient ce dictionnaire ? 336532
//Combien de mots font exactement 15 caractères ?  20259
//Combien de mots contiennent la lettre « w » ? 537
//Combien de mots finissent par la lettre « q » ? 10


// $result = 0;
// foreach ($dico as  $value) {

//     if (strlen($value) === 15) {
//         $result = $result + 1;
//     }
// }
// echo "il y a {$result} <br>";

// $result = 0;
// $findme   = 'w';
// foreach ($dico as  $value) {

//     if (str_contains( $value, $findme)) {
//         $result = $result + 1;
//     }
// }
// echo "il y a {$result} <br>";


// $result = 0;
// $findme   = 'q';
// foreach ($dico as  $value) {
//     if ($value[mb_strlen($value) - 1] === "q") {
//         $result = $result + 1;
//     }
// }
// echo "il y a {$result} <br>";


$string = file_get_contents("films.json", FILE_USE_INCLUDE_PATH);
$brut = json_decode($string, true);
$top = $brut["feed"]["entry"]; # liste de films


// Afficher le top10 des films sous cette forme :

foreach ($top as $key => $value) {
//   var_dump($value['im:name'] []);
    $title = ($value['im:name'] ["label"]);
   
echo $key+1 . " ". $title . "<br>";
    if($key === 9){
        break;
    }
}