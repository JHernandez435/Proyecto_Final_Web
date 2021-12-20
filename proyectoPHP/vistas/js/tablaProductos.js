$(document).ready(function() {

    $("#tablaProducto").DataTable({
        "ajax": "ajax/dataTable-ProductosAjax.php",
        "deferReader": true,
        "retrieve": true,
        "processing": true
    });



})