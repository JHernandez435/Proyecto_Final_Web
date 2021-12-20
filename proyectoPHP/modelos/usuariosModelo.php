<?php
include_once "conexion.php";

class usuariosModelo
{

    // metodo de listar todos los usuarios
    public static function fnMdlCargarUsuarios()
    {
        $objRespuesta = Conexion::conectar()->prepare("SELECT * FROM usuario");
        $objRespuesta->execute();
        $objUsuarios = $objRespuesta->fetchAll();
        $objRespuesta = null;
        return $objUsuarios;
    }


    // metodo de registrar usuarios
    public static function fnMdlInsertarUsuarios($cedula, $nombre, $apellido, $usuario, $password, $rol)
    {
        $respuesta = "";

        if ($respuesta == "") {
            try {
                $objRespuesta = Conexion::conectar()->prepare("INSERT INTO usuario(cedula,nombre,apellido,usuario,passwordx,rol)VALUES('$cedula','$nombre','$apellido','$usuario','$password','$rol')");
                if ($objRespuesta->execute()) {
                    $respuesta = true;
                }
            } catch (Exception $e) {
                $respuesta =  $e;
            }
        }

        return $respuesta;
    }


    // metodo de registrar usuarios
    public static function fnMdlRegistrarUsuarios($cedula, $nombre, $apellido, $telefono, $rol, $email, $usuario, $password, $imagen)
    {
        $respuesta = usuariosModelo::subirArchivo($imagen);
        $urlImagen = "archivos/" . $imagen['name'];

        if ($respuesta == "") {
            try {
                $objRespuesta = Conexion::conectar()->prepare("INSERT INTO usuario(cedula,nombre,apellido,telefono,rol,email,usuario,passwordx,urlimagen)VALUES('$cedula','$nombre','$apellido','$telefono','$rol','$email','$usuario','$password','$urlImagen')");
                if ($objRespuesta->execute()) {
                    $respuesta = true;
                }
            } catch (Exception $e) {
                $respuesta =  $e;
            }
        }

        return $respuesta;
    }

    // metodo para editar usuarios
    public static function fnMdlEditarUsuarios($idUsuario, $cedula, $nombre, $apellido, $telefono, $rol, $email, $usuario, $password, $imagen ,$urlAnterior)
    {
        $respuesta = "";
        $urlImagen = "";
        if ($imagen != null){
            $urlImagen = "archivos/" . $imagen['name'];
            $respuesta = usuariosModelo::subirArchivo($imagen);
        }else{
            $urlImagen = $urlAnterior;
        }
        if ($respuesta == ""){
            try {
                $objRespuesta = Conexion::conectar()->prepare("UPDATE usuario SET cedula = '$cedula',nombre = '$nombre',apellido= '$apellido',telefono= '$telefono',rol= '$rol',email= '$email',usuario= '$usuario',passwordx= '$password',urlimagen='$urlImagen' WHERE idusuario ='$idUsuario'");
                if ($objRespuesta->execute()) {
                    $respuesta = true;
                    if($urlImagen != $urlAnterior){
                    usuariosModelo::eliminarArchivo($urlAnterior);
                    }
                }
            } catch (Exception $e) {
                $respuesta =  $e;
            }
        }
        return $respuesta;
    }


    // eliminar usuarios
    public static function fnMdlEliminarUsuarios($idUsuario,$imagen){
        $respuesta = "";
        if ($imagen != null){
            $respuesta = usuariosModelo::eliminarArchivo($imagen);
        }

        if ($respuesta == ""){
            try {
                $objRespuesta = Conexion::conectar()->prepare("DELETE FROM usuario WHERE idusuario=:$idUsuario");
                $objRespuesta->bindParam(":".$idUsuario,$idUsuario);
                if ($objRespuesta->execute()) {
                    $respuesta = true;
                }

            } catch (Exception $e) {
                $respuesta = $e;
            }
        }

        return $respuesta;

    }


    // Metodo encargado de subir archivos
    public static function subirArchivo($objArchivo)
    {
        $respuesta = "";
        $ruta = "../archivos/";
        $nombreImagen = $objArchivo['name'];
        $logitudTotal = strlen($nombreImagen);
        $extencion = substr($nombreImagen, $logitudTotal - 4, $logitudTotal);

        if ($extencion == ".jpg" || $extencion == ".png" || $extencion == "jpeg") {
            if (move_uploaded_file($objArchivo['tmp_name'], $ruta . $nombreImagen)) {
                $respuesta = "";
            } else {
                $respuesta = "error al subir el archivo";
            }
        } else {
            $respuesta = "no es posible subir archivos diferentes a  .jpg,.png,.jpeg";
        }

        return $respuesta;
    }


    // metodo para eliminar archivos
    public static function eliminarArchivo($urlAnterior){
        $respuesta = "";
        if ($urlAnterior != ""){
            try {
                $respuesta = unlink("../".$urlAnterior);
                if (!$respuesta){
                    $respuesta = "error al eliminar el archivo,no se encontro en el directorio";
                }else{
                    $respuesta = "";
                }
            } catch (Exception $e) {
                $respuesta = $e;
            }
        }
        return $respuesta;
    }

}
