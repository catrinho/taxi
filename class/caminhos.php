<?php

class Caminhos {
    
    var $distancia;
    var $tempo;
    var $caminho;
    var $bandeira1;
    var $bandeira2;

    function __construct() {
        $this->caminho[] = "";
    }
   
    public function getDistancia() {
        return $this->distancia;
    }

    public function setDistancia($distancia) {
        $this->distancia = $distancia;
    }

    public function getTempo() {
        return $this->tempo;
    }

    public function setTempo($tempo) {
        $this->tempo = $tempo;
    }
    
    public function getCaminho() {
        return $this->caminho;
    }

    public function setCaminho($caminho) {
        array_push($this->caminho,$caminho);
    }
    
    public function getBandeira1() {
        return $this->bandeira1;
    }

    public function setBandeira1($bandeira1) {
        $this->bandeira1 = $bandeira1;
    }

    public function getBandeira2() {
        return $this->bandeira2;
    }

    public function setBandeira2($bandeira2) {
        $this->bandeira2 = $bandeira2;
    } 
    
}

?>
