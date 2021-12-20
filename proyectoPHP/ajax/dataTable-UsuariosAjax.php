<?php
include_once "../controlador/usuariosControlador.php";
include_once "../modelos/usuariosModelo.php";

class dataTableUsuarios{
    public function fnCargarTabla(){
        $objRespuesta = usuariosControlador::fnCtrCargarUsuarios();
        if (count($objRespuesta) >= 1){
            $objJson = '{
                "data": [';
                for ($i=0; $i < count($objRespuesta); $i++) { 
                    $cedula = $objRespuesta[$i]["cedula"];
                    $nombre = $objRespuesta[$i]["nombre"];
                    $apellido = $objRespuesta[$i]["apellido"];
                    $telefono = $objRespuesta[$i]["telefono"];
                    $rol = $objRespuesta[$i]["rol"];
                    $email = $objRespuesta[$i]["email"];
                    $usuario = $objRespuesta[$i]["usuario"];
                    $password = $objRespuesta[$i]["passwordx"];
                    $imagen = $objRespuesta[$i]["urlimagen"];

                    $objBotones = "<div class='btn-group'>";
                    $objBotones .= "<button id='btnEditar' class='btn btn-sm btn-primary' title='editar' data-toggle='modal' data-target='#modalEditarUsuario' idUsuario='".$objRespuesta[$i]["idusuario"]."' cedula='".$cedula."' nombre='".$nombre."' apellido='".$apellido."' telefono='".$telefono."' rol='".$rol."' email='".$email."' usuario='".$usuario."' password='".$password."' imagen='".$imagen."'><i class='fa fa-edit'></i></button>";
                    $objBotones .= "<button id='btnEliminar' class='btn btn-sm btn-danger' title='eliminar' idUsuario='".$objRespuesta[$i]["idusuario"]."' imagen='".$imagen."'><i class='far fa-window-close'></i></button>";
                    $objBotones .= "</div>";

                    $objImagen = "<img src='".$imagen."' width='80' heigth='80'>";

                    $objJson .='[
                        "'.($i+1).'",
                        "'.$cedula.'",
                        "'.$nombre.'",
                        "'.$apellido.'",
                        "'.$telefono.'",
                        "'.$rol.'",
                        "'.$email.'",
                        "'.$usuario.'",
                        "'.$password.'",
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
                    "",
                    ""
                  ]
                ]
              }';
        }

        echo $objJson;

    }
}

$objTabla = new dataTableUsuarios();
$objTabla->fnCargarTabla();