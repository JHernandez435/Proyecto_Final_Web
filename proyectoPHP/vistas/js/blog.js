$(document).ready(function() {
    // -----------------------------------------------------------
    //       SECCION DE REGISTRO DE BLOGS
    //------------------------------------------------------------ 
    $("#btnGuardarBlogs").click(function() {
        var codigo = $("#txtCodigo").val();
        var fecha = $("#txtFecha").val();
        var descripcion = $("#txtDescripcion").val();
        var imagen = document.getElementById("filer_input_single").files[0];
        var lhayError = false;

        if (codigo == "") {
            $("#valida-txtCodigo").html("El campo nombres no puede ir vacio");
            $("#valida-txtCodigo").slideDown("slow");
            lhayError = true;
        }

        if (fecha == "") {
            $("#valida-txtFecha").html("El campo nombres no puede ir vacio");
            $("#valida-txtFecha").slideDown("slow");
            lhayError = true;
        }

        if (descripcion == "") {
            $("#valida-txtDescripcion").html("El campo Telefono no puede ir vacio");
            $("#valida-txtDescripcion").slideDown("slow");
            lhayError = true;
        }

        if (imagen == null) {
            $("#valida-txtImagen").html("El campo imagen no puede ir vacio");
            $("#valida-txtImagen").slideDown("slow");
            lhayError = true;
        }

        if (!lhayError) {
            var objData = new FormData();
            objData.append("envioCodigo", codigo);
            objData.append("envioFecha", fecha);
            objData.append("envioDescripcion", descripcion);
            objData.append("envioImagen", imagen);

            $.ajax({
                async: true,
                url: "ajax/blogsAjax.php",
                method: "POST",
                data: objData,
                cache: false,
                contentType: false,
                processData: false,
                dataType: "json",
                success: function(respuesta) {
                    if (respuesta.resultado[0] == 1) {
                        window.location = "blog.php";
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

    $("#txtFecha").click(function() {
        $("#valida-txtFecha").slideUp("slow");
    })

    $("#txtDescripcion").click(function() {
        $("#valida-txtDescripcion").slideUp("slow");
    })

    $("#txtImagen").click(function() {
        $("#valida-txtImagen").slideUp("slow");
    })


    // -----------------------------------------------------------
    //       VISUALIZAR BLOGS EN VENTANA MODAL DE EDICION  
    //------------------------------------------------------------ 
    $("#tablaBlog").on("click", "#btnEditar", function() {
        var idBlog = $(this).attr("idBlog");
        var codigo = $(this).attr("codigo");
        var fecha = $(this).attr("fecha");
        var descripcion = $(this).attr("descripcion");
        var imagen = $(this).attr("imagen");


        $("#txtEditarCodigo").val(codigo);
        $("#txtEditarFecha").val(fecha);
        $("#txtEditarDescripcion").val(descripcion);
        $("#imgImagen").attr("src", imagen);
        $("#imgImagen").attr("urlAnterior", imagen);
        $("#etiquetaImagen").html("Imagen: " + imagen);
        $("#btnEditarBlogs").attr("idBlog", idBlog);
    })


//   -----------------------------------------------------------
//         EDITAR PROUCTOS
//  ------------------------------------------------------------ 
    $("#btnEditarBlogs").click(function() {
        var idBlog = $(this).attr("idBlog");
        var codigo = $("#txtEditarCodigo").val();
        var fecha = $("#txtEditarFecha").val();
        var descripcion = $("#txtEditarDescripcion").val();
        var urlAnterior = $("#imgImagen").attr("urlAnterior");
        var hayArchivo = true;
        var imagen = document.getElementById("txtEditarImagen").files[0];
        if (imagen == undefined) {
            hayArchivo = false;
        }

        var objData = new FormData();
        objData.append("idEditarBlog", idBlog);
        objData.append("editarCodigo", codigo);
        objData.append("editarFecha", fecha);
        objData.append("editarDescripcion", descripcion);
        objData.append("editarImagen", imagen);
        objData.append("eliminarImagenAnterior", urlAnterior);
        objData.append("hayArchivo", hayArchivo);


        $.ajax({
            async: true,
            url: "ajax/blogsAjax.php",
            method: "POST",
            data: objData,
            cache: false,
            contentType: false,
            processData: false,
            dataType: "json",
            success: function(respuesta) {
                if (respuesta.resultado[0] == 1) {
                    window.location = "blog.php";
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
//        ELIMINAR BLOGS
//  ------------------------------------------------------------ 
    $("#tablaBlog").on("click", "#btnEliminar", function() {
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
                var idBlog = $(this).attr("idBlog");
                var rutaImagen = $(this).attr("imagen");
                var objData = new FormData();
                objData.append("idEliminarBlog", idBlog);
                objData.append("eliminarImagen", rutaImagen);
                $.ajax({
                    async: true,
                    url: "ajax/blogsAjax.php",
                    method: "POST",
                    data: objData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    dataType: "json",
                    success: function(respuesta) {
                        if (respuesta.resultado[0] == 1) {
                            window.location = "blog.php";
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