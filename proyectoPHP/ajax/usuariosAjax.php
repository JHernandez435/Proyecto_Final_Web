<?php
include_once "../controlador/usuariosControlador.php";
include_once "../modelos/usuariosModelo.php";

class usuariosAjax
{
    public $idUsuario;
    public $cedula;
    public $nombre;
    public $apellido;
    public $telefono;
    public $rol;
    public $email;
    public $usuario;
    public $password;
    public $imagen;
    public $urlAnterior;

    // insertar usuario
    public function fnRegistarUsuarios()
    {
        $objRespuesta = usuariosControlador::fnCtrInsertarUsuarios($this->cedula, $this->nombre, $this->apellido, $this->usuario, $this->password, $this->rol);
        $respuesta['resultado'] = array($objRespuesta);
        echo json_encode($respuesta);
    }

    // insertar usuario
    public function fnInsertarUsuarios()
    {
        $objRespuesta = usuariosControlador::fnCtrRegistrarUsuarios($this->cedula, $this->nombre, $this->apellido, $this->telefono, $this->rol, $this->email ,$this->usuario, $this->password, $this->imagen);
        $respuesta['resultado'] = array($objRespuesta);
        echo json_encode($respuesta);
    }

    // modificar usuario
    public function fnEditarUsuarios()
    {
        $objRespuesta = usuariosControlador::fnCtrEditarUsuarios($this->idUsuario, $this->cedula, $this->nombre, $this->apellido, $this->telefono, $this->rol, $this->email ,$this->usuario, $this->password, $this->imagen, $this->urlAnterior);
        $respuesta['resultado'] = array($objRespuesta);
        echo json_encode($respuesta);
    }

    // eliminar usuario
    public function fnEliminarUsuarios()
    {
        $objRespuesta = usuariosControlador::fnCtrEliminarUsuarios($this->idUsuario, $this->imagen);
        $respuesta['resultado'] = array($objRespuesta);
        echo json_encode($respuesta);
    }
}

// registrar usuario
if (isset($_POST["envioRcedula"]) && isset($_POST["envioRnombre"]) && isset($_POST["envioRpassword"])){
    $objUsuario = new usuariosAjax();
    $objUsuario->cedula = $_POST["envioRcedula"];
    $objUsuario->nombre = $_POST["envioRnombre"];
    $objUsuario->apellido = $_POST["envioRapellido"];
    $objUsuario->usuario = $_POST["envioRusuario"];
    $objUsuario->password = $_POST["envioRpassword"];
    $objUsuario->rol = $_POST["envioRrol"];
    $objUsuario->fnRegistarUsuarios();
}

// insertar usuario
if (isset($_POST["envioNombre"]) && isset($_POST["envioApellido"]) && isset($_POST["envioTelefono"])){
    $objUsuario = new usuariosAjax();
    $objUsuario->cedula = $_POST["envioCedula"];
    $objUsuario->nombre = $_POST["envioNombre"];
    $objUsuario->apellido = $_POST["envioApellido"];
    $objUsuario->telefono = $_POST["envioTelefono"];
    $objUsuario->rol = $_POST["envioRol"];
    $objUsuario->email = $_POST["envioEmail"];
    $objUsuario->usuario = $_POST["envioUsuario"];
    $objUsuario->password = $_POST["envioPassword"];
    $objUsuario->imagen = $_FILES["envioImagen"];
    $objUsuario->fnInsertarUsuarios();
}

// modificar usuario
if (isset($_POST["idEditarUsuario"]) && isset($_POST["editarNombre"]) && isset($_POST["editarApellido"]) && isset($_POST["editarTelefono"])) {
    $objUsuario = new usuariosAjax();
    $objUsuario->idUsuario = $_POST["idEditarUsuario"];
    $objUsuario->cedula = $_POST["editarCedula"];
    $objUsuario->nombre = $_POST["editarNombre"];
    $objUsuario->apellido = $_POST["editarApellido"];
    $objUsuario->telefono = $_POST["editarTelefono"];
    $objUsuario->rol = $_POST["editarRol"];
    $objUsuario->email = $_POST["editarEmail"];
    $objUsuario->usuario = $_POST["editarUsuario"];
    $objUsuario->password = $_POST["editarPassword"];

    if ($_POST["hayArchivo"] == "true") {
        $objUsuario->imagen = $_FILES["editarImagen"];
    } else {
        $objUsuario->imagen = null;
    }

    $objUsuario->urlAnterior = $_POST["eliminarImagenAnterior"];
    $objUsuario->fnEditarUsuarios();
}


// eliminar usuario
if (isset($_POST["idEliminarUsuario"]) && isset($_POST["eliminarImagen"])){
    $objUsuario = new usuariosAjax();
    $objUsuario->idUsuario = $_POST["idEliminarUsuario"];
    $objUsuario->imagen = $_POST["eliminarImagen"];
    $objUsuario->fnEliminarUsuarios();
}
