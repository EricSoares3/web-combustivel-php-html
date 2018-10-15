<?php
if ($_POST) {
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

    echo "<p>Valor da distâcia é: " .$distancia  ."</p>";
    echo "<p>Valor da autonomia é: " .$autonomia  ."</p>";
} else {
    echo "Nenhum dado recebido do Fórmulario.";
}