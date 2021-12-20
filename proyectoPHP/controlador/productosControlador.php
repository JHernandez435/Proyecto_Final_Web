<?php

class productosControlador
{

    // listar productos
    public static function fnCtrCargarProductos()
    {
        $objRespuesta = productosModelo::fnMdlCargarProductos();
        return $objRespuesta;
    }

    // listar productos activos
    public static function fnCtrCargarProductosActivo($idProducto)
    {
        $objRespuesta = productosModelo::fnMdlCargarProductosActivo($idProducto);
        return $objRespuesta;
    }
    
    // listar categoria activos
    public static function fnCtrCargarCategoriaActivo($categoria)
    {
        $objRespuesta = productosModelo::fnMdlCargarCategoriaActivo($categoria);
        return $objRespuesta;
    }

    // listar envolturas activos
    public static function fnCtrCargarEnvolturaActivo($envoltura)
    {
        $objRespuesta = productosModelo::fnMdlCargarEnvolturaActivo($envoltura);
        return $objRespuesta;
    }

    // Registrar productos
    public static function fnCtrRegistrarProductos($codigo, $nombre, $categoria, $descripcion, $cantidad, $precio, $imagen)
    {
        $objRespuesta = productosModelo::fnMdlRegistrarProductos($codigo, $nombre, $categoria, $descripcion, $cantidad, $precio, $imagen);
        return $objRespuesta;
    }

    // Editar productos
    public static function fnCtrEditarProductos($idProducto, $codigo, $nombre, $categoria, $descripcion, $cantidad, $precio, $imagen, $urlAnterior)
    {
        $objRespuesta = productosModelo::fnMdlEditarProductos($idProducto, $codigo, $nombre, $categoria, $descripcion, $cantidad, $precio, $imagen, $urlAnterior);
        return $objRespuesta;
    }

    // Eliminar productos
    public static function fnCtrEliminarProductos($idProducto, $imagen)
    {
        $objRespuesta = productosModelo::fnMdlEliminarProductos($idProducto, $imagen);
        return $objRespuesta;
    }

    
    public static function ctrActualizarProductos($listaProductos){
        $objRespuesta = productosModelo::mdlActualizarProductos($listaProductos);
        return $objRespuesta;
    }

}
