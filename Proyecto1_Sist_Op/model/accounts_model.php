<?php

class account_model {
     private $db;
        private $account;
        
        public function __construct() {
            
            require_once('connect.php');
            $this->db = Connect::conection();
            $this->account = array();
            
        }
        
        
        public function getSA() {
            $query  = $this->db->query("SELECT MAX(savingAccount) AS savingAccount FROM Account");
            $savingAccount = $query->getAttribute("savingAccount");
            return $savingAccount;
        }
        
        
        public function get_all_accounts(){
            
            $query  = $this->db->query("CALL listaCuentasCliente()");
            
            while($rows = $query->fetch(PDO::FETCH_ASSOC)){
                $this->account[] = $rows;
            }
            
            return $this->account;
        }

         public function insert_account($customerId,$currencyType,$customerAccount){
            try{
                $query = "CALL registrarCuenta(:currencyType,:customerAccount) ";
                $result = $this->db->prepare($query);
                $result->execute(array(":currencyType"=>$currencyType, ":customerAccount"=>$customerAccount ));
                $result->closeCursor();
                
                $query2 = "CALL has(:customerId )";
                $result2 = $this->db->prepare($query2);
                $result2->execute(array(":customerId"=>$customerId));
                $result2->closeCursor();


                return '<h1>Registro Insertado</h1>';
            } 
            catch (Exception $e) {
                die("Error: " . $e->getMessage());
            }
        }
        
        
        public function delete_account($savingAccount){
          
            $query = "CALL eliminarCuenta(:savingAccount)";
            $result = $this->db->prepare($query);
            $result->execute(array("savingAccount"=>$savingAccount));
            $result->closeCursor();
            header("Location:../view/consultAccount.php");
            
        }
        
}