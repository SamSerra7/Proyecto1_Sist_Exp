<?php

class accountStatus_model {
        private $db;
        private $accountStatus;
        
        public function __construct() {
            
            require_once('connect.php');
            $this->db = Connect::conection();
            $this->accountStatus = array();
            
        }
        
        public function accountStatus($userId, $savingAccount){
            
          
            $query  = $this->db->query("CALL estadoCuentaCliente(:userId, :savingAccount)");
            
            while($rows = $query->fetch(PDO::FETCH_ASSOC)){
                $this->accountStatus[] = $rows;
            }
            
            return $this->accountStatus;
        }
}
