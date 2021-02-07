<?php

include("../public/nav.php");
?>

<html>

<head>

    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    <title>Find Trip</title>
    <link rel="stylesheet" type="text/css" href="../public/css/styles.css">

</head>

<body>
    <div style="padding-top: 1%;padding-left: 1%">
        <a href="../index.php" style="color: white;">
            << Volver al inicio</a>
    </div>
    <div class="header">
        <div class="one">
            <div class="container selects">
                <h3 class="searchFont">Búsqueda por criterios</h3>
                <br>
                <form name="final" action="../../controller/discover_trip.php" method="post">
                    <select name="direction">
                        <option value="Guanacaste">Guanacaste</option>
                        <option value="Puntarenas">Puntarenas</option>
                        <option value="Limón">Limón</option>
                        <option value="Heredia">Heredia</option>
                        <option value="Alajuela">Alajuela</option>
                        <option value="San José">San José</option>
                        <option value="Cartago">Cartago</option>
                    </select>
                    <br>
                    <select name="staying">
                        <option value="1">Visita rápida</option>
                        <option value="2">Visita Larga</option>
                    </select>
                    <br>
                    <select name="access">
                        <option value="Fácil">Fácil</option>
                        <option value="Regular">Regular</option>
                        <option value="Difícil">Difícil</option>
                    </select>
                    <div class="form-group">
                        <input value="DESCUBRIR" type="submit" name="submit" style= "width: 30%; margin: 1%;">
                </div>
                </form>
            </div>
        </div> 
        <div class="two">
            <div class="container">
                <h3 class="resultsFont"><?php if(isset($tourist_type)){echo $tourist_type;} ?></h3>
            </div>
            <?php 
                if(isset($trips)){
                    ?><h6>Descubre los siguientes lugares...</h6><?php
                    foreach($trips as $trip){        
            ?>
            <br>
            <div class="card">
                <div class="card-horizontal">
                    <img title=<?php echo  $trip['name']?> alt="Titulo" class="card-img-top imgDestino" src=<?php echo  $trip['img']?>>
                    <div class="card-body" >
                        <h5 align="center" class="card-title"> <b><?php echo  $trip['name']?></b></h5>
                            <p class="card-text">
                                <div class="row">
                                    <div class="col-6">
                                        <h6 align="center"> <b>Ubicacion: </b></h6>
                                        <h6 align="center"><?php echo  $trip['direction']?></h6>
                                    </div>
                                    <div class="col-6">
                                        <h6 align="center"> <b>Categoria:  </b>  </h6> 
                                        <h6 align="center"><?php echo  $trip['tourism_type_id']?></h6>
                                    </div>
                                </div>
                                <div class="row">
                                        <div class="col-6">
                                            <h6 align="center"> <b>Acceso: </b> </h6>
                                            <h6 align="center"><?php echo  $trip['access']?></h6>
                                        </div>
                                    <div class="col-6">
                                        <h6 align="center"> <b>Precio: </b> </h6>
                                        <h6 align="center"><?php echo  $trip['price']?></h6>
                                    
                                    </div>
                                </div>  
                            </p>
                            <a id="link" style="transform: translateX(-50%); margin-left: 50%;" class="open-my-modal
                                                name="btnAction"
                                                value="Agregar"
                                                type="submit"
                                                data-toggle="modal" 
                                                data-target="#tripModal"
                                                data-id="<?php echo $trip['tripId']?>"  
                                                data-name="<?php echo  $trip['name']?>"
                                                data-location="<?php echo  $trip['direction']?>"
                                                data-staying="<?php echo  $trip['staying']?>"  
                                                data-phone="<?php echo  $trip['phone']?>"
                                                data-img="<?php echo  $trip['img']?>"
                                                data-img2="<?php echo  $trip['img2']?>"
                                                data-img3="<?php echo  $trip['img3']?>"
                                                data-video="<?php echo  $trip['video']?>"
                                                data-description="<?php echo  $trip['description']?>"
                                                data-maps="<?php echo  $trip['maps_link']?>"


                                            >
                                            Visitar
                            </a>
                        </div>    
                    </div>
                </div>
            <?php } } ?>  
            </div>
            <br>
        </div>
    </div>

    <!-- Modal -->
<div class="modal fade" id="tripModal"  aria-labelledby="triplabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document" id="mdialTamanio">
        <div class="modal-content prueba">
            <div class="modal-body">
                <h4 align="center"><b><div id="name"></b></h4>
                    <div >
                        <div class="col-md-12 ">
                            
                            <div id="carouselExampleIndicators" class="carousel slide d" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                        </ol>
                                <div class="carousel-inner">
                                        <div class="carousel-item active">
                                        <img class="d-block w-100" id="img" height="445"; alt="First slide">
                                </div>
                                <div class="carousel-item">
                                        <img class="d-block w-100" id="img2" height="445" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                        <img class="d-block w-100" id="img3" height="445" alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                            </a>
                            </div>
                
                            
                        </div>
                       
                    </div>
                
                <div class="row infoColor"> 
                    <br>
                    
                    <div class="col-md-6 ">
                        
                            <h6> <b>Ubicacion: </b> <div id="location"> </h6> <br>
                            <h6> <b>Estadía:  </b><div id="staying">  </h6> <br>
                            <h6> <b>Contacto:  </b><div id="phone"></h6> 
                        
                    </div>

                    <div class="col-md-6 ">
                        <iframe id="maps" width="400" height="300" frameborder="5" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
                        </iframe>
                    </div>

                   
                    
                    <div class="col-md-12 ">
                        <br>
                        <hr>
                    
                        <h5 align="left"><b>Descripción</b></h5>

                        <div class="infoColor">
                            <h6 style=>
                            <div id="description">
                            </h6>
                        </div>
                    </div>
                    <iframe id="video" width="400" height="300" frameborder="5" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
                        </iframe>  
                        
                </div>
            </div>
                </div>
        </div>
    </div>
</div>
        <!-- End modal -->
</body>


<script>
$(document).ready(function () {             
    $('.open-my-modal').click(function(){
        $('#name').html($(this).data('name'));
        $('#location').html($(this).data('location'));
        $('#staying').html($(this).data('staying'));
        $('#phone').html($(this).data('phone'));
        $('#description').html($(this).data('description'));
        $('#img').attr('src',$(this).data('img'));
        $('#img2').attr('src',$(this).data('img2'));
        $('#img3').attr('src',$(this).data('img3'));
        $('#video').attr('src',$(this).data('video'));
        $('#maps').attr('src',$(this).data('maps'));

         // show Modal
         $('#tripModal').modal('show');
    });
});
</script>
