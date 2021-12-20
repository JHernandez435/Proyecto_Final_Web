<?php
include_once "../controlador/productosControlador.php";
include_once "../modelos/productosModelo.php";

class productosAjax
{
    public $idProducto;
    public $codigo;
    public $nombre;
    public $categoria;
    public $descripcion;
    public $cantidad;
    public $precio;
    public $imagen;
    public $urlAnterior;
    public $listaProductos;


    public function actualizarProductos()
    {
        $objRespuesta = productosControlador::ctrActualizarProductos($this->listaProductos);
        $respuesta['resultado'] = array($objRespuesta);
        echo json_encode($respuesta);
    }

    // insertar producto
    public function fnInsertarProductos()
    {
        $objRespuesta = productosControlador::fnCtrRegistrarProductos($this->codigo, $this->nombre, $this->categoria, $this->descripcion, $this->cantidad, $this->precio, $this->imagen);
        $respuesta['resultado'] = array($objRespuesta);
        echo json_encode($respuesta);
    }

    // modificar  producto
    public function fnEditarProductos()
    {
        $objRespuesta = productosControlador::fnCtrEditarProductos($this->idProducto, $this->codigo, $this->nombre, $this->categoria, $this->descripcion, $this->cantidad, $this->precio, $this->imagen, $this->urlAnterior);
        $respuesta['resultado'] = array($objRespuesta);
        echo json_encode($respuesta);
    }

    // eliminar  producto
    public function fnEliminarProductos()
    {
        $objRespuesta = productosControlador::fnCtrEliminarProductos($this->idProducto, $this->imagen);
        $respuesta['resultado'] = array($objRespuesta);
        echo json_encode($respuesta);
    }
}

// insertar  producto
if (isset($_POST["envioCodigo"]) && isset($_POST["envioNombre"]) && isset($_POST["envioCategoria"]) && isset($_POST["envioDescripcion"]) && isset($_POST["envioCantidad"]) && isset($_POST["envioPrecio"])) {
    $objProducto = new productosAjax();
    $objProducto->codigo = $_POST["envioCodigo"];
    $objProducto->nombre = $_POST["envioNombre"];
    $objProducto->categoria = $_POST["envioCategoria"];
    $objProducto->descripcion = $_POST["envioDescripcion"];
    $objProducto->cantidad = $_POST["envioCantidad"];
    $objProducto->precio = $_POST["envioPrecio"];
    $objProducto->imagen = $_FILES["envioImagen"];
    $objProducto->fnInsertarProductos();
}


// modificar  producto
if (isset($_POST["idEditarProducto"]) && isset($_POST["editarNombre"])) {
    $objProducto = new productosAjax();
    $objProducto->idProducto = $_POST["idEditarProducto"];
    $objProducto->codigo = $_POST["editarCodigo"];
    $objProducto->nombre = $_POST["editarNombre"];
    $objProducto->categoria = $_POST["editarCategoria"];
    $objProducto->descripcion = $_POST["editarDescripcion"];
    $objProducto->cantidad = $_POST["editarCantidad"];
    $objProducto->precio = $_POST["editarPrecio"];

    if ($_POST["hayArchivo"] == "true") {
        $objProducto->imagen = $_FILES["editarImagen"];
    } else {
        $objProducto->imagen = null;
    }

    $objProducto->urlAnterior = $_POST["eliminarImagenAnterior"];
    $objProducto->fnEditarProductos();
}

// eliminar  producto
if (isset($_POST["idEliminarProducto"]) && isset($_POST["eliminarImagen"])) {
    $objProducto = new productosAjax();
    $objProducto->idProducto = $_POST["idEliminarProducto"];
    $objProducto->imagen = $_POST["eliminarImagen"];
    $objProducto->fnEliminarProductos();
}

if (isset($_POST["listaCarrito"])) {
    $objProductos = new productosAjax();
    $objProductos->listaProductos =  json_decode($_POST["listaCarrito"]);
    $objProductos->actualizarProductos();
}
