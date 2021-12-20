<?php
require_once "controlador/blogsControlador.php";
require_once "modelos/blogsModelo.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Proyecto | Cliente</title>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Phoenixcoded">
    <meta name="keywords" content=", Flat ui, Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="Phoenixcoded">

    <!-- <link rel="icon" href="images/favicon.ico" type="image/x-icon"> -->

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="vistas/bower_components/bootstrap/dist/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="vistas/icon/themify-icons/themify-icons.css">

    <link rel="stylesheet" type="text/css" href="vistas/icon/icofont/css/icofont.css">

    <link rel="stylesheet" type="text/css" href="vistas/pages/flag-icon/flag-icon.min.css">

    <link rel="stylesheet" type="text/css" href="vistas/pages/menu-search/css/component.css">

    <link rel="stylesheet" type="text/css" href="vistas/css2/style.css">

    <link rel="stylesheet" type="text/css" href="vistas/css2/color/color-1.css" id="color" />
    <link rel="stylesheet" type="text/css" href="vistas/css2/linearicons.css">
    <link rel="stylesheet" type="text/css" href="vistas/css2/simple-line-icons.css">
    <link rel="stylesheet" type="text/css" href="vistas/css2/ionicons.css">
    <link rel="stylesheet" type="text/css" href="vistas/css2/jquery.mCustomScrollbar.css">

    <!-- LINKS PERSONALIZADOS -->
    <link rel="stylesheet" type="text/css" href="vistas/css/scroll.css">
</head>

<body>

    <div class="theme-loader">
        <div class="ball-scale">
            <div></div>
        </div>
    </div>

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <nav class="navbar header-navbar pcoded-header" header-theme="theme4">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="ti-menu"></i>
                        </a>
                        <a class="mobile-search morphsearch-search" href="#">
                            <i class="ti-search"></i>
                        </a>
                        <a href="index.php">
                            <img src="images/logo.png" width="200" height="100" alt="" />
                        </a>
                        <a class="mobile-options">
                            <i class="ti-more"></i>
                        </a>
                    </div>
                    <div class="navbar-container container-fluid">
                        <div>
                            <ul class="nav-left">
                                <li>
                                    <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                                </li>
                                <li>
                                    <a class="main-search morphsearch-search" href="#">

                                        <i class="ti-search"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!" onclick="javascript:toggleFullScreen()">
                                        <i class="ti-fullscreen"></i>
                                    </a>
                                </li>
                                <li class="mega-menu-top">
                                        <a href="#">
                                            Mega
                                            <i class="ti-angle-down"></i>
                                        </a>
                                        <ul class="show-notification row">
                                            <li class="col-sm-3">
                                                <h6 class="mega-menu-title">Regalos Populares</h6>
                                                <ul class="mega-menu-links">
                                                    <li><a href="form-elements-component.html"> </a></li>
                                                    <li><a href="button.html">1.Tecnologia</a></li>
                                                    <li><a href="map-google.html">2.Acesorios para Niños</a></li>
                                                    <li><a href="user-card.html">3. Decoraciones </a></li>
                                                    <li><a href="user-card.html">4. Juguetes </a></li>
                                                    <li><a href="user-card.html">5. Portaretratos </a></li>
                                                </ul>
                                            </li>
                                            <li class="col-sm-3">
                                                <h6 class="mega-menu-title">Buzón </h6>
                                                <ul class="mega-mailbox">
                                                    <li>
                                                        <a href="#" class="media">
                                                            <div class="media-left">
                                                                <i class="ti-folder"></i>
                                                            </div>
                                                            <div class="media-body">
                                                                <h5>Seguridad </h5>
                                                                <small class="text-muted">Datos </small>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="media">
                                                            <div class="media-left">
                                                                <i class="ti-headphone-alt"></i>
                                                            </div>
                                                            <div class="media-body">
                                                                <h5>Apoyo </h5>
                                                                <small class="text-muted">Soporte las 24 horas </small>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="media">
                                                            <div class="media-left">
                                                                <i class="ti-dropbox"></i>
                                                            </div>
                                                            <div class="media-body">
                                                                <h5>Envios  </h5>
                                                                <small class="text-muted">Los diferentes envios son Seguros.
                                                                </small>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="media">
                                                            <div class="media-left">
                                                                <i class="ti-location-pin"></i>
                                                            </div>
                                                            <div class="media-body">
                                                                <h5>Localización</h5>
                                                                <small class="text-muted">Encuentrenos facilmente con tan solo un ¡Clic! </small>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="col-sm-3">
                                                <h6 class="mega-menu-title">Galeria</h6>
                                                <div class="row m-b-20">
                                                    <div class="col-sm-4"><img class="img-fluid img-thumbnail" src="images/mega-menu/01.jpg" alt="Gallery-1">
                                                    </div>
                                                    <div class="col-sm-4"><img class="img-fluid img-thumbnail" src="images/mega-menu/02.jpg" alt="Gallery-2">
                                                    </div>
                                                    <div class="col-sm-4"><img class="img-fluid img-thumbnail" src="images/mega-menu/03.jpg" alt="Gallery-3">
                                                    </div>
                                                </div>
                                                <div class="row m-b-20">
                                                    <div class="col-sm-4"><img class="img-fluid img-thumbnail" src="images/mega-menu/04.jpg" alt="Gallery-4">
                                                    </div>
                                                    <div class="col-sm-4"><img class="img-fluid img-thumbnail" src="images/mega-menu/05.jpg" alt="Gallery-5">
                                                    </div>
                                                    <div class="col-sm-4"><img class="img-fluid img-thumbnail" src="images/mega-menu/06.jpg" alt="Gallery-6">
                                                    </div>
                                                </div>
                                                <button class="btn btn-primary btn-sm btn-block">Navegar Galería </button>
                                            </li>
                                            <li class="col-sm-3">
                                                <h6 class="mega-menu-title">Contacta con nosotros</h6>
                                                <div class="mega-menu-contact">
                                                <div class="form-group row">
                                                        <label for="example-text-input" class="col-3 col-form-label">Nombre</label>
                                                        <div class="col-9">
                                                            <input name="nombre" class="form-control" type="text" placeholder="ingresa tus datos" id="example-text-input" >
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="example-text-input" class="col-3 col-form-label">Telefono</label>
                                                        <div class="col-9">
                                                            <input name="telefono" class="form-control" type="text" placeholder="ingresa tus datos" id="example-text-input" >
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="example-search-input" class="col-3 col-form-label">Email</label>
                                                        <div class="col-9">
                                                            <input name="email" class="form-control" type="email" placeholder="ingresa tu correo" id="example-search-input">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="exampleTextarea" class="col-3 col-form-label">Message</label>
                                                        <div class="col-9">
                                                            <textarea name="mensaje" class="form-control" id="exampleTextarea" rows="3"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    </ul>
                                </li>
                            </ul>

                            <ul class="nav-right">
                                <li class="header-notification">
                                    <a href="#!">
                                        <i class="ti-bell"></i>
                                        <span class="badge">0</span>
                                    </a>
                                </li>
                                <li class="header-notification">
                                    <a href="#!" class="displayChatbox">
                                        <img class="img-fluid" src="images/logo.gif" width="65" height="65" alt="Theme-Logo" />
                                        <span>ÚNETENOS!</span>
                                    </a>
                                </li>
                            </ul>

                            <div id="morphsearch" class="morphsearch">
                                <form class="morphsearch-form">
                                    <input class="morphsearch-input" type="search" placeholder="Search..." />
                                    <button class="morphsearch-submit" type="submit">Buscar</button>
                                </form>
                                <div class="morphsearch-content">
                                    <div class="dummy-column">
                                        <h2>Gente </h2>
                                        <a class="dummy-media-object" href="#!">
                                            <img class="round" src="http://0.gravatar.com/avatar/81b58502541f9445253f30497e53c280?s=50&amp;d=identicon&amp;r=G" alt="Sara Soueidan" />
                                            <h3>Felipe Valbuena</h3>
                                        </a>
                                        <a class="dummy-media-object" href="#!">
                                            <img class="round" src="http://1.gravatar.com/avatar/9bc7250110c667cd35c0826059b81b75?s=50&amp;d=identicon&amp;r=G" alt="Shaun Dona" />
                                            <h3>Efrain Tarazona</h3>
                                        </a>
                                    </div>
                                    <div class="dummy-column">
                                        <h2>Popular</h2>
                                        <a class="dummy-media-object" href="#!">
                                            <img src="images/avatar-1.png" alt="PagePreloadingEffect" />
                                            <h3>Efecto de precarga de página </h3>
                                        </a>
                                        <a class="dummy-media-object" href="#!">
                                            <img src="images/avatar-1.png" alt="DraggableDualViewSlideshow" />
                                            <h3>Presentación de diapositivas de doble vista arrastrable </h3>
                                        </a>
                                    </div>
                                    <div class="dummy-column">
                                        <h2>Reciente </h2>
                                        <a class="dummy-media-object" href="#!">
                                            <img src="images/avatar-1.png" alt="TooltipStylesInspiration" />
                                            <h3>Inspiración de estilos de información sobre herramientas </h3>
                                        </a>
                                        <a class="dummy-media-object" href="#!">
                                            <img src="images/avatar-1.png" alt="NotificationStyles" />
                                            <h3>Inspiración de estilos de notificación </h3>
                                        </a>
                                    </div>
                                </div>

                                <span class="morphsearch-close"><i class="icofont icofont-search-alt-1"></i></span>
                            </div>

                        </div>
                    </div>
                </div>
            </nav>

            <div id="sidebar" class="users p-chat-user showChat">
                <div class="had-container">
                    <div class="card card_main p-fixed users-main">
                        <div class="user-box">
                            <div class="card-block">
                                <div class="right-icon-control">
                                    <input type="text" class="form-control  search-text" placeholder="Search Friend" id="search-friends">
                                    <div class="form-icon">
                                        <i class="icofont icofont-search"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="main-friend-list">
                                <div class="media userlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-circle" src="images/avatar-1.png" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Josephin Doe</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="2" data-status="online" data-username="Lary Doe" data-toggle="tooltip" data-placement="left" title="Lary Doe">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-circle" src="images/task/task-u1.jpg" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Jonatan Hernandez</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="3" data-status="online" data-username="Alice" data-toggle="tooltip" data-placement="left" title="Alice">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-circle" src="images/avatar-2.png" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Felipe Valbuena</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="4" data-status="online" data-username="Alia" data-toggle="tooltip" data-placement="left" title="Alia">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-circle" src="images/task/task-u2.jpg" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Efrain Tarazona</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="5" data-status="online" data-username="Suzen" data-toggle="tooltip" data-placement="left" title="Suzen">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-circle" src="images/task/task-u3.jpg" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Suzen</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="6" data-status="offline" data-username="Michael Scofield" data-toggle="tooltip" data-placement="left" title="Michael Scofield">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-circle" src="images/avatar-3.png" alt="Generic placeholder image">
                                        <div class="live-status bg-danger"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Michael Scofield</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="7" data-status="online" data-username="Irina Shayk" data-toggle="tooltip" data-placement="left" title="Irina Shayk">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-circle" src="images/avatar-4.png" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Irina Shayk</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="8" data-status="offline" data-username="Sara Tancredi" data-toggle="tooltip" data-placement="left" title="Sara Tancredi">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-circle" src="images/avatar-5.png" alt="Generic placeholder image">
                                        <div class="live-status bg-danger"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Sara Tancredi</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="9" data-status="online" data-username="Samon" data-toggle="tooltip" data-placement="left" title="Samon">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-circle" src="images/avatar-1.png" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Samon</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="10" data-status="online" data-username="Daizy Mendize" data-toggle="tooltip" data-placement="left" title="Daizy Mendize">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-circle" src="images/task/task-u3.jpg" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Daizy Mendize</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="11" data-status="offline" data-username="Loren Scofield" data-toggle="tooltip" data-placement="left" title="Loren Scofield">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-circle" src="images/avatar-3.png" alt="Generic placeholder image">
                                        <div class="live-status bg-danger"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Loren Scofield</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="12" data-status="online" data-username="Shayk" data-toggle="tooltip" data-placement="left" title="Shayk">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-circle" src="images/avatar-4.png" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Shayk</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="13" data-status="offline" data-username="Sara" data-toggle="tooltip" data-placement="left" title="Sara">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-circle" src="images/task/task-u3.jpg" alt="Generic placeholder image">
                                        <div class="live-status bg-danger"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Sara</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="14" data-status="online" data-username="Doe" data-toggle="tooltip" data-placement="left" title="Doe">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-circle" src="images/avatar-1.png" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Doe</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="15" data-status="online" data-username="Lary" data-toggle="tooltip" data-placement="left" title="Lary">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-circle" src="images/task/task-u1.jpg" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Lary</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="showChat_inner">
                <div class="media chat-inner-header">
                    <a class="back_chatBox">
                        <i class="icofont icofont-rounded-left"></i> Jonthan Hernandez
                    </a>
                </div>
                <div class="media chat-messages">
                    <a class="media-left photo-table" href="#!">
                        <img class="media-object img-circle m-t-5" src="images/avatar-1.png" alt="Generic placeholder image">
                    </a>
                    <div class="media-body chat-menu-content">
                        <div class="">
                            <p class="chat-cont">Solo estoy mirando. ¿Me contarás algo sobre ti? </p>
                            <p class="chat-time">8:20 a.m.</p>
                        </div>
                    </div>
                </div>
                <div class="media chat-messages">
                    <div class="media-body chat-menu-reply">
                        <div class="">
                            <p class="chat-cont">Solo estoy mirando. ¿Me contarás algo sobre ti? </p>
                            <p class="chat-time">8:20 a.m.</p>
                        </div>
                    </div>
                    <div class="media-right photo-table">
                        <a href="#!">
                            <img class="media-object img-circle m-t-5" src="images/avatar-2.png" alt="Generic placeholder image">
                        </a>
                    </div>
                </div>
                <div class="chat-reply-box p-b-20">
                    <div class="right-icon-control">
                        <input type="text" class="form-control search-text" placeholder="Share Your Thoughts">
                        <div class="form-icon">
                            <i class="icofont icofont-paper-plane"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">

                            <div class="main-body">
                                <div class="page-wrapper">

                                    <div class="page-header">
                                        <div class="page-header-title">
                                            <h4>BLOG | PUBUBLICIONES</h4>
                                        </div>
                                        <div class="page-header-breadcrumb">
                                            <ul class="breadcrumb-title">
                                                <li class="breadcrumb-item">
                                                    <a href="index.php">
                                                        <i class="icofont icofont-home"></i>
                                                    </a>
                                                </li>
                                                <li class="breadcrumb-item"><a href="index.php">Inicio</a>
                                                </li>
                                                <li class="breadcrumb-item"><a href="#!">Blog | Publicaciones</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>


                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-12">

                                                <div class="card blog-page">
                                                    <div class="card-block">
                                                        <div class="container-fluid">
                                                            <div class="row">
                                                                <div class="col-md-12 col-lg-9">

                                                                    <div class="blog-article">
                                                                        <h4>Artículos relacionados</h4>
                                                                        <hr class="m-b-40">
                                                                        <div>
                                                                            <div class="row related-artical">
                                                                                <?php

                                                                                $objProductos = blogsControlador::fnCtrCargarBlogs();
                                                                                foreach ($objProductos as $key => $value) {

                                                                                    $idblog = $value['idblog'];
                                                                                    $codigo = $value['codigo'];
                                                                                    $fecha = $value['fecha'];
                                                                                    $descripcion = $value['descripcion'];
                                                                                    $urlimagen = $value['urlimagen'];

                                                                                ?>
                                                                                    <div class="col-md-4">
                                                                                        <div class="articles">
                                                                                            <img src="<?php echo $urlimagen; ?>" class="img-fluid c-pointer" alt="" />
                                                                                            <h6><?php echo $codigo; ?></h6>
                                                                                            <h6><?php echo $fecha; ?></h6> 
                                                                                            <a href="#"><?php echo $descripcion; ?></a>
                                                                                            <button type="button" class="btn btn-primary waves-effect waves-light">Leer más....   <span class="m-l-10"> <i class="icofont icofont-rounded-double-right"></i>
                                                                                                </span></button>
                                                                                        </div>
                                                                                    </div>
                                                                                    <?php
                                                                }
                                                                ?>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                
                                                                <hr class="m-t-20 m-b-20">
                                                                <div class="shares-like">
                                                                    <ul>
                                                                        <li>
                                                                            <i class="icofont icofont-share"></i>
                                                                            <span>68</span> Comparte
                                                                        </li>
                                                                        <li>
                                                                            <a class="btn-facebook" href="#">
                                                                                <i class="icofont icofont-social-facebook"></i> 42
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a class="btn-twitter" href="#">
                                                                                <i class="icofont icofont-social-twitter"></i>12
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a class="btn-google-plus" href="#">
                                                                                <i class="icofont icofont-social-google-plus"></i> 7
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a class="btn-linkedin" href="#">
                                                                                <i class="icofont icofont-brand-linkedin"></i> 2
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a class="btn-pinterest" href="#">
                                                                                <i class="icofont icofont-social-pinterest"></i> 14
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <hr class="m-t-20 m-b-20">
                                                                <div class="row blog-big-user">
                                                                    <div class="col-sm-2">
                                                                        <img src="images/blog/blog-130.png" class="img-fluid img-circle" alt="blog-img">
                                                                    </div>
                                                                    <div class="col-sm-10">
                                                                        <div>
                                                                            <h4 class="m-b-10 text-primary">Marta Gomez </h4>
                                                                            <h6 class="m-b-5">Gestora de contenidos</h6>
                                                                            <p class="m-b-5">Estamos para prestar el mejor  Servicio </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div id="comment-section" class="comment-single col-md-12">
                                                                        <h4 class="m-b-0 m-t-20">4 Comentarios </h4>
                                                                        <hr class="m-t-20 m-b-20">
                                                                        <div>
                                                                            <ul class="media-list">
                                                                                <li class="media">
                                                                                    <div class="media-left">
                                                                                        <a href="#">
                                                                                            <img class="media-object img-circle comment-img" src="images/avatar-1.png" alt="Generic placeholder image">
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="media-body blog-s-reply">
                                                                                        <h6 class="media-heading">Mariano Medina 
                                                                                            <span>Justo ahora</span>
                                                                                        </h6>
                                                                                        <p>Gracias por el servicio, 100% recomendados para futuras compras. </p>
                                                                                        <div class="blog-u-comment">
                                                                                            <span>115 <i class="icofont icofont-curved-up"></i><i class="icofont icofont-curved-down"></i></span>
                                                                                            <span class="blog-reply"><a href="#!">Respuesta </a></span><span class="blog-edit"><a href="#!">Editar </a> </span>
                                                                                        </div>
                                                                                        <hr>

                                                                                        <div class="media">
                                                                                            <a class="media-left" href="#">
                                                                                                <img class="media-object img-circle comment-img" src="images/avatar-2.png" alt="Generic placeholder image">
                                                                                            </a>
                                                                                            <div class="media-body blog-s-reply">
                                                                                                <h6 class="media-heading">Laura Gocheneche
                                                                                                    <span>Hace 5 Minutos</span>
                                                                                                </h6>
                                                                                                <p> Gracias por la buena atencion  estoy felz por  mi compra.</p>
                                                                                                <div class="blog-u-comment">
                                                                                                    <span>75 <i class="icofont icofont-curved-up"></i><i class="icofont icofont-curved-down"></i></span>
                                                                                                    <span class="blog-reply"><a href="#!">Respuesta</a></span><span class="blog-edit"><a href="#!">Editar</a> </span>
                                                                                                </div>
                                                                                                <hr>

                                                                                                <div class="media">
                                                                                                    <div class="media-left">
                                                                                                        <a href="#">
                                                                                                            <img class="media-object img-circle comment-img" src="images/avatar-3.png" alt="Generic placeholder image">
                                                                                                        </a>
                                                                                                    </div>
                                                                                                    <div class="media-body blog-s-reply">
                                                                                                        <h6 class="media-heading">Fredy Martinez <span>Hace 30 minutos </span></h6>
                                                                                                        <p>Buen servicio espectacular la forma en la cual se puede elgir el envoltorio del regalo y el servicio de entrega es muy rapido muy contenta. </p>
                                                                                                        <div class="blog-u-comment">
                                                                                                            <span>156 <i class="icofont icofont-curved-up"></i><i class="icofont icofont-curved-down"></i></span>
                                                                                                            <span class="blog-reply"><a href="#!">Respuesta </a></span><span class="blog-edit"><a href="#!">Editar</a> </span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <hr>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <hr>

                                                                                        <div class="media">
                                                                                            <div class="media-left">
                                                                                                <a href="#">
                                                                                                    <img class="media-object img-circle comment-img" src="images/avatar-1.png" alt="Generic placeholder image">
                                                                                                </a>
                                                                                            </div>
                                                                                            <div class="media-body blog-s-reply">
                                                                                                <h6 class="media-heading">Cristian Nodal<span>Hace 1 hora</span></h6>
                                                                                                <p>Muy buena la pagina para realizar compras especiaalmente para fechas especiales como la navida ya que puedo enviarle un pequeño detalle a los que mas amo.</p>
                                                                                                <div class="blog-u-comment">
                                                                                                    <span>36 <i class="icofont icofont-curved-up"></i><i class="icofont icofont-curved-down"></i></span>
                                                                                                    <span class="blog-reply"><a href="#!">Respuesta</a></span><span class="blog-edit"><a href="#!">Editar</a> </span>
                                                                                                </div>
                                                                                                <hr>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="media">
                                                                                            <a class="media-left" href="#">
                                                                                                <img class="media-object img-circle comment-img" src="images/avatar-4.png" alt="Generic placeholder image">
                                                                                            </a>
                                                                                            <div class="media-body blog-s-reply">
                                                                                                <h6 class="media-heading">Martin <span>Hace 2 horas</span></h6>
                                                                                                <p>Genial no tengo que salir a comprar regalos para mi familia tan solo con un clic puedo hacerlo gracias.</p>
                                                                                                <div class="blog-u-comment">
                                                                                                    <span>75 <i class="icofont icofont-curved-up"></i><i class="icofont icofont-curved-down"></i></span>
                                                                                                    <span class="blog-reply"><a href="#!">Respuesta</a></span><span class="blog-edit"><a href="#!">Editar</a> </span>
                                                                                                </div>
                                                                                                <hr>

                                                                                                <div class="media">
                                                                                                    <div class="media-left">
                                                                                                        <a href="#">
                                                                                                            <img class="media-object img-circle comment-img" src="images/avatar-3.png" alt="Generic placeholder image">
                                                                                                        </a>
                                                                                                    </div>
                                                                                                    <div class="media-body blog-s-reply">
                                                                                                        <h6 class="media-heading">Albeiro Tarazona <span>Hace 3 dias</span></h6>
                                                                                                        <p>Buna pagina totalmente segura.</p>
                                                                                                        <div class="blog-u-comment">
                                                                                                            <span>156 <i class="icofont icofont-curved-up"></i><i class="icofont icofont-curved-down"></i></span>
                                                                                                            <span class="blog-reply"><a href="#!">Respueta</a></span><span class="blog-edit"><a href="#!">Editar</a> </span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <hr>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <hr>
                                                                                        <div class="media mt-2">
                                                                                            <div class="media-left">
                                                                                                <a href="#">
                                                                                                    <img class="media-object img-circle comment-img" src="images/avatar-2.png" alt="Generic placeholder image">
                                                                                                </a>
                                                                                            </div>
                                                                                            <div class="media-body blog-s-reply">
                                                                                                <h6 class="media-heading">Jonathan Sanchez<span>Hace 3 dias</span></h6>
                                                                                                <p>Tengo una duda tienen tienda fisica?.</p>
                                                                                                <div class="blog-u-comment">
                                                                                                    <span>41 <i class="icofont icofont-curved-up"></i><i class="icofont icofont-curved-down"></i></span>
                                                                                                    <span class="blog-reply"><a href="#!">Repuesta</a></span><span class="blog-edit"><a href="#!">Editar</a> </span>
                                                                                                </div>
                                                                                                <hr>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                            <div class="md-float-material">
                                                                                <div class="input-group input-group-button">
                                                                                    <span class="input-group-addon">
                                                                                        <i class="icofont icofont-comment"></i>
                                                                                    </span>
                                                                                    <input type="text" class="form-control" placeholder="Escribe tu Comentario">
                                                                                    <span class="input-group-addon" id="basic-addon12">
                                                                                        <button class="btn btn-primary"><i class="icofont icofont-plus m-r-10"> </i> Agregar comentario</button>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row col-sm-12 m-t-20 m-b-10">
                                                                    <h4>Deja una respuesta</h4>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <form class="md-float-material" action="#">
                                                                            <div class="form-group row">
                                                                                <label class="col-sm-2 col-form-label">Nombre completo</label>
                                                                                <div class="col-sm-10">
                                                                                    <input type="text" class="form-control" placeholder="Nombre">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label class="col-sm-2 col-form-label">Email</label>
                                                                                <div class="col-sm-10">
                                                                                    <input type="email" class="form-control" placeholder="Email">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label class="col-sm-2 col-form-label">Telefono</label>
                                                                                <div class="col-sm-10">
                                                                                    <input type="text" class="form-control" placeholder="Telefono">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label class="col-sm-2 col-form-label">Mensage</label>
                                                                                <div class="col-sm-10">
                                                                                    <textarea rows="5" cols="5" class="form-control" placeholder="Mensage"></textarea>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-12 col-xs-12 m-b-20 text-right">
                                                                                <button type="button" class="btn btn-primary waves-effect waves-light"> <i class="icofont icofont-ui-rate-add"></i> Enviar comentario
                                                                                    </span>
                                                                                </button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>




                                                                </div>


                                                                <div class="col-md-12 col-lg-3">
                                                                    <div class="input-group search">
                                                                        <input type="text" class="form-control" placeholder="Buscar">
                                                                        <span class="input-group-addon" id="search"><i class="icofont icofont-search-alt-2"></i></span>
                                                                    </div>
                                                                    <div class="port_detail_next_search">
                                                                        <h4 class="system_font_color m-t-30 m-b-30">Categorias </h4>
                                                                        <h5>
                                                                            <a href="index.php" target="_blank">
                                                                            Damas
                                                                                <i class="icofont icofont-rounded-right"></i>
                                                                            </a>
                                                                        </h5>
                                                                        <h5>
                                                                            <a href="#" target="_blank">
                                                                            Cabelleros
                                                                                <i class="icofont icofont-rounded-right"></i>
                                                                            </a>
                                                                        </h5>
                                                                        <h5>
                                                                            <a href="#" target="_blank">
                                                                            Niños
                                                                                <i class="icofont icofont-rounded-right"></i>
                                                                            </a>
                                                                        </h5>
                                                                        <h5>
                                                                            <a href="#" target="_blank">
                                                                            Tecnologia
                                                                                <i class="icofont icofont-rounded-right"></i>
                                                                            </a>
                                                                        </h5>
                                                                    </div>
                                                                    <div class="blog_detail_social_icon">
                                                                        <h4 class="system_font_color m-t-30 m-b-20">Redes sociales</h4>
                                                                        <a>
                                                                            <span class="icofont icofont-social-google-plus"></span>
                                                                        </a>
                                                                        <a>
                                                                            <span class="icofont icofont-social-facebook"></span>
                                                                        </a>
                                                                        <a>
                                                                            <span class="icofont icofont-social-twitter"></span>
                                                                        </a>
                                                                        <a>
                                                                            <span class="icofont icofont-social-pinterest"></span>
                                                                        </a>
                                                                        <a>
                                                                            <span class="icofont icofont-brand-linkedin"></span>
                                                                        </a>
                                                                    </div>
                                                                    <h4 class="system_font_color m-t-20 m-b-20">Última publicación</h4>
                                                                    <div class="row">
                                                                        <div class="col-sm-6 col-md-12 m-b-40 blog_post_img latest_blog">
                                                                            <h5><a href="#" target="_blank">Cada detalle es importante </a></h5>
                                                                            <img class="img img-fluid mob_img m-t-20 m-b-20" src="images/blog/detalle1.jpg" alt="Standard Gallery">
                                                                            
                                                                            
                                                                        </div>
                                                                        <div class="col-sm-6 col-md-12 m-b-40 blog_post_img latest_blog">
                                                                            <h5><a href="#" target="_blank">Demuetra tu Amor </a></h5>
                                                                            <img class="img img-fluid mob_img m-t-20 m-b-20" src="images/blog/detalles3.jpeg" alt="Standard Gallery">
                                                                            <p>
                                                                                Recuerda lo importante que son los que te rodean, siempre han estado contigo.
                                                                            </p>
                                                                      
                                                                        </div>
                                                                        <div class="col-sm-6 col-md-12 blog_post_img latest_blog">
                                                                            <h5><a href="#" target="_blank">Compra con Seguridad </a></h5>
                                                                            <img class="img img-fluid mob_img m-t-20 m-b-20" src="images/blog/detalle2.jpg" alt="Standard Gallery">
                                                                            <p>
                                                                                Tus compras son seguras con nuestra plataform de pagos.
                                                                            </p>
                                                                        
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    </div>



    <script type="text/javascript" src="vistas/bower_components/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="vistas/bower_components/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="vistas/bower_components/tether/dist/js/tether.min.js"></script>
    <script type="text/javascript" src="vistas/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="vistas/bower_components/jquery-slimscroll/jquery.slimscroll.js"></script>

    <script type="text/javascript" src="vistas/bower_components/modernizr/modernizr.js"></script>
    <script type="text/javascript" src="vistas/bower_components/modernizr/feature-detects/css-scrollbars.js"></script>

    <script type="text/javascript" src="vistas/bower_components/classie/classie.js"></script>

    <script type="text/javascript" src="vistas/bower_components/i18next/i18next.min.js"></script>
    <script type="text/javascript" src="vistas/bower_components/i18next-xhr-backend/i18nextXHRBackend.min.js"></script>
    <script type="text/javascript" src="vistas/bower_components/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js"></script>
    <script type="text/javascript" src="vistas/bower_components/jquery-i18next/jquery-i18next.min.js"></script>

    <script type="text/javascript" src="vistas/js2/script.js"></script>
    <script src="vistas/js2/demo-12.js"></script>
    <script src="vistas/js2/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="vistas/js2/jquery.mousewheel.min.js"></script>


</body>

</html>