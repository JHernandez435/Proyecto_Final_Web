$(document).ready(function () {


    var ListaProductos = [];
    if (localStorage.getItem("productos") != null) {
        var listaCarrito = JSON.parse(localStorage.getItem("productos"));
        listaCarrito.forEach(cargarVectorListaProductos);
    }

    function cargarVectorListaProductos(item, index) {
        ListaProductos.push({ "idproductos": item.idproductos, "codigo": item.codigo, "nombre": item.nombre, "descripcion": item.descripcion, "cantidades": item.cantidades, "cantidadStock": item.cantidadStock, "precio": item.precio, "imagen": item.imagen })
    }


    // -----------------------------------------------------------
    //       AGREGAR PRODUCTOS AL CARRO DE COMPRAS
    //------------------------------------------------------------
    $("#product-detail").on("click", "#btn-Comprar", function () {
        var idproductos = $(this).attr("idproductos");
        var codigo = $(this).attr("codigo");
        var nombre = $(this).attr("nombre");
        var descripcion = $(this).attr("descripcion");
        var cantidadStock = $(this).attr("cantidad");
        var precio = $(this).attr("precio");
        var imagen = $(this).attr("urlimagen");
        var cantidad = 1;
        var hayProducto = false;
        var cantidadActual = 0;

        ListaProductos.forEach(buscarProducto);

        function buscarProducto(item, index) {
            if (item.codigo == codigo) {
                hayProducto = true;
                cantidadActual = Number(item.cantidades);
            }
        }

        if (!hayProducto) {
            ListaProductos.push({ "idproductos": idproductos, "codigo": codigo, "nombre": nombre, "descripcion": descripcion, "cantidades": cantidad, "cantidadStock": cantidadStock, "precio": precio, "imagen": imagen });
            localStorage.setItem("productos", JSON.stringify(ListaProductos));
            Swal.fire({
                icon: 'success',
                title: 'Usted ha agregado ' + nombre + ' al carrito de compras',
                text: ''
            })
        } else {

            cantidadActual = Number(cantidadActual + 1);
            actualizarCantidad(codigo, cantidadActual);

            function actualizarCantidad(codigo, cantidadActual) {
                var listaCarrito = JSON.parse(localStorage.getItem("productos"));
                var ListaProductos = [];
                listaCarrito.forEach(cargarVectorListaProductos);
                localStorage.setItem("productos", JSON.stringify(ListaProductos));
                function cargarVectorListaProductos(item, index) {
                    if (item.codigo == codigo) {
                        ListaProductos.push({ "idproductos": item.idproductos, "codigo": item.codigo, "nombre": item.nombre, "descripcion": item.descripcion, "cantidades": cantidadActual, "cantidadStock": item.cantidadStock, "precio": item.precio, "imagen": item.imagen })
                    } else {
                        ListaProductos.push({ "idproductos": item.idproductos, "codigo": item.codigo, "nombre": item.nombre, "descripcion": item.descripcion, "cantidades": item.cantidades, "cantidadStock": item.cantidadStock, "precio": item.precio, "imagen": item.imagen })
                    }
                }
            }
            Swal.fire({
                icon: 'success',
                title: 'Se ha agregado otro producto',
                text: ''
            })
        }

    })

    // -----------------------------------------------------------
    //       VISUALIZAR CARRO DE COMPRAS
    //------------------------------------------------------------
    $("#myTabContent").on("click", "#btn-Carrito", function () {
        var idProducto = $(this).attr('producto');
        window.location.href = "carritoCe.php?producto=" + encodeURIComponent(idProducto) ;
    })

    $("#product-detail").on("click", "#btn-Carrito", function () {
        var idProducto = $(this).attr('producto');
        window.location.href = "carritoCe.php?producto=" + encodeURIComponent(idProducto);
    })

    $("#myTabContent").on("click", "#btn-Detalle", function () {
        var producto = $(this).attr('producto');
        var envoltura = $(this).attr('envoltura');
        window.location.href = "detallesCe.php?producto=" + encodeURIComponent(producto) + "&envoltura=" + encodeURIComponent(envoltura);
    })
    // -----------------------------------------------------------
    //       VISUALIZAR CATEGORIAS
    //------------------------------------------------------------
    $("#profile-tab").click(function () {
        var categoria = $(this).attr('categoria');
        console.log(categoria);
        window.location.href = "index.php#profile?categoria=" + encodeURIComponent(categoria);
    })
    $("#contact-tab").click(function () {
        var categoria = $(this).attr('categoria');
        console.log(categoria);
        window.location.href = "index.php#contact?categoria=" + encodeURIComponent(categoria);
    })
    $("#design-tab").click(function () {
        var categoria = $(this).attr('categoria');
        console.log(categoria);
        window.location.href = "index.php#design?categoria=" + encodeURIComponent(categoria);
    })
    $("#Web-tab").click(function () {
        var categoria = $(this).attr('categoria');
        console.log(categoria);
        window.location.href = "index.php#Web?categoria=" + encodeURIComponent(categoria);
    })
    $("#Web-tab1").click(function () {
        var categoria = $(this).attr('categoria');
        console.log(categoria);
        window.location.href = "index.php#Web1?categoria=" + encodeURIComponent(categoria);
    })
    $("#Web-tab11").click(function () {
        var categoria = $(this).attr('categoria');
        console.log(categoria);
        window.location.href = "index.php#Web11?categoria=" + encodeURIComponent(categoria);
    })
    $("#Adobe-XD-tab8").click(function () {
        var categoria = $(this).attr('categoria');
        console.log(categoria);
        window.location.href = "index.php#Adobe-XD8?categoria=" + encodeURIComponent(categoria);
    })
    $("#Adobe-XD-tab9").click(function () {
        var categoria = $(this).attr('categoria');
        console.log(categoria);
        window.location.href = "index.php#Adobe-XD9?categoria=" + encodeURIComponent(categoria);
    })

});