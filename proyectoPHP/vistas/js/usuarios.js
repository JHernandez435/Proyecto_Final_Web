$(document).ready(function() {
    // -----------------------------------------------------------
    //       SECCION DE REGISTRO DE USUARIOS
    //------------------------------------------------------------ 
    $("#btnGuardarUsuarios").click(function() {
        var cedula = $("#txtCedula").val();
        var nombre = $("#txtNombre").val();
        var apellido = $("#txtApellido").val();
        var telefono = $("#txtTelefono").val();
        var rol = $("#txtRol").val();
        var email = $("#txtEmail").val();
        var usuario = $("#txtUsuario").val();
        var password = $("#txtPassword").val();
        var imagen = document.getElementById("filer_input_single").files[0];
        var lhayError = false;

        if (cedula == "") {
            $("#valida-txtCedula").html("El campo cedula no puede ir vacio");
            $("#valida-txtCedula").slideDown("slow");
            lhayError = true;
        }

        if (nombre == "") {
            $("#valida-txtNombre").html("El campo nombre no puede ir vacio");
            $("#valida-txtNombre").slideDown("slow");
            lhayError = true;
        }

        if (apellido == "") {
            $("#valida-txtApellido").html("El campo nombre no puede ir vacio");
            $("#valida-txtApellido").slideDown("slow");
            lhayError = true;
        }

        if (telefono == "") {
            $("#valida-txtTelefono").html("El campo Telefono no puede ir vacio");
            $("#valida-txtTelefono").slideDown("slow");
            lhayError = true;
        }

        if (rol == "") {
            $("#valida-txtRol").html("El campo de Rol no puede ir vacio");
            $("#valida-txtRol").slideDown("slow");
            lhayError = true;
        }

        if (email == "") {
            $("#valida-txtEmail").html("El campo de Email no puede ir vacio");
            $("#valida-txtEmail").slideDown("slow");
            lhayError = true;
        }

        if (usuario == "") {
            $("#valida-txtUsuario").html("El campo Usuario no puede ir vacio");
            $("#valida-txtUsuario").slideDown("slow");
            lhayError = true;
        }

        if (password == "") {
            $("#valida-txtPassword").html("El campo Password no puede ir vacio");
            $("#valida-txtPassword").slideDown("slow");
            lhayError = true;
        }

        if (imagen == null) {
            $("#valida-txtImagen").html("El campo imagen no puede ir vacio");
            $("#valida-txtImagen").slideDown("slow");
            lhayError = true;
        }

        if (!lhayError) {
            var objData = new FormData();
            objData.append("envioCedula", cedula);
            objData.append("envioNombre", nombre);
            objData.append("envioApellido", apellido);
            objData.append("envioTelefono", telefono);
            objData.append("envioRol", rol);
            objData.append("envioEmail", email);
            objData.append("envioUsuario", usuario);
            objData.append("envioPassword", password);
            objData.append("envioImagen", imagen);
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
                        window.location = "usuariosAd.php";
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

    // -----------------------------------------------------------
    //       RESTABLECIMIENTO DE MENSAJES DE ERROR
    //------------------------------------------------------------ 
    
    $("#txtCedula").click(function() {
        $("#valida-txtCedula").slideUp("slow");
    })

    $("#txtNombre").click(function() {
        $("#valida-txtNombre").slideUp("slow");
    })

    $("#txtApellido").click(function() {
        $("#valida-txtApellido").slideUp("slow");
    })

    $("#txtTelefono").click(function() {
        $("#valida-txtTelefono").slideUp("slow");
    })

    $("#txtRol").click(function() {
        $("#valida-txtRol").slideUp("slow");
    })

    $("#txtEmail").click(function() {
        $("#valida-txtEmail").slideUp("slow");
    })

    $("#txtPassword").click(function() {
        $("#valida-txtPassword").slideUp("slow");
    })

    $("#txtImagen").click(function() {
        $("#valida-txtImagen").slideUp("slow");
    })


    // -----------------------------------------------------------
    //       VISUALIZAR USUARIOS EN VENTANA MODAL DE EDICION  
    //------------------------------------------------------------ 
    $("#tablaUsuario").on("click", "#btnEditar", function() {
        var idUsuario = $(this).attr("idUsuario");
        var cedula = $(this).attr("cedula");
        var nombre = $(this).attr("nombre");
        var apellido = $(this).attr("apellido");
        var telefono = $(this).attr("telefono");
        var rol = $(this).attr("rol");
        var email = $(this).attr("email");
        var usuario = $(this).attr("usuario");
        var password = $(this).attr("password");
        var imagen = $(this).attr("imagen");

        $("#txtEditarCedula").val(cedula);
        $("#txtEditarNombre").val(nombre);
        $("#txtEditarApellido").val(apellido);
        $("#txtEditarTelefono").val(telefono);
        $("#txtEditarRol").val(rol);
        $("#txtEditarEmail").val(email);
        $("#txtEditarUsuario").val(usuario);
        $("#txtEditarPassword").val(password);
        $("#imgImagen").attr("src", imagen);
        $("#imgImagen").attr("urlAnterior", imagen);
        $("#etiquetaImagen").html("Imagen: " + imagen);
        $("#btnEditarUsuarios").attr("idUsuario", idUsuario);
    })


    // -----------------------------------------------------------
    //       EDITAR USUARIOS 
    //------------------------------------------------------------ 
    $("#btnEditarUsuarios").click(function() {
        var idUsuario = $(this).attr("idUsuario");
        var cedula = $("#txtEditarCedula").val();
        var nombre = $("#txtEditarNombre").val();
        var apellido = $("#txtEditarApellido").val();
        var telefono = $("#txtEditarTelefono").val();
        var rol = $("#txtEditarRol").val();
        var email = $("#txtEditarEmail").val();
        var usuario = $("#txtEditarUsuario").val();
        var password = $("#txtEditarPassword").val();
        var urlAnterior = $("#imgImagen").attr("urlAnterior");
        var hayArchivo = true;
        var imagen = document.getElementById("txtEditarImagen").files[0];
        if (imagen == undefined) {
            hayArchivo = false;
        }

        var objData = new FormData();
        objData.append("idEditarUsuario", idUsuario);
        objData.append("editarCedula", cedula);
        objData.append("editarNombre", nombre);
        objData.append("editarApellido", apellido);
        objData.append("editarTelefono", telefono);
        objData.append("editarRol", rol);
        objData.append("editarEmail", email);
        objData.append("editarUsuario", usuario);
        objData.append("editarPassword", password);
        objData.append("editarImagen", imagen);
        objData.append("eliminarImagenAnterior", urlAnterior);
        objData.append("hayArchivo", hayArchivo);
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
                    window.location = "usuariosAd.php";
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: respuesta.resultado[0]
                    })
                }
            }
        })

    })


    // -----------------------------------------------------------
    //      ELIMINAR USUARIOS 
    //------------------------------------------------------------ 
    $("#tablaUsuario").on("click", "#btnEliminar", function() {
        Swal.fire({
            title: 'Esta Usted Seguro?',
            text: "Al realizar esta acción no podra revertirse!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, Borrar registro!',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                var idUsuario = $(this).attr("idUsuario");
                var rutaImagen = $(this).attr("imagen");
                var objData = new FormData();
                objData.append("idEliminarUsuario", idUsuario);
                objData.append("eliminarImagen", rutaImagen);
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
                            window.location = "usuariosAd.php";
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

    // -----------------------------------------------------------
    //       GENERAR PDF
    //------------------------------------------------------------ 
    $("#btn-pdf").click(function(){

        window.open("extensiones/TCPDF-main/examples/informe.php")
    })
});