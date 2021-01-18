<?php

class depositWithdrawal_model {
        private $db;
        private $depositWithdrawal;
        
        public function __construct() {
            
            require_once('connect.php');
            $this->db = Connect::conection();
            $this->depositWithdrawal = array();
            
        }
        
        public function deposit($savingAccount, $monto, $userId, $description ){
            
            $query  = "CALL registrarDeposito(:savingAccount,:userId,:amount,:description)";
                $result = $this->db->prepare($query);
                $result->execute(array(":savingAccount"=>$savingAccount, ":amount"=>$monto ,":userId"=>$userId ,":description"=>$description));
                $result->closeCursor();
          
        }
        
        public function withdrawal($savingAccount, $monto, $userId ){
            
            $query  = "CALL registrarRetiro(:savingAccount, :monto, :userId)";
                $result = $this->db->prepare($query);
                $result->execute(array(":savingAccount"=>$savingAccount, ":monto"=>$monto,":userId"=>$userId));
                $result->closeCursor();
           
        }
}