$(document).ready(function() {

    $("#tablaBlog").DataTable({
        "ajax": "ajax/dataTable-BlogsAjax.php",
        "deferReader": true,
        "retrieve": true,
        "processing": true
    });


})