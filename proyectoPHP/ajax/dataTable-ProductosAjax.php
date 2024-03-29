<?php
include_once "../controlador/productosControlador.php";
include_once "../modelos/productosModelo.php";

class dataTableProductos{
    public function fnCargarTabla(){
        $objRespuesta = productosControlador::fnCtrCargarProductos();
        if (count($objRespuesta) >= 1){
            $objJson = '{
                "data": [';
                for ($i=0; $i < count($objRespuesta); $i++) { 
                    $codigo = $objRespuesta[$i]["codigo"];
                    $nombre = $objRespuesta[$i]["nombre"];
                    $categoria = $objRespuesta[$i]["categoria"];
                    $descripcion = $objRespuesta[$i]["descripcion"];
                    $cantidad = $objRespuesta[$i]["cantidad"];
                    $precio = $objRespuesta[$i]["precio"];
                    $imagen = $objRespuesta[$i]["urlimagen"];

                    $objBotones = "<div class='btn-group'>";
                    // $objBotones .= "<button id='btnEditar' class='btn btn-sm btn-primary' title='editar' data-toggle='modal' data-target='#modalEditarProducto' idProducto='".$objRespuesta[$i]["idproducto"]."' codigo='".$codigo."' nombre='".$nombre."' categoria='".$categoria."' descripcion='".$descripcion."' cantidad='".$cantidad."' precio='".$precio."' imagen='".$imagen."'><i class='fa fa-edit'></i></button>";
                    // $objBotones .= "<button id='btnEliminar' class='btn btn-sm btn-danger' title='eliminar' idProducto='".$objRespuesta[$i]["idproducto"]."' imagen='".$imagen."'><i class='far fa-window-close'></i></button>";
                    $objBotones .= "</div>";

                    $objImagen = "<img src='".$imagen."' width='80' heigth='80'>";

                    $objJson .='[
                        "'.($i+1).'",
                        "'.$codigo.'",
                        "'.$nombre.'",
                        "'.$categoria.'",
                        "'.$descripcion.'",
                        "'.$cantidad.'",
                        "'.$precio.'",
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

$objTabla = new dataTableProductos();
$objTabla->fnCargarTabla();
