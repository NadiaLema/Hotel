



$(document).ready(function () {
    $('#datos_reserva').DataTable({
       

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

    //Funcionalida de borrar
    $(document).on('click', '.cancelar', function(){
        var id_reserva = $(this).attr("id");
        if(confirm("Esta seguro de cancelar esta reserva:" + id_reserva))
        {
            $.ajax({
                url:"../Controller/cancelarreserva.php",
                method:"POST",
                data:{id_reserva:id_reserva},
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



            


    

    
    


