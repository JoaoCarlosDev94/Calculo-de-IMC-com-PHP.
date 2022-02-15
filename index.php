<div>
    <p>O seu IMC está na faixa : 
        <b>

            <?php 
            //IMC = peso / (altura x altura)
            $altura = 1.85;
            $peso = 77;
            $imc = $peso / ($altura * $altura);
            
            $faixa = "";

            if($imc <= 18.5) {
                $faixa = "Magreza";
            } else if ($imc >= 18.5 && $imc < 25){
                $faixa = "Normal";
            } else if ($imc >= 25 && $imc < 30){
                $faixa = "Sobrepeso";
            }else {
                $faixa = "Obesidade";
            }
            echo $faixa;
            ?>
        </b>    
    </P>
</div>