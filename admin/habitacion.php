<?php include "View/navbar.php"?>
<main class="app-content">
    <div class="app-title">
         <div>
            <h1><i class="fa fa-dashboard"></i> Administrador</h1>
        </div>
    </div>
   <!--botón-->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">            
            <button id="btnNuevo" type="button" class="btn btn-info" data-toggle="modal">Nuevo</button>    
            </div>    
        </div>    
    </div>    
    <br>  
    
    <!--tabla-->
    <div class="container caja">
        <div class="row">
            <div class="col-lg-12">
            <div class="table-responsive">        
            <table id="tablahab" class="table table-striped table-bordered table-condensed" style="width:100%" >
                    <thead class="text-center">
                        <tr>
                            <th>idHabitación</th>
                            <th>Nombre</th>                   
                            <th>Descripción</th>  
                            <th>Precio</th>
                            <th>Imagen</th>
                            <th>Acciones</th> 
                        </tr>
                    </thead>
                    <tbody>                           
                    </tbody>        
                </table>                  
                             
            </div>
            </div>
        </div>  
    </div>   



</main>
<?php include "View/parte_inferior.php"?>