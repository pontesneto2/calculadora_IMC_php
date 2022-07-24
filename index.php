<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora IMC</title>
</head>
<body>
    <div>
        <p><b>O seu IMC é aproximadamente:</b></p>
            <?php
                $altura = 1.80;
                $peso = 80;
                $imc = $peso / ($altura * $altura);
                $faixa = "";
                
                if($imc < 18.5){
                    $faixa = "Magreza";
                }else if($imc >= 18.5 && $imc < 25){
                    $faixa = "Normal";
                }else if($imc >= 25 && $imc < 30){
                    $faixa = "Sobrepeso";
                }else {
                    $faixa = "Obesidade";
                }

                echo "<b>$imc,"."</b>";
                echo "<br/>";
                echo "E seu peso tem o padrão: ", $faixa,".";
            ?>
    </div>

</body>
</html>