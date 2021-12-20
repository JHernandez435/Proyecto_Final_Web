$(document).ready(function() {
    // -----------------------------------------------------------
    //       SECCION DE REGISTRO DE USUARIOS
    //------------------------------------------------------------ 
    $("#btnRegistrarUsuarios").click(function() {
        var cedula = $("#txtCedula").val();
        var nombre = $("#txtNombre").val();
        var apellido = $("#txtApellido").val();
        var usuario = $("#txtUsuario").val();
        var password = $("#txtPassword").val();
        var rol = $("#txtRol").val();
        var lhayError = false;


        if (!lhayError) {
            var objData = new FormData();
            objData.append("envioRcedula", cedula);
            objData.append("envioRnombre", nombre);
            objData.append("envioRapellido", apellido);
            objData.append("envioRusuario", usuario);
            objData.append("envioRpassword", password);
            objData.append("envioRrol", rol);
            $.ajax({
                async: true,
                url: "ajax/usuariosAjax.php",
                method: "POST",
                data: objData,
                cache: false,
                contentType: false,
                processData: false,
                dataType: "json",
                success: function(respuesta) {
                    if (respuesta.resultado[0] == 1) {
                        window.location = "#";
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: respuesta.resultado[0]
                        })
                    }
                }
            })
        }
    })
})