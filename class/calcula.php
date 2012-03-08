<?php

class Calcula {

    var $totalCaminhos;
    var $caminhos;
    
    public function calcularCaminhos($percurso) {
        
        # Tarifa da cidade
        $objCidade = new Cidades();
        $tarifaCidade = $objCidade->tarifaCidade($percurso->getIdCidade());
        $bandeirada = $tarifaCidade['bandeirada'];
        $b1_km = $tarifaCidade['b1_km'];
        $b2_km = $tarifaCidade['b2_km'];
        
        $origem = $percurso->getOrigem();
        $destino = $percurso->getDestino();
        
        $xml = simplexml_load_file("http://maps.google.com/maps/api/directions/xml?origin=$origem&destination=$destino&sensor=false&mode=driving&alternatives=true&language=pt-BR");
        $this->totalCaminhos = count($xml->children())-1;

        foreach ($xml->{'route'} as $child) {
            
            $objCaminho = new Caminhos();
            $objCaminho->setTempo(ceil($child->{'leg'}->{'duration'}->{'value'}/60));
            $objCaminho->setDistancia($child->{'leg'}->{'distance'}->{'value'}/1000);
            $objCaminho->setBandeira1(($objCaminho->getDistancia()*$b1_km)+$bandeirada);
            $objCaminho->setBandeira2(($objCaminho->getDistancia()*$b2_km)+$bandeirada);
            
            foreach ($child->{'leg'}->{'step'} as $step) {
                $objCaminho->setCaminho($step->{'html_instructions'});
            }
            
            $percurso->setCaminhos($objCaminho);
            $percurso->setTotalCaminhos($this->totalCaminhos);
            
        }
       
        return $percurso;
        
    }
    
    public function menorCaminho($percurso) {
        
        $this->caminhos[] = $percurso->getCaminhos();
        
        $caminhoMenor = 100000;
        $idMenor = 100;
        for($i = 1 ; $i <= $percurso->getTotalCaminhos() ; $i++) {
            
            if($this->caminhos[0][$i]->{'distancia'} < $caminhoMenor) {
                $caminhoMenor = $this->caminhos[0][$i]->{'distancia'};
                $idMenor = $i;
            }
                
        }
             
        return $this->caminhos[0][$idMenor];
        
    }
        
}

?>
