<?php
require_once "controlador/productosControlador.php";
require_once "modelos/productosModelo.php";
?>

<?php
    $estado = "";
    if (isset($_GET["transactionState"])){
        $estado = $_GET["transactionState"]; 
    }
?>


<!doctype html>
<html class="no-js" lang="zxx">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Proyecto | Inicio</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- css1 aquí -->
    <link rel="stylesheet" href="vistas/css1/bootstrap.min.css">
    <link rel="stylesheet" href="vistas/css1/owl.carousel.min.css">
    <link rel="stylesheet" href="vistas/css1/magnific-popup.css">
    <link rel="stylesheet" href="vistas/css1/font-awesome.min.css">
    <link rel="stylesheet" href="vistas/css1/themify-icons.css">
    <link rel="stylesheet" href="vistas/css1/nice-select.css">
    <link rel="stylesheet" href="vistas/css1/flaticon.css">
    <link rel="stylesheet" href="vistas/css1/gijgo.css">
    <link rel="stylesheet" href="vistas/css1/animate.css">
    <link rel="stylesheet" href="vistas/css1/slicknav.css">
    <link rel="stylesheet" href="vistas/css1/style.css">
    <link rel="stylesheet" type="text/css" href="vistas/icon/icofont/css/icofont.css">

    <!-- <link rel="stylesheet" href="css1/responsive.css"> -->


    <!-- Links Personalizados o agregados -->
    <link rel="stylesheet" type="text/css" href="vistas/css/panel.css">
    <link rel="stylesheet" href="vistas/css/main.css">
    <link rel="stylesheet" href="vistas/css/scroll.css">
    <link rel="stylesheet" href="vistas/css/estilos.css">
    <!-- <link rel="stylesheet" href="vistas/css/estilosdl.css -->

</head>

<body>

    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center no-gutters">

                        <div class="col-xl-1 col-lg-2">
                            <div class="logo-img">
                                <a href="index.php">
                                    <img src="images/logo.png" width="200" height="120" alt="">
                                </a>
                            </div>
                        </div>

                        <div class="col-xl-7 col-lg-7">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="active" href="index.php">Inicio</a></li>
                                        <li><a href="index.php#home">Regalos</a></li>
                                        <li><a href="#">blog <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="blogD.php">blog</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contacto.php">Contacto</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                            <div class="log_chat_area d-flex align-items-center">
                                <a href="#test-form" class="login popup-with-form">
                                    <i class="flaticon-user"></i>
                                    <span>Iniciar Sesion</span>
                                </a>
                                <div class="live_chat_btn">
                                    <a href="https://api.whatsapp.com/send?phone=573114952766&text=¿Qué servicios ofrecen?">
                                        <img src="archivos/wp.png" width="80" height="80">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- fin de Encabezado -->

    <!-- inicio del área deslizante -->
    <div class="slider_area ">
        <div class="single_slider d-flex align-items-center justify-content-center slider_bg_1">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-6 col-md-6">
                        <div class="illastrator_png">
                            <img src="images/banner/edu_ilastration.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <div class="slider_info">
                            <h3>¡Los mejores momentos <br>
                                son con regalos!<br>
                            </h3>
                            <a href="#" class="boxed_btn">Explora nuestros productos</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- extremo del área deslizante -->



    <!-- comienzan los cursos populares -->
    <div class="popular_courses">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="course_nav">
                        <nav>
                            <ul class="nav" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Todos los regalos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" categoria="Dama" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Damas</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" categoria="Caballero" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Caballleros</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" categoria="Juguetes" id="design-tab" data-toggle="tab" href="#design" role="tab" aria-controls="design" aria-selected="false">Juguetes</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" categoria="Retratos" id="Web-tab" data-toggle="tab" href="#Web" role="tab" aria-controls="design" aria-selected="false">Retratos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" categoria="Ropa" id="Web-tab1" data-toggle="tab" href="#Web1" role="tab" aria-controls="design" aria-selected="false">Ropa</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" categoria="Golleria" id="Web-tab11" data-toggle="tab" href="#Web11" role="tab" aria-controls="design" aria-selected="false">Golleria</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" categoria="Lenseria" id="Adobe-XD-tab8" data-toggle="tab" href="#Adobe-XD8" role="tab" aria-controls="design" aria-selected="false">Lenseria</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" categoria="Adornos" id="Adobe-XD-tab9" data-toggle="tab" href="#Adobe-XD9" role="tab" aria-controls="design" aria-selected="false">Adornos</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!-- TODO Carrusel de productos  -->
        <div class="all_courses">
            <div class="container">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">

                            <?php

                            $objProductos = productosControlador::fnCtrCargarProductos();
                            foreach ($objProductos as $key => $value) {

                                $idproducto = $value['idproducto'];
                                $codigo = $value['codigo'];
                                $nombre = $value['nombre'];
                                $categoria = $value['categoria'];
                                $descripcion = $value['descripcion'];
                                $cantidad = $value['cantidad'];
                                $precio = $value['precio'];
                                $envoltura = $value['envoltura'];
                                $urlimagen = $value['urlimagen'];

                            ?>

                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="single_courses">
                                        <div class="thumb">
                                            <a href="#btn-Detalle">
                                                <img src="<?php echo $urlimagen; ?>" width="10" heigth="100" alt="">
                                            </a>
                                        </div>
                                        <center>
                                            <div class="option-hover">
                                                <br><button id="btn-Carrito" type="button" class="btn btn-danger btn-icon waves-effect waves-light m-r-15 hvr-bounce-in option-icon">
                                                    <i class="icofont icofont-cart-alt f-20"></i>
                                                </button>
                                                <button id="btn-Detalle" producto="<?php echo $idproducto; ?>" envoltura="<?php echo $envoltura; ?>" type="button" class="btn btn-primary btn-icon waves-effect waves-light m-r-15 hvr-bounce-in option-icon">
                                                    <i class="icofont icofont-eye-alt f-20"></i>
                                                </button>
                                                <button id="btn-Comprar" idproductos="<?php echo $idproducto; ?>" codigo="<?php echo $codigo; ?>" nombre="<?php echo $nombre; ?>" precio="<?php echo $precio; ?>" urlimagen="<?php echo $urlimagen; ?>" type="button" class="btn btn-danger btn-icon waves-effect waves-light hvr-bounce-in option-icon">
                                                    <i class="icofont icofont-heart-alt f-20"></i>
                                                </button>
                                            </div>
                                        </center>

                                        <div class="courses_info">
                                            <span><?php echo $nombre; ?>:</span>
                                            <rigth><span><?php echo $categoria; ?></span></rigth>
                                            <h3><a href="#"><?php echo $descripcion; ?><br>
                                                </a></h3>
                                            <div class="star_prise d-flex justify-content-between">
                                                <div class="star">
                                                    <i class="flaticon-mark-as-favorite-star"></i>
                                                    <span>(4.5)</span>
                                                </div>
                                                <div class="prise">
                                                    <span class="offer">$<?php echo $precio; ?></span>
                                                    <span class="active_prise">
                                                        $35%
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>

                        </div>
                    </div>

                    <?php

                    $categoria = 'Dama';
                    $objProducto = productosControlador::fnCtrCargarCategoriaActivo($categoria);

                    ?>

                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-6  col-md-6">
                                <?php
                                foreach ($objProducto as $key => $value) {
                                    $idproducto = $value['idproducto'];
                                    $codigo = $value['codigo'];
                                    $nombre = $value['nombre'];
                                    $categoria = $value['categoria'];
                                    $descripcion = $value['descripcion'];
                                    $cantidad = $value['cantidad'];
                                    $precio = $value['precio'];
                                    $envoltura = $value['envoltura'];
                                    $urlimagen = $value['urlimagen'];
    

                                    echo '<div class="single_courses">
                                        <div class="thumb">
                                            <a href="#">
                                            <img class="img img-fluid" src='.$urlimagen.' alt="Big_ Details">
                                            </a>
                                        </div>
                                        <center>
                                            <div class="option-hover">
                                                <br><button id="btn-Carrito" type="button" class="btn btn-danger btn-icon waves-effect waves-light m-r-15 hvr-bounce-in option-icon">
                                                    <i class="icofont icofont-cart-alt f-20"></i>
                                                </button>
                                                <button id="btn-Detalle" producto="'.$idproducto.'" envoltura="'.$envoltura.'" type="button" class="btn btn-primary btn-icon waves-effect waves-light m-r-15 hvr-bounce-in option-icon">
                                                    <i class="icofont icofont-eye-alt f-20"></i>
                                                </button>
                                                <button id="btn-Comprar" idproductos="'.$idproducto.'" codigo="'.$codigo.'" nombre="'.$nombre.'" precio="'.$precio.'" urlimagen="'.$urlimagen.'" type="button" class="btn btn-danger btn-icon waves-effect waves-light hvr-bounce-in option-icon">
                                                    <i class="icofont icofont-heart-alt f-20"></i>
                                                </button>
                                            </div>
                                        </center>
                                        
                                        <div class="courses_info">
                                            <span>'.$nombre.'</span>
                                            <rigth><span>'.$categoria.'</span></rigth>
                                            <h3><a href="#">'.$descripcion.'<br>
                                                </a></h3>
                                            <div class="star_prise d-flex justify-content-between">
                                                <div class="star">
                                                    <i class="flaticon-mark-as-favorite-star"></i>
                                                    <span>(4.5)</span>
                                                </div>
                                                <div class="prise">
                                                    <span class="offer">'.$precio.'</span>
                                                    <span class="active_prise">
                                                        $35%
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>

                    <?php
                    $categoria = 'Caballero';
                    $objProducto = productosControlador::fnCtrCargarCategoriaActivo($categoria);
                    ?>


                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-6">
                            <?php
                                foreach ($objProducto as $key => $value) {
                                    $idproducto = $value['idproducto'];
                                    $codigo = $value['codigo'];
                                    $nombre = $value['nombre'];
                                    $categoria = $value['categoria'];
                                    $descripcion = $value['descripcion'];
                                    $cantidad = $value['cantidad'];
                                    $precio = $value['precio'];
                                    $envoltura = $value['envoltura'];
                                    $urlimagen = $value['urlimagen'];
    

                                    echo '<div class="single_courses">
                                        <div class="thumb">
                                            <a href="#">
                                            <img class="img img-fluid" src='.$urlimagen.' alt="Big_ Details">
                                            </a>
                                        </div>
                                        <center>
                                            <div class="option-hover">
                                                <br><button id="btn-Carrito" type="button" class="btn btn-danger btn-icon waves-effect waves-light m-r-15 hvr-bounce-in option-icon">
                                                    <i class="icofont icofont-cart-alt f-20"></i>
                                                </button>
                                                <button id="btn-Detalle" producto="'.$idproducto.'" envoltura="'.$envoltura.'" type="button" class="btn btn-primary btn-icon waves-effect waves-light m-r-15 hvr-bounce-in option-icon">
                                                    <i class="icofont icofont-eye-alt f-20"></i>
                                                </button>
                                                <button id="btn-Comprar" idproductos="'.$idproducto.'" codigo="'.$codigo.'" nombre="'.$nombre.'" precio="'.$precio.'" urlimagen="'.$urlimagen.'" type="button" class="btn btn-danger btn-icon waves-effect waves-light hvr-bounce-in option-icon">
                                                    <i class="icofont icofont-heart-alt f-20"></i>
                                                </button>
                                            </div>
                                        </center>
                                        
                                        <div class="courses_info">
                                            <span>'.$nombre.'</span>
                                            <rigth><span>'.$categoria.'</span></rigth>
                                            <h3><a href="#">'.$descripcion.'<br>
                                                </a></h3>
                                            <div class="star_prise d-flex justify-content-between">
                                                <div class="star">
                                                    <i class="flaticon-mark-as-favorite-star"></i>
                                                    <span>(4.5)</span>
                                                </div>
                                                <div class="prise">
                                                    <span class="offer">'.$precio.'</span>
                                                    <span class="active_prise">
                                                        $35%
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>

                    <?php
                    $categoria = 'Juguetes';
                    $objProducto = productosControlador::fnCtrCargarCategoriaActivo($categoria);
                    ?>

                    <div class="tab-pane fade" id="design" role="tabpanel" aria-labelledby="design-tab">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-6 ">
                            <?php
                                foreach ($objProducto as $key => $value) {
                                    $idproducto = $value['idproducto'];
                                    $codigo = $value['codigo'];
                                    $nombre = $value['nombre'];
                                    $categoria = $value['categoria'];
                                    $descripcion = $value['descripcion'];
                                    $cantidad = $value['cantidad'];
                                    $precio = $value['precio'];
                                    $envoltura = $value['envoltura'];
                                    $urlimagen = $value['urlimagen'];
    

                                    echo '<div class="single_courses">
                                        <div class="thumb">
                                            <a href="#">
                                            <img class="img img-fluid" src='.$urlimagen.' alt="Big_ Details">
                                            </a>
                                        </div>
                                        <center>
                                            <div class="option-hover">
                                                <br><button id="btn-Carrito" type="button" class="btn btn-danger btn-icon waves-effect waves-light m-r-15 hvr-bounce-in option-icon">
                                                    <i class="icofont icofont-cart-alt f-20"></i>
                                                </button>
                                                <button id="btn-Detalle" producto="'.$idproducto.'" envoltura="'.$envoltura.'" type="button" class="btn btn-primary btn-icon waves-effect waves-light m-r-15 hvr-bounce-in option-icon">
                                                    <i class="icofont icofont-eye-alt f-20"></i>
                                                </button>
                                                <button id="btn-Comprar" idproductos="'.$idproducto.'" codigo="'.$codigo.'" nombre="'.$nombre.'" precio="'.$precio.'" urlimagen="'.$urlimagen.'" type="button" class="btn btn-danger btn-icon waves-effect waves-light hvr-bounce-in option-icon">
                                                    <i class="icofont icofont-heart-alt f-20"></i>
                                                </button>
                                            </div>
                                        </center>
                                        
                                        <div class="courses_info">
                                            <span>'.$nombre.'</span>
                                            <rigth><span>'.$categoria.'</span></rigth>
                                            <h3><a href="#">'.$descripcion.'<br>
                                                </a></h3>
                                            <div class="star_prise d-flex justify-content-between">
                                                <div class="star">
                                                    <i class="flaticon-mark-as-favorite-star"></i>
                                                    <span>(4.5)</span>
                                                </div>
                                                <div class="prise">
                                                    <span class="offer">'.$precio.'</span>
                                                    <span class="active_prise">
                                                        $35%
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>

                    <?php
                    $categoria = 'Retratos';
                    $objProducto = productosControlador::fnCtrCargarCategoriaActivo($categoria);
                    ?>

                    <div class="tab-pane fade" id="Web" role="tabpanel" aria-labelledby="Web-tab">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <?php
                                foreach ($objProducto as $key => $value) {
                                    $idproducto = $value['idproducto'];
                                    $codigo = $value['codigo'];
                                    $nombre = $value['nombre'];
                                    $categoria = $value['categoria'];
                                    $descripcion = $value['descripcion'];
                                    $cantidad = $value['cantidad'];
                                    $precio = $value['precio'];
                                    $envoltura = $value['envoltura'];
                                    $urlimagen = $value['urlimagen'];
    

                                    echo '<div class="single_courses">
                                        <div class="thumb">
                                            <a href="#">
                                            <img class="img img-fluid" src='.$urlimagen.' alt="Big_ Details">
                                            </a>
                                        </div>
                                        <center>
                                            <div class="option-hover">
                                                <br><button id="btn-Carrito" type="button" class="btn btn-danger btn-icon waves-effect waves-light m-r-15 hvr-bounce-in option-icon">
                                                    <i class="icofont icofont-cart-alt f-20"></i>
                                                </button>
                                                <button id="btn-Detalle" producto="'.$idproducto.'" envoltura="'.$envoltura.'" type="button" class="btn btn-primary btn-icon waves-effect waves-light m-r-15 hvr-bounce-in option-icon">
                                                    <i class="icofont icofont-eye-alt f-20"></i>
                                                </button>
                                                <button id="btn-Comprar" idproductos="'.$idproducto.'" codigo="'.$codigo.'" nombre="'.$nombre.'" precio="'.$precio.'" urlimagen="'.$urlimagen.'" type="button" class="btn btn-danger btn-icon waves-effect waves-light hvr-bounce-in option-icon">
                                                    <i class="icofont icofont-heart-alt f-20"></i>
                                                </button>
                                            </div>
                                        </center>
                                        
                                        <div class="courses_info">
                                            <span>'.$nombre.'</span>
                                            <rigth><span>'.$categoria.'</span></rigth>
                                            <h3><a href="#">'.$descripcion.'<br>
                                                </a></h3>
                                            <div class="star_prise d-flex justify-content-between">
                                                <div class="star">
                                                    <i class="flaticon-mark-as-favorite-star"></i>
                                                    <span>(4.5)</span>
                                                </div>
                                                <div class="prise">
                                                    <span class="offer">'.$precio.'</span>
                                                    <span class="active_prise">
                                                        $35%
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    
                    <?php
                    $categoria = 'Ropa';
                    $objProducto = productosControlador::fnCtrCargarCategoriaActivo($categoria);
                    ?>

                    <div class="tab-pane fade" id="Web1" role="tabpanel" aria-labelledby="Web-tab1">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4  col-md-6">
                            <?php
                                foreach ($objProducto as $key => $value) {
                                    $idproducto = $value['idproducto'];
                                    $codigo = $value['codigo'];
                                    $nombre = $value['nombre'];
                                    $categoria = $value['categoria'];
                                    $descripcion = $value['descripcion'];
                                    $cantidad = $value['cantidad'];
                                    $precio = $value['precio'];
                                    $envoltura = $value['envoltura'];
                                    $urlimagen = $value['urlimagen'];
    

                                    echo '<div class="single_courses">
                                        <div class="thumb">
                                            <a href="#">
                                            <img class="img img-fluid" src='.$urlimagen.' alt="Big_ Details">
                                            </a>
                                        </div>
                                        <center>
                                            <div class="option-hover">
                                                <br><button id="btn-Carrito" type="button" class="btn btn-danger btn-icon waves-effect waves-light m-r-15 hvr-bounce-in option-icon">
                                                    <i class="icofont icofont-cart-alt f-20"></i>
                                                </button>
                                                <button id="btn-Detalle" producto="'.$idproducto.'" envoltura="'.$envoltura.'" type="button" class="btn btn-primary btn-icon waves-effect waves-light m-r-15 hvr-bounce-in option-icon">
                                                    <i class="icofont icofont-eye-alt f-20"></i>
                                                </button>
                                                <button id="btn-Comprar" idproductos="'.$idproducto.'" codigo="'.$codigo.'" nombre="'.$nombre.'" precio="'.$precio.'" urlimagen="'.$urlimagen.'" type="button" class="btn btn-danger btn-icon waves-effect waves-light hvr-bounce-in option-icon">
                                                    <i class="icofont icofont-heart-alt f-20"></i>
                                                </button>
                                            </div>
                                        </center>
                                        
                                        <div class="courses_info">
                                            <span>'.$nombre.'</span>
                                            <rigth><span>'.$categoria.'</span></rigth>
                                            <h3><a href="#">'.$descripcion.'<br>
                                                </a></h3>
                                            <div class="star_prise d-flex justify-content-between">
                                                <div class="star">
                                                    <i class="flaticon-mark-as-favorite-star"></i>
                                                    <span>(4.5)</span>
                                                </div>
                                                <div class="prise">
                                                    <span class="offer">'.$precio.'</span>
                                                    <span class="active_prise">
                                                        $35%
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    
                    <?php
                    $categoria = 'Golleria';
                    $objProducto = productosControlador::fnCtrCargarCategoriaActivo($categoria);
                    ?>
                    <div class="tab-pane fade" id="Web11" role="tabpanel" aria-labelledby="Web-tab11">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-6">
                            <?php
                                foreach ($objProducto as $key => $value) {
                                    $idproducto = $value['idproducto'];
                                    $codigo = $value['codigo'];
                                    $nombre = $value['nombre'];
                                    $categoria = $value['categoria'];
                                    $descripcion = $value['descripcion'];
                                    $cantidad = $value['cantidad'];
                                    $precio = $value['precio'];
                                    $envoltura = $value['envoltura'];
                                    $urlimagen = $value['urlimagen'];
    

                                    echo '<div class="single_courses">
                                        <div class="thumb">
                                            <a href="#">
                                            <img class="img img-fluid" src='.$urlimagen.' alt="Big_ Details">
                                            </a>
                                        </div>
                                        <center>
                                            <div class="option-hover">
                                                <br><button id="btn-Carrito" type="button" class="btn btn-danger btn-icon waves-effect waves-light m-r-15 hvr-bounce-in option-icon">
                                                    <i class="icofont icofont-cart-alt f-20"></i>
                                                </button>
                                                <button id="btn-Detalle" producto="'.$idproducto.'" envoltura="'.$envoltura.'" type="button" class="btn btn-primary btn-icon waves-effect waves-light m-r-15 hvr-bounce-in option-icon">
                                                    <i class="icofont icofont-eye-alt f-20"></i>
                                                </button>
                                                <button id="btn-Comprar" idproductos="'.$idproducto.'" codigo="'.$codigo.'" nombre="'.$nombre.'" precio="'.$precio.'" urlimagen="'.$urlimagen.'" type="button" class="btn btn-danger btn-icon waves-effect waves-light hvr-bounce-in option-icon">
                                                    <i class="icofont icofont-heart-alt f-20"></i>
                                                </button>
                                            </div>
                                        </center>
                                        
                                        <div class="courses_info">
                                            <span>'.$nombre.'</span>
                                            <rigth><span>'.$categoria.'</span></rigth>
                                            <h3><a href="#">'.$descripcion.'<br>
                                                </a></h3>
                                            <div class="star_prise d-flex justify-content-between">
                                                <div class="star">
                                                    <i class="flaticon-mark-as-favorite-star"></i>
                                                    <span>(4.5)</span>
                                                </div>
                                                <div class="prise">
                                                    <span class="offer">'.$precio.'</span>
                                                    <span class="active_prise">
                                                        $35%
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>

                    <?php
                    $categoria = 'Lenseria';
                    $objProducto = productosControlador::fnCtrCargarCategoriaActivo($categoria);
                    ?>            
                    <div class="tab-pane fade" id="Adobe-XD8" role="tabpanel" aria-labelledby="Adobe-XD8">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4  col-md-6">
                            <?php
                                foreach ($objProducto as $key => $value) {
                                    $idproducto = $value['idproducto'];
                                    $codigo = $value['codigo'];
                                    $nombre = $value['nombre'];
                                    $categoria = $value['categoria'];
                                    $descripcion = $value['descripcion'];
                                    $cantidad = $value['cantidad'];
                                    $precio = $value['precio'];
                                    $envoltura = $value['envoltura'];
                                    $urlimagen = $value['urlimagen'];
    

                                    echo '<div class="single_courses">
                                        <div class="thumb">
                                            <a href="#">
                                            <img class="img img-fluid" src='.$urlimagen.' alt="Big_ Details">
                                            </a>
                                        </div>
                                        <center>
                                            <div class="option-hover">
                                                <br><button id="btn-Carrito" type="button" class="btn btn-danger btn-icon waves-effect waves-light m-r-15 hvr-bounce-in option-icon">
                                                    <i class="icofont icofont-cart-alt f-20"></i>
                                                </button>
                                                <button id="btn-Detalle" producto="'.$idproducto.'" envoltura="'.$envoltura.'" type="button" class="btn btn-primary btn-icon waves-effect waves-light m-r-15 hvr-bounce-in option-icon">
                                                    <i class="icofont icofont-eye-alt f-20"></i>
                                                </button>
                                                <button id="btn-Comprar" idproductos="'.$idproducto.'" codigo="'.$codigo.'" nombre="'.$nombre.'" precio="'.$precio.'" urlimagen="'.$urlimagen.'" type="button" class="btn btn-danger btn-icon waves-effect waves-light hvr-bounce-in option-icon">
                                                    <i class="icofont icofont-heart-alt f-20"></i>
                                                </button>
                                            </div>
                                        </center>
                                        
                                        <div class="courses_info">
                                            <span>'.$nombre.'</span>
                                            <rigth><span>'.$categoria.'</span></rigth>
                                            <h3><a href="#">'.$descripcion.'<br>
                                                </a></h3>
                                            <div class="star_prise d-flex justify-content-between">
                                                <div class="star">
                                                    <i class="flaticon-mark-as-favorite-star"></i>
                                                    <span>(4.5)</span>
                                                </div>
                                                <div class="prise">
                                                    <span class="offer">'.$precio.'</span>
                                                    <span class="active_prise">
                                                        $35%
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>

                    <?php
                    $categoria = 'Adornos';
                    $objProducto = productosControlador::fnCtrCargarCategoriaActivo($categoria);
                    ?>                 
                    <div class="tab-pane fade" id="Adobe-XD9" role="tabpanel" aria-labelledby="Adobe-XD-tab9">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-6">
                            <?php
                                foreach ($objProducto as $key => $value) {
                                    $idproducto = $value['idproducto'];
                                    $codigo = $value['codigo'];
                                    $nombre = $value['nombre'];
                                    $categoria = $value['categoria'];
                                    $descripcion = $value['descripcion'];
                                    $cantidad = $value['cantidad'];
                                    $precio = $value['precio'];
                                    $envoltura = $value['envoltura'];
                                    $urlimagen = $value['urlimagen'];
    

                                    echo '<div class="single_courses">
                                        <div class="thumb">
                                            <a href="#">
                                            <img class="img img-fluid" src='.$urlimagen.' alt="Big_ Details">
                                            </a>
                                        </div>
                                        <center>
                                            <div class="option-hover">
                                                <br><button id="btn-Carrito" type="button" class="btn btn-danger btn-icon waves-effect waves-light m-r-15 hvr-bounce-in option-icon">
                                                    <i class="icofont icofont-cart-alt f-20"></i>
                                                </button>
                                                <button id="btn-Detalle" producto="'.$idproducto.'" envoltura="'.$envoltura.'" type="button" class="btn btn-primary btn-icon waves-effect waves-light m-r-15 hvr-bounce-in option-icon">
                                                    <i class="icofont icofont-eye-alt f-20"></i>
                                                </button>
                                                <button id="btn-Comprar" idproductos="'.$idproducto.'" codigo="'.$codigo.'" nombre="'.$nombre.'" precio="'.$precio.'" urlimagen="'.$urlimagen.'" type="button" class="btn btn-danger btn-icon waves-effect waves-light hvr-bounce-in option-icon">
                                                    <i class="icofont icofont-heart-alt f-20"></i>
                                                </button>
                                            </div>
                                        </center>
                                        
                                        <div class="courses_info">
                                            <span>'.$nombre.'</span>
                                            <rigth><span>'.$categoria.'</span></rigth>
                                            <h3><a href="#">'.$descripcion.'<br>
                                                </a></h3>
                                            <div class="star_prise d-flex justify-content-between">
                                                <div class="star">
                                                    <i class="flaticon-mark-as-favorite-star"></i>
                                                    <span>(4.5)</span>
                                                </div>
                                                <div class="prise">
                                                    <span class="offer">'.$precio.'</span>
                                                    <span class="active_prise">
                                                        $35%
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- fin de cursos populares-->


    <!-- testimonial_area_start -->
    <div class="testimonial_area testimonial_bg_1 overlay">
        <div class="testmonial_active owl-carousel">
            <div class="single_testmoial">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="testmonial_text text-center">
                                <div class="author_img">
                                    <img src="images/testmonial/author_img.png" alt="">
                                </div>
                                <p>
                                    "Trabajamos para ofrecerte el mejor servicio <br> de alta calida
                                    por que <br>
                                    sabemos lo
                                    importante que eres.
                                </p>
                                <span>- Jtarazona</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_testmoial">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="testmonial_text text-center">
                                <div class="author_img">
                                    <img src="images/testmonial/author_img.png" alt="">
                                </div>
                                <p>
                                    "Trabajando en conjunto con empresas confiables <br> para que nuetros
                                    productos sean de <br>
                                    buena calidad.
                                </p>
                                <span>- Jhernandez</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testimonial_area_end -->
    <!-- final del área de testimonios -->

    <!-- our_courses_start -->
    <div class="our_courses">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-md-6 col-lg-6">
                    <div class="single_course text-center">
                        <div class="icon">
                            <i class="flaticon-art-and-design"></i>
                        </div>
                        <h3>Calidad premium</h3>
                        <p>
                            La calidad de nuestros productos son los mejores del mercado <br><br>
                            asegurandote una buena compra.
                        </p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-6">
                    <div class="single_course text-center">
                        <div class="icon blue">
                            <i class="flaticon-business-and-finance"></i>
                        </div>
                        <h3>Precios Bajos</h3>
                        <p>
                            Nuetros precios son los mejores con una tasa de interes bajo <br> <br>
                            a la hora de adquirir nuestros regalos,
                        </p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-6">
                    <div class="single_course text-center">
                        <div class="icon">
                            <i class="flaticon-premium"></i>
                        </div>
                        <h3>Garantia</h3>
                        <p>
                            Todos los productos sin exepcion tiene una grantia minima de 1 año <br><br>
                            para su mayor seguridad.
                        </p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-6">
                    <div class="single_course text-center">
                        <div class="icon gradient">
                            <i class="flaticon-crown"></i>
                        </div>
                        <h3>Felicidad Asegurada</h3>
                        <p>
                            La felicidad no tiene precion y conosotros la <br><br>
                            puede adquirir muy facilmente.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- sobre el inicio del área -->
        <div class="about_area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-6">
                        <div class="single_about_info">
                            <h3>Giving Away <br></h3>
                            <p> Es la forma mas facil para hacerles saber a los que mas quieres <br> que estas con ello sin importar la distancia ni los malos momentos.</p>
                            <a href="#" class="boxed_btn">Ver Ofertas</a>
                        </div>
                    </div>
                    <div class="col-xl-6 offset-xl-1 col-lg-6">
                        <div class="about_tutorials">
                            <div class="courses">
                                <div class="inner_courses">
                                    <div class="text_info">
                                        <span>100%</span>
                                        <p> AMIGOS</p>
                                    </div>
                                </div>
                            </div>
                            <div class="courses-blue">
                                <div class="inner_courses">
                                    <div class="text_info">
                                        <span>100%</span>
                                        <p> FAMILIA</p>
                                    </div>

                                </div>
                            </div>
                            <div class="courses-sky">
                                <div class="inner_courses">
                                    <div class="text_info">
                                        <span>100%</span>
                                        <p> REGALOS</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- sobre el final del área -->
        <!-- subscribe_newsletter_Start -->
        <!-- suscribirse al boletín Inicio -->
        <div class="subscribe_newsletter">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="newsletter_text">
                            <h3>Suscribirse al boletín informativo</h3>
                            <p>Su panel de control de dominio es diseñado para la facilidad de uso y permite todos los aspectos de su</p>
                        </div>
                    </div>
                    <div class="col-xl-5 offset-xl-1 col-lg-6">
                        <div class="newsletter_form">
                            <h4>Su panel de control de dominio es:</h4>
                            <form action="#" class="newsletter_form">
                                <input type="text" placeholder="Enter your mail">
                                <button type="submit">Regístrate</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- subscribe_newsletter_end -->
        <!-- suscribirse al final del boletín-->

        <!--nuestro último blog comienza-->
        <div class="our_latest_blog">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section_title text-center mb-100">
                            <h3>Publicaciones | Blog</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-md-4">
                        <div class="single_latest_blog">
                        <a href="blogD.php">
                            <div class="thumb">
                                <img src="images/latest_blog/1.png" alt="">
                            </div>
                            </a>
                            <div class="content_blog">
                                <div class="date">
                                    <p>12 Jun, 2019 en <a href="#">Consejos de Diseño</a></p>
                                </div>
                                <div class="blog_meta">
                                    <h3><a href="#">Compromiso con un soporte dedicado</a></h3>
                                </div>
                                <p class="blog_text">
                                    Firmamento mañana sexta subyugar oscuridad arrastrándose reunida dividir.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4">
                        <div class="single_latest_blog">
                        <a href="blogD.php">
                        <div class="thumb">
                                <img src="images/latest_blog/2.png" alt="">
                            </div>
                        </a>
                            
                            <div class="content_blog">
                                <div class="date">
                                    <p>12 Jun, 2019 en <a href="#"></a>Consejos de Diseño</p>
                                </div>
                                <div class="blog_meta">
                                    <h3><a href="#">Compromiso con un soporte dedicado</a></h3>
                                </div>
                                <p class="blog_text">
                                    Firmamento mañana sexta subyugar oscuridad arrastrándose reunida dividir.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4">
                        <div class="single_latest_blog">
                        <a href="blogD.php">
                            <div class="thumb">
                                <img src="images/latest_blog/3.png" alt="">
                            </div>
                        </a>
                            <div class="content_blog">
                                <div class="date">
                                    <p>12 Jun, 2019 en <a href="#">Consejos de Diseño</a></p>
                                </div>
                                <div class="blog_meta">
                                    <h3><a href="#">Compromiso con un soporte dedicado</a></h3>
                                </div>
                                <p class="blog_text">
                                    Firmamento mañana sexta subyugar oscuridad arrastrándose reunida dividir.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- our_latest_blog_end -->
        <!--nuestro último blog final -->





    </div>
    <!-- our_courses_end -->
    <!-- nuestros cursos terminan -->

    <!-- footer -->
    <!-- pie de página -->
    <footer class="footer footer_bg_1">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="#">
                                    <img src="images/logo1.png" width="600" height="350" alt="">
                                </a>
                            </div>
                            <p>
                                No importa donde te encuentres coctactanos para poder atenderte
                                y ofrecerte nuestro mejor servicio recuerda nuestros numeros de
                                conctaco direccion si tienes cualquier duda te la podremos
                                resolver respecto a tu regalo.
                            </p>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-twitter-alt"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-youtube"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-2 offset-xl-1 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                PARA
                            </h3>
                            <p>
                                Familia<br>
                                Amigos<br>
                                Enamorados
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                ASEGURAMOS
                            </h3>
                            <p>
                                Calidad <br>
                                Compromiso<br>
                                Entrega
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                CONTACTANOS
                            </h3>
                            <p>
                                Direccion: Cr 12 # 12-45 <br>
                                Telefono: +57 3213367476 <br>
                                Correo: givenaway@empres.net
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <!-- No se puede eliminar el enlace a Colorlib. La plantilla tiene licencia CC BY 3.0.-->
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> Todos los derechos reservados | Esta plantilla está hecha con <i class="fa fa-heart-o" aria-hidden="true"></i> por <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- No se puede eliminar el enlace a Colorlib. La plantilla tiene licencia CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- footer -->
    <!--pie de página -->


    <!-- form itself end-->
    <form id="test-form" class="white-popup-block mfp-hide">
        <div class="popup_box ">
            <div class="popup_inner">
                <div class="logo text-center">
                    <a href="#">
                        <img src='images/animation_500_kltje2s1.gif' class='imgRedonda' ¿ />
                    </a>
                </div>
                <h3>Iniciar Sesion</h3>

                <form class="login-form validate-form" method="post">
                    <div class="row">
                        <div class="col-xl-12 col-md-12">
                            <input type="text" placeholder="Usuario" id="usuario">
                        </div>
                        <div class="col-xl-12 col-md-12">
                            <input type="password" placeholder="Password" id="password">
                        </div>
                        <div class="col-xl-12">
                            <button type="submit" class="boxed_btn_orange">Iniciar sesion</button>
                        </div>
                    </div>
                </form>
                <p class="doen_have_acc">No, tengo Cuenta <a class="dont-hav-acc" href="#test-form2">Registrate</a>
                </p>
            </div>
        </div>
    </form>

    <!-- form itself end-->
    <form id="test-form2" class="white-popup-block mfp-hide">
        <div class="popup_box">
            <div class="popup_inner">

                <h3>Regístrate</h3>
                <form class=" " method="post">
                    <div class="row">
                        <div class="col-xl-12 col-md-12">
                            <input type="text" id="txtCedula" placeholder="Cedula">
                        </div>
                        <div class="col-xl-12 col-md-12">
                            <input type="text" id="txtNombre" placeholder="Nombre">
                        </div>
                        <div class="col-xl-12 col-md-12">
                            <input type="text" id="txtApellido" placeholder="Apellido">
                        </div>
                        <div class="col-xl-12 col-md-12">
                            <input type="text" id="txtUsuario" placeholder="Usuario">
                        </div>
                        <div class="col-xl-12 col-md-12">
                            <input type="password" id="txtPassword" placeholder="Password">
                        </div>
                        <input type="hidden" id="txtRol" value="Cliente">
                        <div class="col-xl-12">
                            <button type="submit" class="boxed_btn_orange" id="btnRegistrarUsuarios">Continuar</button>
                        </div>
                    </div>
                    <p class="doen_have_acc">Iniciar Sesión <a class="dont-hav-acc" href="#test-form">Registrate</a>
                    </p>
                </form>
            </div>
        </div>
    </form>
    <!-- form itself end -->



    <!-- JS1 Aqui -->
    <script src="vistas/js1/vendor/modernizr-3.5.0.min.js"></script>
    <script src="vistas/js1/vendor/jquery-1.12.4.min.js"></script>
    <script src="vistas/js1/popper.min.js"></script>
    <script src="vistas/js1/bootstrap.min.js"></script>
    <script src="vistas/js1/owl.carousel.min.js"></script>
    <script src="vistas/js1/isotope.pkgd.min.js"></script>
    <script src="vistas/js1/ajax-form.js"></script>
    <script src="vistas/js1/waypoints.min.js"></script>
    <script src="vistas/js1/jquery.counterup.min.js"></script>
    <script src="vistas/js1/imgloaded.pkgd.min.js"></script>
    <script src="vistas/js1/scrollIt.js"></script>
    <script src="vistas/js1/jquery.scrollUp.min.js"></script>
    <script src="vistas/js1/wow.min.js"></script>
    <script src="vistas/js1/nice-select.min.js"></script>
    <script src="vistas/js1/jquery.slicknav.min.js"></script>
    <script src="vistas/js1/jquery.magnific-popup.min.js"></script>
    <script src="vistas/js1/plugins.js"></script>
    <script src="vistas/js1/gijgo.min.js"></script>

    <!--contacto js-->
    <script src="vistas/js1/contact.js"></script>
    <script src="vistas/js1/jquery.ajaxchimp.min.js"></script>
    <script src="vistas/js1/jquery.form.js"></script>
    <script src="vistas/js1/jquery.validate.min.js"></script>
    <script src="vistas/js1/mail-script.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="vistas/js1/main.js"></script>
    <script src="vistas/js/login.js"></script>
    <script src="vistas/js/registrar.js"></script>

    <!-- LINKS PERSONALIZADOS -->
    <script src="vistas/js/tienda.js"></script>
    <!-- <script src="vistas/js/estilosdl.js"></script> -->



</body>

</html>