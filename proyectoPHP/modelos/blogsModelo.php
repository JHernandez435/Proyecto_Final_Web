<?php
include_once "conexion.php";

class blogsModelo
{

    // metodo de listar todos los blog
    public static function fnMdlCargarBlogs()
    {
        $objRespuesta = Conexion::conectar()->prepare("SELECT * FROM blog");
        $objRespuesta->execute();
        $objBlog = $objRespuesta->fetchAll();
        $objRespuesta = null;
        return $objBlog;
    }

    // // metodo de listar todos las publicaiones
    // public static function fnMdlCargarBlogsActivo($idBlog)
    // {
    //     $objRespuesta = Conexion::conectar()->prepare("SELECT * FROM blog WHERE idBlog=:$idBlog");
    //     $objRespuesta->bindParam(":".$idBlog,$idBlog);
    //     $objRespuesta->execute();
    //     $objBlog = $objRespuesta->fetch();
    //     $objRespuesta = null;
    //     return $objBlog;
    // }

    // // metodo de listar todos los Blog
    // public static function fnMdlCargarCategoriaActivo($categoria)
    // {
    //     $objRespuesta = Conexion::conectar()->prepare("SELECT * FROM blog WHERE categoria=:$categoria");
    //     $objRespuesta->bindParam(":".$categoria,$categoria);
    //     $objRespuesta->execute();
    //     $objBlog = $objRespuesta->fetch();
    //     $objRespuesta = null;
    //     return $objBlog;
    // }


    // metodo de registrar Blog
    public static function fnMdlRegistrarBlogs($codigo, $fecha, $descripcion, $imagen)
    {
        $respuesta = blogsModelo::subirArchivo($imagen);
        $urlImagen = "archivos/" . $imagen['name'];

        if ($respuesta == "") {
            try {
                $objRespuesta = Conexion::conectar()->prepare("INSERT INTO blog(codigo,fecha,descripcion,urlimagen)VALUES('$codigo','$fecha','$descripcion','$urlImagen')");
                if ($objRespuesta->execute()) {
                    $respuesta = true;
                }
            } catch (Exception $e) {
                $respuesta =  $e;
            }
        }

        return $respuesta;
    }

    
    // metodo para editar Blog
    public static function fnMdlEditarBlogs($idBlog, $codigo, $fecha, $descripcion, $imagen ,$urlAnterior)
    {
        $respuesta = "";
        $urlImagen = "";
        if ($imagen != null){
            $urlImagen = "archivos/" . $imagen['name'];
            $respuesta = blogsModelo::subirArchivo($imagen);
        }else{
            $urlImagen = $urlAnterior;
        }
        if ($respuesta == ""){
            try {
                $objRespuesta = Conexion::conectar()->prepare("UPDATE blog SET codigo = '$codigo',fecha='$fecha',descripcion='$descripcion',urlimagen='$urlImagen' WHERE idblog ='$idBlog'");
                if ($objRespuesta->execute()) {
                    $respuesta = true;
                    if($urlImagen != $urlAnterior){
                        blogsModelo::eliminarArchivo($urlAnterior);                                                        
                    }
                }
            } catch (Exception $e) {
                $respuesta =  $e;
            }
        }
        return $respuesta;
    }

    // eliminar Blog
    public static function fnMdlEliminarBlogs($idBlog,$imagen){
        $respuesta = "";
        if ($imagen != null){
            $respuesta = blogsModelo::eliminarArchivo($imagen);
        }
        if ($respuesta == ""){
            try {
                $objRespuesta = Conexion::conectar()->prepare("DELETE FROM blog WHERE idblog=:$idBlog");
                $objRespuesta->bindParam(":".$idBlog,$idBlog);
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
