<?php 
session_start();


if(!isset($_SESSION['admin_session'])){
    header('Location: '.'../../../index.php');
}

include("../admin_nav.php"); 
?>

<html>

<head>

        <meta content="text/html; charset=UTF-8" http-equiv="content-type">
        <title>Find Trip</title>
        <link rel="stylesheet" type="text/css" href="../../public/css/styles.css">



</head>

<body>
        <br>
        <div class="container">
        <a href="../../admin/principal.php" style="color: white;"><< Volver al inicio</a>
                <div class="row">
                        <div class="column">
                                <br>
                                <br>
                                <h2>CONTROL DE ADMINISTRADORES</h2>
                                <br>
                        </div>
                        <?php
                        include_once '../../configuration/config.php';
                        $query = $pdo->prepare("SELECT * FROM `users` ");
                        $query->execute();
                        $users = $query->fetchAll(PDO::FETCH_ASSOC);      
                        
                        ?>
                        <div class="column">
                                <br>
                                <br>
                                <input type="text" id="searchInput" onkeyup="search()" placeholder="Buscar por nombre...">
                                <a href="add.php"><button type="button" class="btn btn-light" style="padding: 12px 20px 12px 40px;">Añadir</button></a>
                </div>
                <div class="table-responsive">
                        <table class="table table-hover" id="myTable">
                            <thead>
                                <tr class="table-light">
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellidos</th>
                                <th scope="col">Usuario</th>
                                <th scope="col">Email</th>
                                <th scope="col">Modificar</th>
                                <th scope="col">Eliminar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                foreach($users as $user){
                                
                                ?>
                                <tr class="table-light">
                                <th scope="row"><?php echo  $user['id']?></th>
                                <td><?php echo  $user['name']?></td>
                                <td><?php echo  $user['lastname']?></td>
                                <td><?php echo  $user['username']?></td>
                                <td><?php echo  $user['email']?></td>
                                <td><a href="edit.php?id=<?php echo $user['id'] ?>& 
                                name=<?php echo $user['name'] ?>&
                                lastname=<?php echo $user['lastname'] ?>&
                                username=<?php echo $user['username'] ?>&
                                email=<?php echo $user['email'] ?>&
                                phone=<?php echo $user['password'] ?>
                                "><img src="../../public/img/edit.png"></a></td>
                                <td><a id="link" class="open-my-modal" data-toggle="modal" data-target="#exampleModal"
                                data-id="<?php echo $user['id']?>"  
                                data-name="<?php echo $user['name']." ".$user['lastname'] ?>" 
                                data-email="<?php echo $user['email'] ?>" href="#exampleModal"><img src="../../public/img/delete.png"></a></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                </div>
        </div>
        <script>
        function search() {
                // Declare variables
                var input, filter, table, tr, td, i, txtValue;
                input = document.getElementById("searchInput");
                filter = input.value.toUpperCase();
                table = document.getElementById("myTable");
                tr = table.getElementsByTagName("tr");

                // Loop through all table rows, and hide those who don't match the search query
                for (i = 0; i < tr.length; i++) {
                        td = tr[i].getElementsByTagName("td")[0];
                if (td) {
                        txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                } else {
                        tr[i].style.display = "none";
                }
                }
                }
                }
        </script>

</body>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">INFORMACIÓN DE USUARIO</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
        </div>
        <div class="modal-body">
                <div class="row">
                        <div class="col-md-12">
                                <div class="form-group">
                                        <label>ID de Administrador</label>
                                        <div id='idUser'></div>
                                </div>
                                <div class="form-group">
                                        <label>Nombre</label>
                                        <div id='name'></div>
                                </div>
                                <div class="form-group">
                                        <label>Correo Electrónico</label>
                                        <div id='email'>
                                </div>
                            </div>
                        
                        </div>
                </div>
                <div id="response">
                </div>
                </div>
                <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-danger" id="btn_delete">Eliminar</button>
                        
                </div>
                </div>
                </div>
                </div>
        <!-- End modal -->
</html>
<script>
$(document).ready(function () {             
    $('.open-my-modal').click(function(){
        $('#idUser').html($(this).data('id'));
        $('#name').html($(this).data('name'));
        $('#email').html($(this).data('email'));

         // show Modal
         $('#exampleModal').modal('show');
    });
});
</script>

<script>
  $('#btn_delete').click(function(){
    var id = $('#idUser').text();
    var url='../../controller/delete_user.php';
    $.post(url, {id:id}, function(data){
      $('#response').html(data);
    });
  });
</script>