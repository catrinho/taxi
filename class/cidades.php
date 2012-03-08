<?php

class Cidades {
    
    var $query;
    var $total;
    var $data;    
    
    public function comboCidades() {
        
        $bd = new Database();
        $bd->connect();
        
        $this->query = mysql_query("SELECT * FROM tarifa ORDER by cidade");
        $this->total = mysql_num_rows($this->query);
        
        if($this->total == "") {
            echo "Não existe tarifa cadastrada.";
        } else {
            echo '<option>Escolha uma cidade</opton>';
            while($this->data = mysql_fetch_array($this->query)) {
                echo '<option value='.$this->data['id'].'>'.$this->data['cidade'].'</option>';
            }
        }
        
    }
    
    public function tarifaCidade($idCidade) {
        
        $bd = new Database();
        $bd->connect();
        
        $this->query = mysql_query("SELECT * FROM tarifa WHERE id = '$idCidade'");
        $this->total = mysql_num_rows($this->query);
        
        if($this->total == "") {
            echo "Não existe essa cidade cadastrada.";
        } else {
            return mysql_fetch_array($this->query);
        }    
        
    }
    
}

?>
