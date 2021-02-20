<?php

    class Trip_model{
        

        
        public function add_trip(
                                    $name,$price,$direction,$staying,$tourism_type_id,$img,
                                    $phone,$latitude,$longitude,$img2,$img3,$video,$description,
                                    $maps_link,$category,$internet,$security
                                ){
            try{
                require_once '../configuration/config.php';
                $sql = "INSERT INTO trip ($name,$price,$direction,$staying,$tourism_type_id,$img,
                                        $phone,$latitude,$longitude,$img2,$img3,$video,$description,
                                        $maps_link,$category,$internet,$security)
                        VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
                $query = $pdo -> prepare($sql);
                $query -> execute([ 
                                    $name,$price,$direction,$staying,$tourism_type_id,$img,
                                    $phone,$latitude,$longitude,$img2,$img3,$video,$description,
                                    $maps_link,$category,$internet,$security
                                ]);

                header("Location:../admin/trip/show.php");
            } 
            catch (Exception $e) {
                die("Error: " . $e -> getMessage());
            }
        }
        
        public function delete_trip($id){
          
            require_once '../configuration/config.php';
            $sql = 'DELETE FROM trip WHERE id = :id';

            $stmt = $pdo->prepare($sql);
            $stmt -> bindValue(':id', $id);
            $stmt -> execute();
            ?>
            <div class="alert alert-success" role="alert">
                Destino eliminado
            </div>
            <script> location.href = "../admin/trip/show.php"; </script>
            <?php
           
            
        }
        
        
        public function edit_trip(
                                    $name,$price,$direction,$staying,$tourism_type_id,$img,
                                    $phone,$latitude,$longitude,$img2,$img3,$video,$description,
                                    $maps_link,$category,$internet,$security,$id
                                ){

            require_once '../configuration/config.php';
            $sql = "UPDATE trip SET name=?, price=?,direction=?,staying=?,tourism_type_id=?,img=?,phone=?,
                                    latitude=?,longitude=?,img2=?,img3=?,video=?,description=?,maps_link=?,
                                    category=?,internet=?,security=? WHERE id=?";
            $stmt= $pdo->prepare($sql);
            $stmt->execute([
                                $name,$price,$direction,$staying,$tourism_type_id,$img,
                                $phone,$latitude,$longitude,$img2,$img3,$video,$description,
                                $maps_link,$category,$internet,$security,$id
                            ]);
            
            header("Location:../admin/trip/show.php");
        }
    }