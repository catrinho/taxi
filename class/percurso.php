<?php

class Percurso {
    
    var $origem;
    var $destino;
    var $idCidade;
    var $totalCaminhos;
    var $caminhos;
    
    public function __construct($origem,$destino,$idCidade) {
        $this->caminhos[] = "";
        $this->setOrigem($origem);
        $this->setDestino($destino);
        $this->setIdCidade($idCidade);
    }
    
    public function getOrigem() {
        return $this->origem;
    }

    public function setOrigem($origem) {
        $this->origem = $origem;
    }

    public function getDestino() {
        return $this->destino;
    }

    public function setDestino($destino) {
        $this->destino = $destino;
    }
    
    public function getCaminhos() {
        return $this->caminhos;
    }
    
    public function setCaminhos($objCaminho) {
        array_push($this->caminhos,$objCaminho);
    }
    
    public function getIdCidade() {
        return $this->idCidade;
    }

    public function setIdCidade($idCidade) {
        $this->idCidade = $idCidade;
    }
    
    public function getTotalCaminhos() {
        return $this->totalCaminhos;
    }

    public function setTotalCaminhos($totalCaminhos) {
        $this->totalCaminhos = $totalCaminhos;
    }

}

?>
