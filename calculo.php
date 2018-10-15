<?php

$distancia = $_POST['distancia'];
$autonomia = $_POST['autonomia'];

$valorGasolina = 4.80;
$valorDiesel = 3.80;
$valorAlcool = 3.90;

$calculoGasolina = ( $distancia / $autonomia ) * $valorGasolina;
$calculoDiesel = ( $distancia / $autonomia ) * $valorDiesel;
$calculoAlcool = ( $distancia / $autonomia ) * $valorAlcool;

echo "<p> O valor do consume de Gasolina é R$ " .$calculoGasolina ."</p>";
echo "<p> O valor do consume de Alcool é R$ " .$calculoAlcool ."</p>";
echo "<p> O valor do consume de Diesel é R$ " .$calculoDiesel ."</p>";
