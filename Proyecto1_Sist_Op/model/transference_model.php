<?php

class transference_model {
    
        private $db;
        private $transference;
        
        public function __construct() {
            
            require_once('connect.php');
            $this->db = Connect::conection();
            $this->transference = array();
            
        }
        
        
         public function transference($savingAccountSource, $receptorAccount, $monto, $userId, $description){
            
            $query  = "CALL transferencia(:savingAccountSource, :receptorAccount, :monto, :userId, :description)";
                $result = $this->db->prepare($query);
                $result->execute(array(":savingAccountSource"=>$savingAccountSource, ":receptorAccount"=>$receptorAccount, ":monto"=>$monto, ":userId"=>$userId, ":description"=>$description));
                $result->closeCursor();
            return $this->transference;
        }
}