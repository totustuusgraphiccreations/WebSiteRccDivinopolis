<?php
header("Content-Type: text/html; charset=pt_BR.UTF-8",true);
class ConnectionDB {

	private $_host = "mysql.rccdivinopolis.com.br";
	private $_username = "rccdivinopolis";
	private $_password = "fogo.2019";
	private $_database = "bdrccdivinopolis";

        public function connect(){

            //$this->dbCon means reference the variable within this class called mysqli
            $link = new mysqli($this->_host, $this->_username, $this->_password, $this->_database);            
            $link->set_charset("utf8");
			return $link;
        }

}
?>