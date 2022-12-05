<?php include "View/navbar.php"?>
    
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-pie-chart"></i> Cliente</h1>
        </div>
        
       
        <!-- FIN TABLAS-->
      </div>
       <!--TABLAS-->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">            
            <button id="btnNuevo" type="button" class="btn btn-info" data-toggle="modal">Nuevo Cliente</button>    
            </div>    
        </div>    
    </div>    
    <br>  

    <div class="container caja">
        <div class="row">
            <div class="col-lg-12">
            <div class="table-responsive">        
                <table id="tablacliente" class="table table-striped table-bordered table-condensed" style="width:100%" >
                    <thead class="text-center">
                        <tr>
                            <th>idcliente</th>
                            <th>Nombre-Apellido</th>                               
                            <th>Dirección</th>  
                            <th>Provincia</th>
                            <th>Pais</th>
                            <th>Telefono</th>
                            <th>E-mail</th>
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

<!--Modal para CRUD-->
<div class="modal fade" id="modalCRUD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
        <form id="formcliente">    
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6">
                    <div class="form-group">
                    <label for="" class="col-form-label">Nombre:</label>
                    <input type="text" class="form-control" id="nombre">
                    </div>
                    </div>
                <div class="row"> 
                    <div class="col-lg-6">
                    <div class="form-group">
                    <label for="" class="col-form-label">Dirección</label>
                    <input type="text" class="form-control" id="direccion">
                    </div>               
                    </div>
                    <div class="col-lg-6">
                    <div class="form-group">
                    <label for="" class="col-form-label">Provincia</label>
                    <input type="text" class="form-control" id="provincia">
                    </div>
                    </div>  
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                        <label for="" class="col-form-label">Pais</label>
                        <input type="text" class="form-control" id="pais">
                        </div>
                    </div>    
                    <div class="col-lg-6">    
                        <div class="form-group">
                        <label for="" class="col-form-label">Teléfono</label>
                        <input type="text" class="form-control" id="telefono">
                        </div>            
                    </div>    
                </div>     
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                        <label for="" class="col-form-label">E-mail</label>
                        <input type="text" class="form-control" id="email">
                        </div>
                    </div>

                </div>           
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                <button type="submit" id="btnGuardar" class="btn btn-dark">Guardar</button>
            </div>
        </form>    
        </div>
    </div>
</div>  
      <!-- FIN TABLAS-->


 </main>
     
    
      

    <?php include "View/parte_inferior.php"?>
     


