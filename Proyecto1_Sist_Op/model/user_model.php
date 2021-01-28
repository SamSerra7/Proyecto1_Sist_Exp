<?php

    class Users_model{
        

        
        public function add_user($name, $lastname, $username, $email, $password){
            try{
                require_once '../configuration/config.php';
                $sql = "INSERT INTO users (name, lastname, username, email, password) VALUES (?,?,?,?,?)";
                $query= $pdo->prepare($sql);
                $query->execute([$name, $lastname, $username, $email, $password]);

                header("Location:../admin/show.php");
            } 
            catch (Exception $e) {
                die("Error: " . $e->getMessage());
            }
        }
        
        public function delete_user($id){
          
            require_once '../configuration/config.php';
            $sql = 'DELETE FROM users '
                . 'WHERE id = :id';

            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':id', $id);
            $stmt->execute();
            ?>
            <div class="alert alert-success" role="alert">
                Usuario eliminado
            </div>
            <script> location.href = "../admin/show.php"; </script>
            <?php
           
            
        }
        
        
        public function edit_user($id, $name, $lastname, $username, $email, $password){

            require_once '../configuration/config.php';
            $sql = "UPDATE users SET name=?, lastname=?, username=?, email=?, password=? WHERE id=?";
            $stmt= $pdo->prepare($sql);
            $stmt->execute([$name, $lastname, $username, $email, $password, $id]);
            
            header("Location:../admin/show.php");
        }
    }