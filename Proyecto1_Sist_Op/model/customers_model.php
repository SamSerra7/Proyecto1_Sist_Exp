<?php

    class Customers_model{
        
        private $db;
        private $customers;
        private $accountByCustomer;
        
        public function __construct() {
            
            require_once('connect.php');
            $this->db = Connect::conection();
            $this->customers = array();
            $this->accountByCustomer = array();
        }
        
        public function get_all_accounts_by_customer($id){
            $query  = $this->db->query("CALL cuentasPorCliente($id)");
             
            while($rows = $query->fetch(PDO::FETCH_ASSOC)){
                $this->accountByCustomer[] = $rows;
            }
            
            return $this->accountByCustomer;
        }
        
        
        public function get_all_customers(){
            
            $query  = $this->db->query("CALL listaClientes()");
            
            while($rows = $query->fetch(PDO::FETCH_ASSOC)){
                $this->customers[] = $rows;
            }
            
            return $this->customers;
        }
        
        public function insert_customer($id,$name,$mname,$lname,$slname,$province,$district,$canton,$zip,$dobirth){
            try{
                $query = "CALL registrarCliente(:id,:name,:mname,:lname,:slname,:province,:district,:canton,:zip,:dobirth)";
                $result = $this->db->prepare($query);
                $result->execute(array(":id"=>$id,":name"=>$name,":mname"=>$mname,":lname"=>$lname,
                                         ":slname"=>$slname,":province"=>$province,":district"=>$district,
                                            ":canton"=>$canton,":zip"=>$zip,":dobirth"=>$dobirth));
                $result->closeCursor();

                return '<h1>Registro Insertado</h1>';
            } 
            catch (Exception $e) {
                die("Error: " . $e->getMessage());
            }
        }
        
        public function delete_customer($id){
          
            $query = "CALL eliminarCliente(:id)";
            $result = $this->db->prepare($query);
            $result->execute(array(":id"=>$id));
            $result->closeCursor();
            header("Location:../view/consultUser.php");
            
        }
        
        
        public function update_customer($id,$name,$mname,$lname,$slname,$province,$district,$canton,$zip,$dobirth){
            $query = "CALL modificarCliente(:id,:name,:mname,:lname,:slname,:province,:district,:canton,:zip,:dobirth)";
            $result = $this->db->prepare($query);
            $result->execute(array(":id"=>$id,":name"=>$name,":mname"=>$mname,":lname"=>$lname,
                                         ":slname"=>$slname,":province"=>$province,":district"=>$district,
                                            ":canton"=>$canton,":zip"=>$zip,":dobirth"=>$dobirth));
            $result->closeCursor();
            
            header("Location:../view/consultUser.php");
        }
    }