<?php


require 'Personnes.php';

$p1 = new Personnes('Phil');
$p1->age = 48;
$p1->prenom = 'Jean';
$p1->adresse = '45 rue zert';
$p1->ville = 'NANCY';
$p1->code_postal = '54000';
$p1->mail = 'Jean.Phil@gmail.com';
$p1->tel = '03.83.00.00.01';
$p1->IdSk = 'JeanPhil';
echo "$p1<p>";


$p2 = new Personnes('Hegg');
$p2->age = 44;
$p2->prenom = 'Max';
$p2->adresse = '33 rue pouz';
$p2->ville = 'NANCY';
$p2->code_postal = '54000';
$p2->mail = 'Max.Hegg@gmail.com';
$p2->tel = '03.83.00.00.02';
$p2->IdSk = 'MaxHegg';
echo $p2;

?>
