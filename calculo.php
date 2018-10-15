<?php
if ($_POST) {
    $distancia = $_POST['distancia'];
    $autonomia = $_POST['autonomia'];
    
    if( is_numeric($distancia) && is_numeric($autonomia)) {

        if( $distancia > 0 && $autonomia > 0) {
        
            $valorGasolina = 4.80;
            $valorDiesel = 3.80;
            $valorAlcool = 3.90;

            $calculoGasolina = ( $distancia / $autonomia ) * $valorGasolina;
            $calculoDiesel = ( $distancia / $autonomia ) * $valorDiesel;
            $calculoAlcool = ( $distancia / $autonomia ) * $valorAlcool;

            echo "<p> O valor do consume de Gasolina é R$ " .$calculoGasolina ."</p>";
            echo "<p> O valor do consume de Alcool é R$ " .$calculoAlcool ."</p>";
            echo "<p> O valor do consume de Diesel é R$ " .$calculoDiesel ."</p>";

        }else {
            echo "O valor da distância e da autonomia devem ser maior que Zero! ";
        }
    }else {
        echo "O valor digitado não é númerico.";
    }
} else {
    echo "Nenhum dado recebido do Fórmulario.";
}