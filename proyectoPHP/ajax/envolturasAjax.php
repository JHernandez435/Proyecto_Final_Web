<?php
include_once "../controlador/envolturasControlador.php";
include_once "../modelos/envolturasModelo.php";

class envolturasAjax
{
    public $idEnvoltura;
    public $codigo;
    public $envoltura;
    public $imagen;
    public $urlAnterior;

    // insertar envoltorio
    public function fnInsertarEnvolturas()
    {
        $objRespuesta = envolturasControlador::fnCtrRegistrarEnvolturas($this->codigo, $this->envoltura, $this->imagen);
        $respuesta['resultado'] = array($objRespuesta);
        echo json_encode($respuesta);
    }

    // modificar  producto
    public function fnEditarEnvolturas()
    {
        $objRespuesta = envolturasControlador::fnCtrEditarEnvolturas($this->idEnvoltura, $this->codigo,$this->envoltura,  $this->imagen, $this->urlAnterior);
        $respuesta['resultado'] = array($objRespuesta);
        echo json_encode($respuesta);
    }

    // eliminar  producto
    public function fnEliminarEnvolturas()
    {
        $objRespuesta = envolturasControlador::fnCtrEliminarEnvolturas($this->idEnvoltura, $this->imagen);
        $respuesta['resultado'] = array($objRespuesta);
        echo json_encode($respuesta);
    }
}

// insertar  Envoltorio
if (isset($_POST["envioCodigo"]) && isset($_POST["envioEnvoltura"])){
    $objEnvoltura = new envolturasAjax();
    $objEnvoltura->codigo = $_POST["envioCodigo"];
    $objEnvoltura->envoltura = $_POST["envioEnvoltura"];
    $objEnvoltura->imagen = $_FILES["envioImagen"];
    $objEnvoltura->fnInsertarEnvolturas();
}


// modificar Envoltorio
if (isset($_POST["idEditarEnvoltura"]) && isset($_POST["editarCodigo"])) {
    $objEnvoltura = new envolturasAjax();
    $objEnvoltura->idEnvoltura = $_POST["idEditarEnvoltura"];
    $objEnvoltura->codigo = $_POST["editarCodigo"];
    $objEnvoltura->envoltura = $_POST["editarEnvoltura"];

    if ($_POST["hayArchivo"] == "true") {
        $objEnvoltura->imagen = $_FILES["editarImagen"];
    } else {
        $objEnvoltura->imagen = null;
    }

    $objEnvoltura->urlAnterior = $_POST["eliminarImagenAnterior"];
    $objEnvoltura->fnEditarEnvolturas();
}

    // eliminar  Envoltorio
    if (isset($_POST["idEliminarEnvoltura"]) && isset($_POST["eliminarImagen"])){
        $objEnvoltura = new envolturasAjax();
        $objEnvoltura->idEnvoltura = $_POST["idEliminarEnvoltura"];
        $objEnvoltura->imagen = $_POST["eliminarImagen"];
        $objEnvoltura->fnEliminarEnvolturas();
    }
