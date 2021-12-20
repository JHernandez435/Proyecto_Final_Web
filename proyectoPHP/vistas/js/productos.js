$(document).ready(function() {
    // -----------------------------------------------------------
    //       SECCION DE REGISTRO DE PRODUCTOS
    //------------------------------------------------------------ 
    $("#btnGuardarProductos").click(function() {
        var codigo = $("#txtCodigo").val();
        var nombre = $("#txtNombre").val();
        var categoria = $("#txtCategoria").val();
        var descripcion = $("#txtDescripcion").val();
        var cantidad = $("#txtCantidad").val();
        var precio = $("#txtPrecio").val();
        var imagen = document.getElementById("filer_input_single").files[0];
        var lhayError = false;


        if (codigo == "") {
            $("#valida-txtCodigo").html("El campo nombres no puede ir vacio");
            $("#valida-txtCodigo").slideDown("slow");
            lhayError = true;
        }

        if (nombre == "") {
            $("#valida-txtNombre").html("El campo nombres no puede ir vacio");
            $("#valida-txtNombre").slideDown("slow");
            lhayError = true;
        }

        if (categoria == "") {
            $("#valida-txtCategoria").html("El campo Apellidos no puede ir vacio");
            $("#valida-txtCategoria").slideDown("slow");
            lhayError = true;
        }

        if (descripcion == "") {
            $("#valida-txtDescripcion").html("El campo Telefono no puede ir vacio");
            $("#valida-txtDescripcion").slideDown("slow");
            lhayError = true;
        }
        if (cantidad == "") {
            $("#valida-txtCantidad").html("El campo Telefono no puede ir vacio");
            $("#valida-txtCantidad").slideDown("slow");
            lhayError = true;
        }

        if (precio == "") {
            $("#valida-txtPrecio").html("El campo Telefono no puede ir vacio");
            $("#valida-txtPrecio").slideDown("slow");
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
            objData.append("envioNombre", nombre);
            objData.append("envioCategoria", categoria);
            objData.append("envioDescripcion", descripcion);
            objData.append("envioCantidad", cantidad);
            objData.append("envioPrecio", precio);
            objData.append("envioImagen", imagen);

            $.ajax({
                async: true,
                url: "ajax/productosAjax.php",
                method: "POST",
                data: objData,
                cache: false,
                contentType: false,
                processData: false,
                dataType: "json",
                success: function(respuesta) {
                    if (respuesta.resultado[0] == 1) {
                        window.location = "productosAd.php";
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

    $("#txtNombre").click(function() {
        $("#valida-txtNombre").slideUp("slow");
    })

    $("#txtCategoria").click(function() {
        $("#valida-txtCategoria").slideUp("slow");
    })

    $("#txtDescripcion").click(function() {
        $("#valida-txtDescripcion").slideUp("slow");
    })

    $("#txtCantidad").click(function() {
        $("#valida-txtCantidad").slideUp("slow");
    })

    $("#txtPrecio").click(function() {
        $("#valida-txtPrecio").slideUp("slow");
    })

    $("#txtImagen").click(function() {
        $("#valida-txtImagen").slideUp("slow");
    })


    // -----------------------------------------------------------
    //       VISUALIZAR PRODUCTOS EN VENTANA MODAL DE EDICION  
    //------------------------------------------------------------ 
    $("#tablaProducto").on("click", "#btnEditar", function() {
        var idProducto = $(this).attr("idProducto");
        var codigo = $(this).attr("codigo");
        var nombre = $(this).attr("nombre");
        var categoria = $(this).attr("categoria");
        var descripcion = $(this).attr("descripcion");
        var cantidad = $(this).attr("cantidad");
        var precio = $(this).attr("precio");
        var imagen = $(this).attr("imagen");

        $("#txtEditarCodigo").val(codigo);
        $("#txtEditarNombre").val(nombre);
        $("#txtEditarCategoria").val(categoria);
        $("#txtEditarDescripcion").val(descripcion);
        $("#txtEditarCantidad").val(cantidad);
        $("#txtEditarPrecio").val(precio);
        $("#imgImagen").attr("src", imagen);
        $("#imgImagen").attr("urlAnterior", imagen);
        $("#etiquetaImagen").html("Imagen: " + imagen);
        $("#btnEditarProductos").attr("idProducto", idProducto);
    })


//   -----------------------------------------------------------
//         EDITAR PROUCTOS
//  ------------------------------------------------------------ 
    $("#btnEditarProductos").click(function() {
        var idProducto = $(this).attr("idProducto");
        var codigo = $("#txtEditarCodigo").val();
        var nombre = $("#txtEditarNombre").val();
        var categoria = $("#txtEditarCategoria").val();
        var descripcion = $("#txtEditarDescripcion").val();
        var cantidad = $("#txtEditarCantidad").val();
        var precio = $("#txtEditarPrecio").val();
        var urlAnterior = $("#imgImagen").attr("urlAnterior");
        var hayArchivo = true;
        var imagen = document.getElementById("txtEditarImagen").files[0];
        if (imagen == undefined) {
            hayArchivo = false;
        }

        var objData = new FormData();
        objData.append("idEditarProducto", idProducto);
        objData.append("editarCodigo", codigo);
        objData.append("editarNombre", nombre);
        objData.append("editarCategoria", categoria);
        objData.append("editarDescripcion", descripcion);
        objData.append("editarCantidad", cantidad);
        objData.append("editarPrecio", precio);
        objData.append("editarImagen", imagen);
        objData.append("eliminarImagenAnterior", urlAnterior);
        objData.append("hayArchivo", hayArchivo);

        $.ajax({
            async: true,
            url: "ajax/productosAjax.php",
            method: "POST",
            data: objData,
            cache: false,
            contentType: false,
            processData: false,
            dataType: "json",
            success: function(respuesta) {
                if (respuesta.resultado[0] == 1) {
                    window.location = "productosAd.php";
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
//        ELIMINAR PRODUCTOS
//  ------------------------------------------------------------ 
    $("#tablaProducto").on("click", "#btnEliminar", function() {
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
                var idProducto = $(this).attr("idProducto");
                var rutaImagen = $(this).attr("imagen");
                var objData = new FormData();
                objData.append("idEliminarProducto", idProducto);
                objData.append("eliminarImagen", rutaImagen);
                $.ajax({
                    async: true,
                    url: "ajax/productosAjax.php",
                    method: "POST",
                    data: objData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    dataType: "json",
                    success: function(respuesta) {
                        if (respuesta.resultado[0] == 1) {
                            window.location = "productosAd.php";
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