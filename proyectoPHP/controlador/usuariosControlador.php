<?php

class usuariosControlador
{

    // listar usuarios
    public static function fnCtrCargarUsuarios()
    {
        $objRespuesta = usuariosModelo::fnMdlCargarUsuarios();
        return $objRespuesta;
    }

    // Registrar usuarios
    public static function fnCtrInsertarUsuarios($cedula, $nombre, $apellido, $usuario, $password, $rol)
    {
        $objRespuesta = usuariosModelo::fnMdlInsertarUsuarios($cedula, $nombre, $apellido, $usuario, $password, $rol);
        return $objRespuesta;
    }

    // Registrar usuarios
    public static function fnCtrRegistrarUsuarios($cedula, $nombre, $apellido, $telefono, $rol, $email, $usuario, $password, $imagen)
    {
        $objRespuesta = usuariosModelo::fnMdlRegistrarUsuarios($cedula, $nombre, $apellido, $telefono, $rol, $email, $usuario, $password, $imagen);
        return $objRespuesta;
    }

    // Editar usuarios
    public static function fnCtrEditarUsuarios($idUsuario, $cedula, $nombre, $apellido, $telefono, $rol, $email, $usuario, $password, $imagen, $urlAnterior)
    {
        $objRespuesta = usuariosModelo::fnMdlEditarUsuarios($idUsuario, $cedula, $nombre, $apellido, $telefono, $rol, $email, $usuario, $password, $imagen, $urlAnterior);
        return $objRespuesta;
    }

    // Eliminar usuarios
    public static function fnCtrEliminarUsuarios($idUsuario, $imagen)
    {
        $objRespuesta = usuariosModelo::fnMdlEliminarUsuarios($idUsuario, $imagen);
        return $objRespuesta;
    }


}
