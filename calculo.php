<?php
$mensagem = "";

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

            $mensagem.= "<p> O valor do consume de Gasolina é R$ " .$calculoGasolina ."</p>";
            $mensagem.= "<p> O valor do consume de Alcool é R$ " .$calculoAlcool ."</p>";
            $mensagem.= "<p> O valor do consume de Diesel é R$ " .$calculoDiesel ."</p>";

        }else {
            echo "O valor da distância e da autonomia devem ser maior que Zero! ";
        }
    }else {
        echo "O valor digitado não é númerico.";
    }
} else {
    echo "Nenhum dado recebido do Fórmulario.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">   
    <title>Calculo de Consumo de Combustível</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">   
</head>
<body>  
    <main>
        <div class="painel">
            <h2>Resultado do cálculo de consumo</h2>
            <div class="conteudo-painel"> 
                <?php
                echo $mensagem;
                ?>
                <a class="botao" href="index.php">Voltar</a>
            </div>            
        </div>  
    </main>  
</body>
</html>