<?php

class Database {
    
    var $hostname = "xxx";
    var $username = "xxx";
    var $password = "xxx";
    var $bd =  "rapidotaxi";

    public function connect() {
        mysql_connect($this->hostname, $this->username, $this->password);
        mysql_select_db($this->bd) or die(mysql_error());
    }

    public function desconnect() {
        mysql_close();
    }
    
}

?>
