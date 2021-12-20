$(document).ready(function() {

    $("#tablaProducto").DataTable({
        "ajax": "ajax/dataTable-TiendaAjax.php",
        "deferReader": true,
        "retrieve": true,
        "processing": true
    });



})