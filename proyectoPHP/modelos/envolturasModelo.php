<?php
include_once "conexion.php";

class envolturasModelo
{

    // metodo de listar todos los productos
    public static function fnMdlCargarEnvolturas()
    {
        $objRespuesta = Conexion::conectar()->prepare("SELECT * FROM envoltura");
        $objRespuesta->execute();
        $objEnvolturas = $objRespuesta->fetchAll();
        $objRespuesta = null;
        return $objEnvolturas;
    }

    // metodo de listar todos los Envoltorios
    public static function fnMdlCargarEnvolturasActivo($idEnvoltura)
    {
        $objRespuesta = Conexion::conectar()->prepare("SELECT * FROM envoltura WHERE idEnvoltura=:$idEnvoltura");
        $objRespuesta->bindParam(":".$idEnvoltura,$idEnvoltura);
        $objRespuesta->execute();
        $objEnvolturas = $objRespuesta->fetch();
        $objRespuesta = null;
        return $objEnvolturas;
    }

    // // metodo de listar todos los Envoltorios
    // public static function fnMdlCargarCategoriaActivo($categoria)
    // {
    //     $objRespuesta = Conexion::conectar()->prepare("SELECT * FROM envoltura WHERE categoria=:$categoria");
    //     $objRespuesta->bindParam(":".$categoria,$categoria);
    //     $objRespuesta->execute();
    //     $objEnvolturas= $objRespuesta->fetch();
    //     $objRespuesta = null;
    //     return $objEnvolturas;
    // }

    // // metodo de listar todos los Envoltorios
    // public static function fnMdlCargarEnvolturaActivo($envoltura)
    // {
    //     $objRespuesta = Conexion::conectar()->prepare("SELECT * FROM envoltorio WHERE envoltura=:$envoltura");
    //     $objRespuesta->bindParam(":".$envoltura,$envoltura);
    //     $objRespuesta->execute();
    //     $objEnvolturas = $objRespuesta->fetch();
    //     $objRespuesta = null;
    //     return $objEnvolturas;
    // }


    // metodo de registrar Envoltorios
    public static function fnMdlRegistrarEnvolturas($codigo, $envoltura, $imagen)
    {
        $respuesta = envolturasModelo::subirArchivo($imagen);
        $urlImagen = "archivos/" . $imagen['name'];

        if ($respuesta == "") {
            try {
                $objRespuesta = Conexion::conectar()->prepare("INSERT INTO envoltura(codigo,envoltura,urlimagen)VALUES('$codigo','$envoltura','$urlImagen')");
                if ($objRespuesta->execute()) {
                    $respuesta = true;
                }
            } catch (Exception $e) {
                $respuesta =  $e;
            }
        }

        return $respuesta;
    }

    
    // metodo para editarEnvoltorios
    public static function fnMdlEditarEnvolturas($idEnvoltura, $codigo, $envoltura, $imagen ,$urlAnterior)
    {
        $respuesta = "";
        $urlImagen = "";
        if ($imagen != null){
            $urlImagen = "archivos/" . $imagen['name'];
            $respuesta = envolturasModelo::subirArchivo($imagen);
        }else{
            $urlImagen = $urlAnterior;
        }
        if ($respuesta == ""){
            try {
                $objRespuesta = Conexion::conectar()->prepare("UPDATE envoltura SET codigo = '$codigo',envoltura='$envoltura',urlimagen='$urlImagen' WHERE idenvoltura ='$idEnvoltura'");
                if ($objRespuesta->execute()) {
                    $respuesta = true;
                    if($urlImagen != $urlAnterior){
                        envolturasModelo::eliminarArchivo($urlAnterior);
                    }
                }
            } catch (Exception $e) {
                $respuesta =  $e;
            }
        }
        return $respuesta;
    }


    // eliminar Envoltorios
    public static function fnMdlEliminarEnvolturas($idEnvoltura,$imagen){
        $respuesta = "";
        if ($imagen != null){
            $respuesta = EnvolturasModelo::eliminarArchivo($imagen);
        }
        if ($respuesta == ""){
            try {
                $objRespuesta = Conexion::conectar()->prepare("DELETE FROM envoltura WHERE idenvoltura=:$idEnvoltura");
                $objRespuesta->bindParam(":".$idEnvoltura,$idEnvoltura);
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
