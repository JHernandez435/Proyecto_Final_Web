<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$result="";
if(isset($_POST['submit'])){
    require 'phpmailer/Exception.php';
    require 'phpmailer/PHPMailer.php';
    require 'phpmailer/SMTP.php';
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host='smtp.gmail.com';
    $mail->Port=587;
    $mail->SMTPAuth=true;
    $mail->SMTPSecure='tls';
    $mail->Username='gaway1060@gmail.com';
    $mail->Password='G@w@y1060';

    $mail->setFrom($_POST['email'],$_POST['nombre']);
    $mail->addAddress($_POST['email']);
    $mail->addReplyTo($_POST['email'],$_POST['nombre']);

    $mail->isHTML(true);
    $mail->Subject='Enviado por '.$_POST['nombre'];
    $mail->Body='<h1 align=center>Nombre: '.$_POST['nombre'].'<br> Email: '.$_POST['email'].'<br>Mensaje: '.$_POST['mensaje'].'<br>Telefono: '.$_POST['telefono'].'</h1>';

    if(!$mail->send()){
        $result="Algo esta mal, intentalo de nuevo por favor";
    }else{
        $result="Gracias ".$_POST['nombre']."por contactarnos, espera la respuesta";
    }
}


?>
<!DOCTYPE html>
<html lang="en">


<head>
    <title>
        Proyecto | Administrador
    </title>


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

    <link rel="stylesheet" type="text/css" href="vistas/pages/j-pro/css/demo.css">
    <link rel="stylesheet" type="text/css" href="vistas/pages/j-pro/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="vistas/pages/j-pro/css/j-pro-modern.css">

    <link rel="stylesheet" type="text/css" href="vistas/css2/style.css">

    <link rel="stylesheet" type="text/css" href="vistas/css2/color/color-1.css" id="color" />
    <link rel="stylesheet" type="text/css" href="vistas/css2/linearicons.css">
    <link rel="stylesheet" type="text/css" href="vistas/css2/simple-line-icons.css">
    <link rel="stylesheet" type="text/css" href="vistas/css2/ionicons.css">
    <link rel="stylesheet" type="text/css" href="vistas/css2/jquery.mCustomScrollbar.css">
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
                        <a href="index-2.html">
                        <img src="images/logo.png" width="200" height="120" alt="">
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
                                            <h6 class="mega-menu-title">Enlaces Ppulares</h6>
                                            <ul class="mega-menu-links">
                                                <li><a href="form-elements-component.html">Elementos de formulario </a></li>
                                                <li><a href="button.html">Botones</a></li>
                                                <li><a href="map-google.html">Mapa</a></li>
                                                <li><a href="user-card.html">Tarjetas de contacto </a></li>
                                                <li><a href="user-profile.html">informacion del usuario</a></li>
                                                <li><a href="auth-lock-screen.html">Bloquear pantalla</a></li>
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
                                                            <h5>Copias de seguridad</h5>
                                                            <small class="text-muted">Almacene sus datos </small>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="media">
                                                        <div class="media-left">
                                                            <i class="ti-headphone-alt"></i>
                                                        </div>
                                                        <div class="media-body">
                                                            <h5>Soporte</h5>
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
                                                            <h5>Buzón </h5>
                                                            <small class="text-muted">Almacene una gran cantidad de datos en una sola caja
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
                                                            <h5>Localización </h5>
                                                            <small class="text-muted">Encuentra tu ubicación con facilidad </small>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="col-sm-3">
                                            <h6 class="mega-menu-title">Galería </h6>
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
                                                        <input class="form-control" type="text" placeholder="Artisanal kale" id="example-text-input">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="example-search-input" class="col-3 col-form-label">Email</label>
                                                    <div class="col-9">
                                                        <input class="form-control" type="email" placeholder="Enter your E-mail Id" id="example-search-input">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="example-search-input" class="col-3 col-form-label">Contacto</label>
                                                    <div class="col-9">
                                                        <input class="form-control" type="number" placeholder="+91-9898989898" id="example-search-input">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="exampleTextarea" class="col-3 col-form-label">Mensaje</label>
                                                    <div class="col-9">
                                                        <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="nav-right">
                                <li class="header-notification">
                                    <a href="#!">
                                        <i class="ti-bell"></i>
                                        <span class="badge">5</span>
                                    </a>
                                    <ul class="show-notification">
                                        <li>
                                            <h6>Notificaciones </h6>
                                            <label class="label label-danger">Nuevo</label>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <img class="d-flex align-self-center" src="images/user.png" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user">John Doe</h5>
                                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <img class="d-flex align-self-center" src="images/user.png" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user">Joseph William</h5>
                                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <img class="d-flex align-self-center" src="images/user.png" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user">Sara Soudein</h5>
                                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="header-notification">
                                    <a href="#!" class="displayChatbox">
                                        <i class="ti-comments"></i>
                                        <span class="badge">9</span>
                                    </a>
                                </li>
                                <li class="user-profile header-notification">
                                    <a href="#!">
                                        <img src="images/user.png" alt="User-Profile-Image">
                                        <span>John Doe</span>
                                        <i class="ti-angle-down"></i>
                                    </a>
                                    <ul class="show-notification profile-notification">
                                        <li>
                                            <a href="#!">
                                                <i class="ti-settings"></i> Ajustes
                                            </a>
                                        </li>
                                        <li>
                                            <a href="user-profile.html">
                                                <i class="ti-user"></i> Perfil
                                            </a>
                                        </li>
                                        <li>
                                            <a href="email-inbox.html">
                                                <i class="ti-email"></i> Mis Mensages
                                            </a>
                                        </li>
                                        <li>
                                            <a href="auth-lock-screen.html">
                                                <i class="ti-lock"></i> Bloquear pantalla
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!">
                                                <i class="ti-layout-sidebar-left"></i> Cerrar sesión
                                            </a>
                                        </li>
                                    </ul>
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
                                            <h3>Sara Soueidan</h3>
                                        </a>
                                        <a class="dummy-media-object" href="#!">
                                            <img class="round" src="http://1.gravatar.com/avatar/9bc7250110c667cd35c0826059b81b75?s=50&amp;d=identicon&amp;r=G" alt="Shaun Dona" />
                                            <h3>Shaun Dona</h3>
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
                                        <div class="f-13 chat-header">Lary Doe</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="3" data-status="online" data-username="Alice" data-toggle="tooltip" data-placement="left" title="Alice">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-circle" src="images/avatar-2.png" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Alicia </div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="4" data-status="online" data-username="Alia" data-toggle="tooltip" data-placement="left" title="Alia">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-circle" src="images/task/task-u2.jpg" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Alia</div>
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
                        <i class="icofont icofont-rounded-left"></i> Josephin Doe
                    </a>
                </div>
                <div class="media chat-messages">
                    <a class="media-left photo-table" href="#!">
                        <img class="media-object img-circle m-t-5" src="avatar-1.png" alt="Generic placeholder image">
                    </a>
                    <div class="media-body chat-menu-content">
                        <div class="">
                            <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                            <p class="chat-time">8:20 a.m.</p>
                        </div>
                    </div>
                </div>
                <div class="media chat-messages">
                    <div class="media-body chat-menu-reply">
                        <div class="">
                            <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
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
                    <nav class="pcoded-navbar" pcoded-header-position="relative">
                        
                    </nav>

                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">

                            <div class="main-body">
                                <div class="page-wrapper">

                                    <div class="page-header">
                                        <div class="page-header-title">
                                            <h4>Formulario de contacto</h4>
                                            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                                        </div>
                                        <div class="page-header-breadcrumb">
                                            <ul class="breadcrumb-title">
                                                <li class="breadcrumb-item">
                                                    <a href="index-2.html">
                                                        <i class="icofont icofont-home"></i>
                                                    </a>
                                                </li>
                                                <li class="breadcrumb-item"><a href="#!">Ready To Use</a>
                                                </li>
                                                <li class="breadcrumb-item"><a href="#!">Formulario de contacto</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>


                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-12">

                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Danos tus datos de contacto </h5>
                                                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                                                        <div class="card-header-right">
                                                            <i class="icofont icofont-rounded-down"></i>
                                                            <i class="icofont icofont-refresh"></i>
                                                            <i class="icofont icofont-close-circled"></i>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="j-wrapper j-wrapper-640">

                                                            <!-- Fomulario -->

                                                            <form action="" method="post" class="j-pro" id="">
                                                                <div class="j-content">
                                                                    <div class="j-unit">
                                                                        <label class="j-label m-b-10">Google Map</label>
                                                                        <div class="unit" id="google-map" style="width:100%;height:380px;">
                                                                        </div>
                                                                    </div>
                                                                    <div class="j-unit">
                                                                        <label class="j-label">Nombre</label>
                                                                        <div class="j-input">
                                                                            <label class="j-icon-right" for="name">
                                                                                <i class="icofont icofont-ui-user"></i>
                                                                            </label>
                                                                            <input type="text" placeholder="Digite su Nombre" id="name" name="nombre">
                                                                        </div>
                                                                    </div>


                                                                    <div class="j-unit">
                                                                        <label class="j-label">Email</label>
                                                                        <div class="j-input">
                                                                            <label class="j-icon-right" for="email">
                                                                                <i class="icofont icofont-envelope"></i>
                                                                            </label>
                                                                            <input type="email" placeholder="email@ejemplo.com" id="email" name="email">
                                                                        </div>
                                                                    </div>


                                                                    <div class="j-unit">
                                                                        <label class="j-label"> Telefono</label>
                                                                        <div class="j-input">
                                                                            <label class="j-icon-right" for="phone">
                                                                                <i class="icofont icofont-phone"></i>
                                                                            </label>
                                                                            <input type="text" placeholder="Telefono o Celular" id="phone" name="telefono">
                                                                        </div>
                                                                    </div>


                                                                    <div class="j-unit">
                                                                        <label class="j-label">Mensaje </label>
                                                                        <div class="j-input">
                                                                            <textarea placeholder="Escribe tu mensage" spellcheck="false" name="mensaje"></textarea>
                                                                        </div>
                                                                    </div>


                                                                    <div class="j-response"></div>

                                                                </div>

                                                                <div class="j-footer">
                                                                    <button type="submit" name="submit"  class="btn btn-primary">Enviar </button>
                                                                </div>

                                                            </form>



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

    <script type="text/javascript" src="vistas/pages/j-pro/js/jquery.ui.min.js"></script>
    <script type="text/javascript" src="vistas/pages/j-pro/js/jquery.maskedinput.min.js"></script>

    <script type="text/javascript" src="vistas/bower_components/jquery-slimscroll/jquery.slimscroll.js"></script>

    <script type="text/javascript" src="vistas/bower_components/modernizr/modernizr.js"></script>
    <script type="text/javascript" src="vistas/bower_components/modernizr/feature-detects/css-scrollbars.js"></script>

    <script type="text/javascript" src="vistas/bower_components/classie/classie.js"></script>

    <script type="text/javascript" src="vistas/bower_components/i18next/i18next.min.js"></script>
    <script type="text/javascript" src="vistas/bower_components/i18next-xhr-backend/i18nextXHRBackend.min.js"></script>
    <script type="text/javascript" src="vistas/bower_components/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js"></script>
    <script type="text/javascript" src="vistas/bower_components/jquery-i18next/jquery-i18next.min.js"></script>

    <script type="text/javascript" src="vistas/pages/j-pro/js/custom/contact-form.js"></script>
    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBY0mgQROcL8aXp-abr432Xx8DMeItHkzM"></script>
    <script type="text/javascript" src="vistas/js2/script.js"></script>
    <script src="vistas/js2/pcoded.min.js"></script>
    <script src="vistas/js/correo.js"></script>
    <script src="vistas/js2/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="vistas/js2/jquery.mousewheel.min.js"></script>
</body>

<!-- Mirrored from flatable.phoenixcoded.net/default/ready-form-contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Jan 2019 12:03:25 GMT -->

</html>