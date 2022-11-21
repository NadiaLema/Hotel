$(document).ready(function() {
    var idcliente, opcion;
    opcion = 4;
        
    tablacliente = $('#tablacliente').DataTable({  
        "ajax":{            
            "url": "crudcliente.php", 
            "method": 'POST', //usamos el metodo POST
            "data":{opcion:opcion}, //enviamos opcion 4 para que haga un SELECT
            "dataSrc":""
        },
        "columns":[
            {"data": "idcliente"},
            {"data": "nombre"},
            {"data": "apellido"},
            {"data": "direccion"},
            {"data": "provincia"},
            {"data": "pais"},
            {"data": "telefono"},
            {"data": "email"},
             //botones que se crean dinamicamente para editar y eliminar por cada registro 
            {"defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-primary btn-sm btnEditar'>Editar</button><button class='btn btn-danger btn-sm btnBorrar'>Eliminar</button></div></div>"}
        ]
    });     
    
    var fila; //captura la fila, para editar o eliminar
    //submit para el Alta y Actualización
    $('#formcliente').submit(function(e){                         
        e.preventDefault(); //evita el comportambiento normal del submit, es decir, recarga total de la página
        nombre = $.trim($('#nombre').val());    
        apellido = $.trim($('#apellido').val());
        direccion = $.trim($('#direccion').val());    
        provincia = $.trim($('#provincia').val());    
        pais = $.trim($('#pais').val());
        telefono = $.trim($('#telefono').val());   
        email = $.trim($('#email').val());                      
            $.ajax({
              url: "crudcliente.php",
              type: "POST",
              datatype:"json",    
              data:  {idcliente:idcliente, nombre:nombre, apellido:apellido, direccion:direccion, provincia:provincia, pais:pais ,telefono:telefono , email:email, opcion:opcion},    
              success: function(data) {
                tablacliente.ajax.reload(null, false);
               }
            });			        
        $('#modalCRUD').modal('hide');											     			
    });
            
     
    
    //para limpiar los campos antes de dar de Alta una Persona
    $("#btnNuevo").click(function(){
        opcion = 1; //alta           
        idcliente=null;
        $("#formcliente").trigger("reset");
        $(".modal-header").css( "background-color", "#17a2b8");
        $(".modal-header").css( "color", "white" );
        $(".modal-title").text("Alta de Usuario");
        $('#modalCRUD').modal('show');	    
    });
    
    //Editar        
    $(document).on("click", ".btnEditar", function(){		        
        opcion = 2;//editar
        fila = $(this).closest("tr");	        
        idcliente = parseInt(fila.find('td:eq(0)').text()); //capturo el ID		            
        nombre = fila.find('td:eq(1)').text();
        apellido = fila.find('td:eq(2)').text();
        direccion = fila.find('td:eq(3)').text();
        provincia = fila.find('td:eq(4)').text();
        pais = fila.find('td:eq(5)').text();
        telefono = fila.find('td:eq(6)').text();
        email = fila.find('td:eq(7)').text();
        $("#nombre").val(nombre);
        $("#apellido").val(apellido);
        $("#direccion").val(direccion);
        $("#provincia").val(provincia);
        $("#pais").val(pais);
        $("#telefono").val(telefono);
        $("#email").val(email);
        $(".modal-header").css("background-color", "#007bff");
        $(".modal-header").css("color", "white" );
        $(".modal-title").text("Editar Usuario");		
        $('#modalCRUD').modal('show');		   
    });
    
    //Borrar
    $(document).on("click", ".btnBorrar", function(){
        fila = $(this);           
        idcliente = parseInt($(this).closest('tr').find('td:eq(0)').text()) ;		
        opcion = 3; //eliminar        
        var respuesta = confirm("¿Está seguro de borrar el registro "+idcliente+"?");                
        if (respuesta) {            
            $.ajax({
              url: "crudcliente.php",
              type: "POST",
              datatype:"json",    
              data:  {opcion:opcion, idcliente:idcliente},    
              success: function() {
                  tablacliente.row(fila.parents('tr')).remove().draw();                  
               }
            });	
        }
     });
         
    });    

   