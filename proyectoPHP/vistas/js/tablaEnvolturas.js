$(document).ready(function() {

    $("#tablaEnvolturas").DataTable({
        "ajax": "ajax/dataTable-EnvolturasAjax.php",
        "deferReader": true,
        "retrieve": true,
        "processing": true
    });
    
}) 