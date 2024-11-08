<h1>POO Gestion de livres</h1>

<?php

spl_autoload_register(function ($class_name) {
    require 'classes/'. $class_name . '.php';
});

$stephenKing = new Auteur("King", "Stephen");

$ca = new Livre("Ca", "1986", "1138", "20", $stephenKing);
$simetierre = new Livre("Simetierre", "1983", "374", "15", $stephenKing);
$lefleau = new Livre("Le Fléau", "1978", "823", "14", $stephenKing);
$shining = new Livre("Shining", "1977", "447", "16", $stephenKing);

// echo "Livre de ".$stephenKing."<br>";
// echo $ca."<br>";
// echo $simetierre."<br>";
// echo $lefleau."<br>";
// echo $shining."<br>";

echo $stephenKing->afficherBibliographie();
