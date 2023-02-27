$(document).ready(function(){
    $("#botonCrear").click(function(){
        $("#formulario")[0].reset();
        $(".modal-title").text("Crear Habitación");
        $("#action").val("Crear");
        $("#operacion").val("Crear");
        $("#imagen_subida").html("");
    });
    //estructura de plantilla de datatables
    var dataTable = $('#datos').DataTable({
        "processing":true,
        "serverSide":true,
        "order":[],
        "ajax":{
            url: "obtener_registros.php",
            type: "POST"
        },
        "columnsDefs":[
            {
            "targets":[0, 3, 4],
            "orderable":false,
            },
        ],
        "language": {
        "decimal": "",
        "emptyTable": "No hay registros",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
        "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
        "infoFiltered": "(Filtrado de _MAX_ total entradas)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ Entradas",
        "loadingRecords": "Cargando...",
        "processing": "Procesando...",
        "search": "Buscar:",
        "zeroRecords": "Sin resultados encontrados",
        "paginate": {
            "first": "Primero",
            "last": "Ultimo",
            "next": "Siguiente",
            "previous": "Anterior"
        }
    }
    });
    
   

    //Aquí código inserción
    $(document).on('submit', '#formulario', function(event){
        event.preventDefault();
        //declarando variables con expresiones regulares 
        var ernombre = "^[A-ZÑa-zñáéíóúÁÉÍÓÚ'° ]+$"; // Letras y espacios, pueden llevar acentos.
        var erprecio = /^\d*\.\d+$/;// 7 a 14 numeros.

        //declarando variables 
        var nombre = $('#nombre').val();
        var descripcion = $('#descripcion').val();
        var precio = $('#precio').val();
        var cantidad = $('#cantidad').val();
        var extension = $('#imagen_habitacion').val().split('.').pop().toLowerCase();
        if(extension != '')
        {
            if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
            {

                swal("Error!", "Fomato de imagen inválido !", "error");
                
                $('#imagen_habitacion').val('');
               return false;
            }
        }
        
        //validación
        if(nombre.trim() == ''){
                swal("Error!", "Por favor ingrese Nombre!", "error");
                $("#nombre").focus();
                return false;
            }else if(nombre.match(ernombre)== null){
                swal("Error!", "el nombre solo puede contener letras, espacios ", "error");
                $('#nombre').focus();
                return false;
                }else if (descripcion.trim() == ''){
                    swal("Error!", "Por favor ingrese Descripción !", "error");
                $("#descripcion").focus();
                return false;
            }else if (extension.trim() == ''){
                swal("Error!", "Por favor ingrese Imagen !", "error");
                $("#imagen_habitacion").focus();
                return false;
                }else if (precio.trim() == ''){
                    swal("Error!", "Por favor ingrese Precio !", "error");
                    $("#precio").focus();
                    return false;
                }else if(precio.match(erprecio)== null){
                    swal("Error!", "Solo se permiten numeros naturales y/o decimales", "error");
                    $('#precio').focus();
                    return false;
                }else if (cantidad.trim() == 0){
                    swal("Error!", "Por favor ingrese Cantidad !", "error");
                $("#cantidad").focus();
                return false;

                }else{
                    $.ajax({
                        url:"crear.php",
                        method:'POST',
                        data:new FormData(this),
                        contentType:false,
                        processData:false,
                        success:function(data)
                        {
                            alert(data);
                            $('#formulario')[0].reset();
                            $('#modalHabitacion').modal('hide');
                            dataTable.ajax.reload();
                        }
                    });
                }
            
    });


            
    
    //Funcionalida de editar
        $(document).on('click', '.editar', function(){		
            var id_habitacion = $(this).attr("id");		
            $.ajax({
                url:"obtener_registro.php",
                method:"POST",
                data:{id_habitacion:id_habitacion},
                dataType:"json",
                success:function(data)
                    {
                        //console.log(data);				
                        $('#modalHabitacion').modal('show');
                        $('#nombre').val(data.nombre);
                        $('#descripcion').val(data.descripcion);
                        $('#precio').val(data.precio);
                        $('#cantidad').val(data.cantidad);
                        $('.modal-title').text("Editar Habitación");
                        $('#id_habitacion').val(id_habitacion);
                        $('#imagen_subida').html(data.imagen_habitacion);
                        $('#action').val("Editar");
                        $('#operacion').val("Editar");
                        //swal("Exito!", "Se a modificado correctamente!", "success");
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                }
            })
	});



    //Funcionalida de borrar
            $(document).on('click', '.borrar', function(){
                var id_habitacion = $(this).attr("id");

                if(confirm("Esta seguro de borrar este registroo:" + id_habitacion))
                {
                    $.ajax({
                        url:"borrar.php",
                        method:"POST",
                        data:{id_habitacion:id_habitacion},
                        success:function(data)
                        {
                            alert(data);
                            dataTable.ajax.reload();
                        }
                    });
                }
                else
                {
                    return false;	
                }
            });
});          
        
   
