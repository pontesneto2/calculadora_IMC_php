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