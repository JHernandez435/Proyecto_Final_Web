<?php
include_once "../controlador/blogsControlador.php";
include_once "../modelos/blogsModelo.php";

class dataTableBlogs{
    public function fnCargarTabla(){
        $objRespuesta = blogsControlador::fnCtrCargarBlogs();
        if (count($objRespuesta) >= 1){
            $objJson = '{
                "data": [';
                for ($i=0; $i < count($objRespuesta); $i++) { 
                    $codigo = $objRespuesta[$i]["codigo"];
                    $fecha = $objRespuesta[$i]["fecha"];
                    $descripcion = $objRespuesta[$i]["descripcion"];
                    $imagen = $objRespuesta[$i]["urlimagen"];

                    $objBotones = "<div class='btn-group'>";
                    $objBotones .= "<button id='btnEditar' class='btn btn-sm btn-primary' title='editar' data-toggle='modal' data-target='#modalEditarBlog' idBlog='".$objRespuesta[$i]["idblog"]."' codigo='".$codigo."' fecha='".$fecha."' descripcion='".$descripcion."' imagen='".$imagen."'><i class='fa fa-edit'></i></button>";
                    $objBotones .= "<button id='btnEliminar' class='btn btn-sm btn-danger' title='eliminar' idBlog='".$objRespuesta[$i]["idblog"]."' imagen='".$imagen."'><i class='far fa-window-close'></i></button>";
                    $objBotones .= "</div>";

                    $objImagen = "<img src='".$imagen."' width='80' heigth='80'>";

                    $objJson .='[
                        "'.($i+1).'",
                        "'.$codigo.'",
                        "'.$fecha.'",
                        "'.$descripcion.'",
                        "'.$objImagen.'",
                        "'.$objBotones.'"
                      ],';
                }
                $objJson = substr($objJson,0,-1);
                $objJson .=']}';

        }else{
            $objJson = '{
                "data": [
                  [
                    "No hay registros disponibles",
                    "",
                    "",
                    "",
                    "",
                    ""
                  ]
                ]
              }';
        }

        echo $objJson;

    }
}

$objTabla = new dataTableBlogs();
$objTabla->fnCargarTabla();
