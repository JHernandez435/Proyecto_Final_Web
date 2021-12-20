<?php
include_once "../controlador/blogsControlador.php";
include_once "../modelos/blogsModelo.php";

class blogsAjax
{
    public $idBlog;
    public $codigo;
    public $fecha;
    public $descripcion;
    public $imagen;
    public $urlAnterior;

    // insertar blog
    public function fnInsertarBlogs()
    {
        $objRespuesta = blogsControlador::fnCtrRegistrarBlogs($this->codigo, $this->fecha, $this->descripcion, $this->imagen);
        $respuesta['resultado'] = array($objRespuesta);
        echo json_encode($respuesta);
    }

    // modificar blog
    public function fnEditarBlogs()
    {
        $objRespuesta = blogsControlador::fnCtrEditarBlogs($this->idBlog, $this->codigo, $this->fecha, $this->descripcion, $this->imagen, $this->urlAnterior);
        $respuesta['resultado'] = array($objRespuesta);
        echo json_encode($respuesta);
    }

    // eliminar blog
    public function fnEliminarBlogs()
    {
        $objRespuesta = blogsControlador::fnCtrEliminarBlogs($this->idBlog, $this->imagen);
        $respuesta['resultado'] = array($objRespuesta);
        echo json_encode($respuesta);
    }
}

// insertar blog
if (isset($_POST["envioCodigo"]) && isset($_POST["envioFecha"])){
    $objBlog = new blogsAjax();
    $objBlog->codigo = $_POST["envioCodigo"];
    $objBlog->fecha = $_POST["envioFecha"];
    $objBlog->descripcion = $_POST["envioDescripcion"];
    $objBlog->imagen = $_FILES["envioImagen"];
    $objBlog->fnInsertarBlogs();
}


// modificar blog
if (isset($_POST["idEditarBlog"]) && isset($_POST["editarCodigo"])) {
    $objBlog = new blogsAjax();
    $objBlog->idBlog = $_POST["idEditarBlog"];
    $objBlog->codigo = $_POST["editarCodigo"];
    $objBlog->fecha = $_POST["editarFecha"];
    $objBlog->descripcion = $_POST["editarDescripcion"];

    if ($_POST["hayArchivo"] == "true") {
        $objBlog->imagen = $_FILES["editarImagen"];
    } else {
        $objBlog->imagen = null;
    }

    $objBlog->urlAnterior = $_POST["eliminarImagenAnterior"];
    $objBlog->fnEditarBlogs();
}

    // eliminar blog
    if (isset($_POST["idEliminarBlog"]) && isset($_POST["eliminarImagen"])){
        $objBlog = new blogsAjax();
        $objBlog->idBlog = $_POST["idEliminarBlog"];
        $objBlog->imagen = $_POST["eliminarImagen"];
        $objBlog->fnEliminarBlogs();
    }
