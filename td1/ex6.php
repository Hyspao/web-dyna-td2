<?php
include "include/header.php";
include "include/fonctions.php";

$elms=[
      ["titre"=>"Exercices","contenu"=>"exercices disponibles"],
      ["titre"=>"Exercice 1","contenu"=>"fonction","niveau"=>2],
      ["titre"=>"Exercice 2","contenu"=>"tableau","niveau"=>2]
];

echo parseElements($elms);

include "include/footer.php";
?>
