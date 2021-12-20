<?php

class blogsControlador
{

    // listar blogs
    public static function fnCtrCargarBlogs()
    {
        $objRespuesta = blogsModelo::fnMdlCargarBlogs();
        return $objRespuesta;
    }

    // // listar blogs activos
    // public static function fnCtrCargarBlogsActivo($idBlog)
    // {
    //     $objRespuesta = blogsModelo::fnMdlCargarBlogsActivo($idBlog);
    //     return $objRespuesta;
    // }
    
    // // listar Blog activos
    // public static function fnCtrCargarCategoriaActivo($categoria)
    // {
    //     $objRespuesta = blogsModelo::fnMdlCargarCategoriaActivo($categoria);
    //     return $objRespuesta;
    // }

    // Registrar Blog
    public static function fnCtrRegistrarBlogs($codigo, $fecha, $descripcion, $imagen)
    {
        $objRespuesta = blogsModelo::fnMdlRegistrarBlogs($codigo, $fecha, $descripcion,  $imagen);
        return $objRespuesta;
    }

    // Editar Blog
    public static function fnCtrEditarBlogs($idBlog, $codigo, $fecha, $descripcion,  $imagen, $urlAnterior)
    {
        $objRespuesta = blogsModelo::fnMdlEditarBlogs($idBlog, $codigo, $fecha, $descripcion,  $imagen, $urlAnterior);
        return $objRespuesta;
    }

    // Eliminar Blog
    public static function fnCtrEliminarBlogs($idBlog, $imagen)
    {
        $objRespuesta = blogsModelo::fnMdlEliminarBlogs($idBlog, $imagen);
        return $objRespuesta;
    }

}
