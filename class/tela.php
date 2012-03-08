<?php

class Tela {
    
    
    public function mostraResultado($objPercurso) {
              
        # Retorna todos os caminhos do percurso, atualizando o objeto objPercurso
        $objCalcula = new Calcula();
        $objCalcula->calcularCaminhos($objPercurso);
        
        # Acha o menor caminho para ser mostrado na tela
        $objMenorCaminho = $objCalcula->menorCaminho($objPercurso);
        
        echo '<div class="texto_lugar">Distância '.$objMenorCaminho->{'distancia'}.' km (aprox. '.$objMenorCaminho->{'tempo'}.' min)</div>';
        echo '<div class="texto_lugar">Bandeira 1 aprox. R$ '.ceil($objMenorCaminho->getBandeira1()).',00<br>Bandeira 2 aprox. R$ '.ceil($objMenorCaminho->getBandeira2()).',00</div>';
        echo '<div class="texto_lugar">Detalhes do trajeto</div>';
        echo '<div id="caminhos">';
        echo '<br>';
        $count = 1;
        foreach($objMenorCaminho->{'caminho'} as $caminho) {
            if($caminho == "") {
                next($objMenorCaminho->{'caminho'});
            } else {
                echo $count.". ".$caminho."<br>";
                $count++;
            }
        }
        echo '</div>';
        
    }
    
    
}

?>
