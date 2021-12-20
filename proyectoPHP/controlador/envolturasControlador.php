<?php

class envolturasControlador
{

    // listar envoltorios
    public static function fnCtrCargarEnvolturas()
    {
        $objRespuesta = envolturasModelo::fnMdlCargarEnvolturas();
        return $objRespuesta;
    }

    // listar envoltorios activos
    public static function fnCtrCargarEnvolturasActivo($idEnvoltura)
    {
        $objRespuesta = envolturasModelo::fnMdlCargarEnvolturasActivo($idEnvoltura);
        return $objRespuesta;
    }
    
    // // listar categoria activos
    // public static function fnCtrCargarCategoriaActivo($categoria)
    // {
    //     $objRespuesta = envolturasModelo::fnMdlCargarCategoriaActivo($categoria);
    //     return $objRespuesta;
    // }

    // // listar envolturas activos
    // public static function fnCtrCargarEnvolturaActivo($envoltura)
    // {
    //     $objRespuesta = envolturasModelo::fnMdlCargarEnvolturaActivo($envoltura);
    //     return $objRespuesta;
    // }

    // Registrar envoltorios
    public static function fnCtrRegistrarEnvolturas($codigo, $envoltura, $imagen)
    {
        $objRespuesta = envolturasModelo::fnMdlRegistrarEnvolturas($codigo, $envoltura, $imagen);
        return $objRespuesta;
    }

    // Editar envoltorios
    public static function fnCtrEditarEnvolturas($idEnvoltura, $codigo, $envoltura, $imagen, $urlAnterior)
    {
        $objRespuesta = envolturasModelo::fnMdlEditarEnvolturas($idEnvoltura, $codigo, $envoltura, $imagen, $urlAnterior);
        return $objRespuesta;
    }

    // Eliminar envoltorios
    public static function fnCtrEliminarEnvolturas($idEnvoltura, $imagen)
    {
        $objRespuesta = envolturasModelo::fnMdlEliminarEnvolturas($idEnvoltura, $imagen);
        return $objRespuesta;
    }

}
