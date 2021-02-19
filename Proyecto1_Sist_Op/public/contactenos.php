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
                <h3 class="searchFont">CONTÁCTENOS</h3>
                <form name="final" method="post">
                    
                    <div style="background-color:#FFFFFF; width: 100%; border-radius: 15px;">
                        <h4> <center>Sugerencias</center></h4>
                    </div>
                    
                    <textarea style="border-radius: 15px; width: 100%;" id="sugerencia_texto" name="sugerencia_texto" rows="8" ></textarea>
    
                    <br>
                    <div class="form-group">
                        <a style="transform: translateX(-50%); margin-left: 50%; background-color:#866262; color:#FFFFFF" class="open-my-modal btn btn-success"
                                                    name="submit"
                                                    value="Enviar"
                                                    type="submit"
                                                    data-toggle="modal" 
                                                    data-target="#tripModal"
                                                    
                                                >
                                               <h5> Enviar </h5>
                        </a>
                        
                    </div>
        
                    <br>
                    <br>

                    <div style="background-color:#FFFFFF; width: 100%; border-radius: 15px;">
                        <h4> <center>Correo electrónico</center></h4>
                    </div>
                    <br>

                    <div style="background-color:#FFFFFF; width: 100%; border-radius: 15px;">
                        <h5> <center>contacto@findtrip.com</center></h5>
                    </div>

                </form>
            </div>
        </div> 
    </div> 

    
    <!-- Modal -->
    <div class="modal fade" id="tripModal"  aria-labelledby="triplabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered" role="document" id="mdialTamanio">
            <div class="modal-content">
                <div class="modal-body">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                        <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                    </svg>
                    <h6> <center><b>La sugerencia fue enviada con éxito </b></center> </h6> 
                </div>
                    </div>
            </div>
        </div>
    </div>
            <!-- End modal -->
</body>

<?php 
    include("../public/footer.php"); 
?>



