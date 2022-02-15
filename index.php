<div>
    <p>O seu IMC está na faixa da: 
        <b>

            <?php 
            //IMC = peso / (altura x altura)
            $altura = 1.85;
            $peso = 77;
            $imc = $peso / ($altura * $altura);
            echo $imc;
            ?>
        </b>    
    </P>
</div>