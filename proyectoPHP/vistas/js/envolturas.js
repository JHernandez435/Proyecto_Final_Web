$(document).ready(function() {
    // -----------------------------------------------------------
    //       SECCION DE REGISTRO DE ENVOLTORIOS
    //------------------------------------------------------------ 
    $("#btnGuardarEnvolturas").click(function() {
        var codigo = $("#txtCodigo").val();
        var envoltura = $("#txtEnvoltura").val();
        var imagen = document.getElementById("filer_input_single").files[0];
        var lhayError = false;

        if (codigo == "") {
            $("#valida-txtCodigo").html("El campo nombres no puede ir vacio");
            $("#valida-txtCodigo").slideDown("slow");
            lhayError = true;
        }

        if (envoltura == "") {
            $("#valida-txtEnvultura").html("El campo Precio no puede ir vacio");
            $("#valida-txtEnvoltura").slideDown("slow");
            lhayError = true;
        }

        if (imagen == null) {
            $("#valida-txtImagen").html("El campo Imagen no puede ir vacio");
            $("#valida-txtImagen").slideDown("slow");
            lhayError = true;
        }

        if (!lhayError) {
            var objData = new FormData();
            objData.append("envioCodigo", codigo);
            objData.append("envioEnvoltura", envoltura);
            objData.append("envioImagen", imagen);

            $.ajax({
                url: "ajax/envolturasAjax.php",
                method: "POST",
                data: objData,
                cache: false,
                contentType: false,
                processData: false,
                dataType: "json",
                success: function(respuesta) {
                    if (respuesta.resultado[0] == 1) {
                        window.location = "envolturas.php";
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
    $("#txtCodigo").click(function() {
        $("#valida-txtCodigo").slideUp("slow");
    })

    $("#txtEnvoltura").click(function() {
        $("#valida-txtEnvoltura").slideUp("slow");
    })

    $("#txtImagen").click(function() {
        $("#valida-txtImagen").slideUp("slow");
    })


    // -----------------------------------------------------------
    //       VISUALIZAR ENVOLTORIOS EN VENTANA MODAL DE EDICION  
    //------------------------------------------------------------ 
    $("#tablaEnvoltura").on("click", "#btnEditar", function() {
        var idEnvoltura= $(this).attr("idEnvoltura");
        var codigo = $(this).attr("codigo");
        var envoltura = $(this).attr("envoltura");
        var imagen = $(this).attr("imagen");

        $("#txtEditarCodigo").val(codigo);
        $("#txtEditarEnvoltura").val(envoltura);

        $("#imgImagen").attr("src", imagen);
        $("#imgImagen").attr("urlAnterior", imagen);
        $("#etiquetaImagen").html("Imagen: " + imagen);
        $("#btnEditarEnvolturas").attr("idEnvoltura", idEnvoltura);
    })


//   -----------------------------------------------------------
//         EDITAR ENVOLTORIOS
//  ------------------------------------------------------------ 
    $("#btnEditarEnvolturas").click(function() {
        var idEnvoltura = $(this).attr("idEnvoltura");
        var codigo = $("#txtEditarCodigo").val();
        var envoltura = $("#txtEditarEnvoltura").val();
        var urlAnterior = $("#imgImagen").attr("urlAnterior");
        var hayArchivo = true;
        var imagen = document.getElementById("txtEditarImagen").files[0];
        if (imagen == undefined) {
            hayArchivo = false;
        }

        var objData = new FormData();
        objData.append("idEditarEnvoltura", idEnvoltura);
        objData.append("editarCodigo", codigo);
        objData.append("editarEnvoltura", envoltura);
        objData.append("editarImagen", imagen);
        objData.append("eliminarImagenAnterior", urlAnterior);
        objData.append("hayArchivo", hayArchivo);

        $.ajax({
            async: true,
            url: "ajax/envolturasAjax.php",
            method: "POST",
            data: objData,
            cache: false,
            contentType: false,
            processData: false,
            dataType: "json",
            success: function(respuesta) {
                if (respuesta.resultado[0] == 1) {
                    window.location = "envolturas.php";
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


//   -----------------------------------------------------------
//        ELIMINAR ENVOLTORIOS
//  ------------------------------------------------------------ 
    $("#tablaEnvolturas").on("click", "#btnEliminar", function() {
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
                var idEnvoltura = $(this).attr("idEnvoltura");
                var rutaImagen = $(this).attr("imagen");
                var objData = new FormData();
                objData.append("idEliminarEnvoltura", idEnvoltura);
                objData.append("eliminarImagen", rutaImagen);
                $.ajax({
                    async: true,
                    url: "ajax/envolturassAjax.php",
                    method: "POST",
                    data: objData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    dataType: "json",
                    success: function(respuesta) {
                        if (respuesta.resultado[0] == 1) {
                            window.location = "envolturas.php";
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

//   -----------------------------------------------------------
//         GENERAR PDF
//  ------------------------------------------------------------ 
    $("#btn-pdf").click(function(){

        window.open("extensiones/TCPDF-main/examples/informe.php")
    })
});