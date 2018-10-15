<?php
if ($_POST) {
    $distancia = $_POST['distancia'];
    $autonomia = $_POST['autonomia'];
    
    if( is_numeric($distancia) && is_numeric($autonomia)) {

        if( $distancia > 0 && $autonomia > 0) {
        
            $valorGasolina = 4.80;
            $valorDiesel = 3.90;
            $valorAlcool = 3.80;

            $calculoGasolina = ( $distancia / $autonomia ) * $valorGasolina;
            $calculoGasolina = number_format($calculoGasolina, 2, ',', '.');

            $calculoDiesel = ( $distancia / $autonomia ) * $valorDiesel;
            $calculoDiesel = number_format($calculoDiesel, 2, ',', '.');

            $calculoAlcool = ( $distancia / $autonomia ) * $valorAlcool;
            $calculoAlcool = number_format($calculoAlcool, 2, ',', '.');

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