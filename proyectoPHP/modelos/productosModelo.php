<?php
include_once "conexion.php";

class productosModelo
{

    // metodo de listar todos los productos
    public static function fnMdlCargarProductos()
    {
        $objRespuesta = Conexion::conectar()->prepare("SELECT * FROM producto");
        $objRespuesta->execute();
        $objProductos = $objRespuesta->fetchAll();
        $objRespuesta = null;
        return $objProductos;
    }

    // metodo de listar todos los productos
    public static function fnMdlCargarProductosActivo($idProducto)
    {
        $objRespuesta = Conexion::conectar()->prepare("SELECT * FROM producto WHERE idProducto=:$idProducto");
        $objRespuesta->bindParam(":".$idProducto,$idProducto);
        $objRespuesta->execute();
        $objProductos = $objRespuesta->fetch();
        $objRespuesta = null;
        return $objProductos;
    }

    // metodo de listar todos los productos
    public static function fnMdlCargarCategoriaActivo($categoria)
    {
        $objRespuesta = Conexion::conectar()->prepare("SELECT * FROM producto WHERE categoria=:$categoria");
        $objRespuesta->bindParam(":".$categoria,$categoria);
        $objRespuesta->execute();
        $objProductos = $objRespuesta->fetchAll();
        $objRespuesta = null;
        return $objProductos;
    }

    // metodo de listar todos los productos
    public static function fnMdlCargarEnvolturaActivo($envoltura)
    {
        $objRespuesta = Conexion::conectar()->prepare("SELECT * FROM envoltura WHERE envoltura=:$envoltura");
        $objRespuesta->bindParam(":".$envoltura,$envoltura);
        $objRespuesta->execute();
        $objProductos = $objRespuesta->fetchAll();
        $objRespuesta = null;
        return $objProductos;
    }


    // metodo de registrar productos
    public static function fnMdlRegistrarProductos($codigo, $nombre, $categoria, $descripcion, $cantidad, $precio,  $imagen)
    {
        $respuesta = productosModelo::subirArchivo($imagen);
        $urlImagen = "archivos/" . $imagen['name'];

        if ($respuesta == "") {
            try {
                $objRespuesta = Conexion::conectar()->prepare("INSERT INTO producto(codigo,nombre,categoria,descripcion,cantidad,precio,urlimagen)VALUES('$codigo','$nombre','$categoria','$descripcion','$cantidad','$precio','$urlImagen')");
                if ($objRespuesta->execute()) {
                    $respuesta = true;
                }
            } catch (Exception $e) {
                $respuesta =  $e;
            }
        }

        return $respuesta;
    }

    
    // metodo para editar productos
    public static function fnMdlEditarProductos($idProducto, $codigo, $nombre, $categoria, $descripcion, $cantidad, $precio, $imagen ,$urlAnterior)
    {
        $respuesta = "";
        $urlImagen = "";
        if ($imagen != null){
            $urlImagen = "archivos/" . $imagen['name'];
            $respuesta = productosModelo::subirArchivo($imagen);
        }else{
            $urlImagen = $urlAnterior;
        }
        if ($respuesta == ""){
            try {
                $objRespuesta = Conexion::conectar()->prepare("UPDATE producto SET codigo = '$codigo',nombre='$nombre',categoria='$categoria',descripcion='$descripcion',cantidad='$cantidad',precio='$precio',urlimagen='$urlImagen' WHERE idproducto ='$idProducto'");
                if ($objRespuesta->execute()) {
                    $respuesta = true;
                    if($urlImagen != $urlAnterior){
                    productosModelo::eliminarArchivo($urlAnterior);
                    }
                }
            } catch (Exception $e) {
                $respuesta =  $e;
            }
        }
        return $respuesta;
    }


    // eliminar productos
    public static function fnMdlEliminarProductos($idProducto,$imagen){
        $respuesta = "";
        if ($imagen != null){
            $respuesta = ProductosModelo::eliminarArchivo($imagen);
        }
        if ($respuesta == ""){
            try {
                $objRespuesta = Conexion::conectar()->prepare("DELETE FROM producto WHERE idproducto=:$idProducto");
                $objRespuesta->bindParam(":".$idProducto,$idProducto);
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

    public static function mdlActualizarProductos($listaProductos){

        $respuesta = "";
        $mensaje = "";
        $totalElementos = count($listaProductos);
        for ($i=0; $i < $totalElementos; $i++) { 
            $idProducto = $listaProductos[$i]->idproductos;
            $cantidadStock = intval($listaProductos[$i]->cantidadStock);
            $cantidadCompra = intval($listaProductos[$i]->cantidades);
            $nuevoStock = $cantidadStock - $cantidadCompra;


            $objRespuesta = Conexion::conectar()->prepare("UPDATE productos SET cantidad='$nuevoStock' WHERE idproductos ='$idProducto'");
        }

        // if ($i = $totalElementos){
        //     //$i = $totalElementos
        //     $respuesta = "actualizado";
        // }
        if ($objRespuesta->execute()) {
            $respuesta = true;
        }

        //return $mensaje;
        return $respuesta;

    }


}
