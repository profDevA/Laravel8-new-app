<!DOCTYPE html>
<html class="loading" lang="en">
<!-- BEGIN : Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>
        @yield('title')
    </title>
    <link rel="shortcut icon" type="image/x-icon"
          href="assets/images/favicon.ico">
    <link
        href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900%7CMontserrat:300,400,500,600,700,800,900"
        rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <!-- font icons-->
    <link rel="stylesheet" type="text/css" href="app-assets/fonts/feather/style.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/fonts/simple-line-icons/style.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/perfect-scrollbar.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/prism.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/switchery.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/apexcharts.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN APEX CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/colors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/components.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/layout-dark.min.css">
    <link rel="stylesheet" href="app-assets/css/plugins/switchery.min.css">
    <!-- END APEX CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" href="app-assets/css/pages/charts-apex.min.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END: Custom CSS-->
</head>
<!-- END : Head-->

<!-- BEGIN : Body-->
<body class="vertical-layout vertical-menu 2-columns  navbar-sticky" data-menu="vertical-menu" data-col="2-columns">
<!-- Nav Start -->
<nav class="navbar navbar-expand-lg navbar-light header-navbar navbar-fixed">
    <div class="container-fluid navbar-wrapper">
        <div class="navbar-header d-flex">
            <div
                class="navbar-toggle menu-toggle d-xl-none d-block float-left align-items-center justify-content-center"
                data-toggle="collapse"><i class="ft-menu font-medium-3"></i></div>
            <ul class="navbar-nav">
                <li>
                    <h2 class="page-title">
                        @yield('page-title')
                    </h2>
                </li>
            </ul>
        </div>
        <div class="navbar-container">
            <div class="collapse navbar-collapse d-block" id="navbarSupportedContent">
                <ul class="navbar-nav">

                </ul>
            </div>
        </div>
    </div></nav>
<!-- Navbar (Header) Ends-->

<!-- ////////////////////////////////////////////////////////////////////////////-->
<div class="wrapper">
    <!-- main menu-->
    <!--.main-menu(class="#{menuColor} #{menuOpenType}", class=(menuShadow == true ? 'menu-shadow' : ''))-->
    <div class="app-sidebar menu-fixed" data-background-color="man-of-steel"
         data-image="app-assets/img/sidebar-bg/01.jpg" data-scroll-to-active="true">
        <!-- main menu header-->
        <!-- Sidebar Header starts-->
        <div class="sidebar-header">
            <div class="logo clearfix">
                <a class="logo-text float-left" href="/">
                    <div class="logo-img">
                        <img src="assets/images/logo.png" alt="Zap Responder Logo"/>
                    </div>
                </a>
                <a class="nav-toggle d-none d-lg-none d-xl-block" id="sidebarToggle" href="javascript:;">
                    <i class="toggle-icon ft-toggle-right" data-toggle="expanded"></i>
                </a>
                <a class="nav-close d-block d-lg-block d-xl-none" id="sidebarClose" href="javascript:;">
                    <i class="ft-x"></i>
                </a>
            </div>
            <div class="avatar-wrapper">
                <div class="avatar avatar-md">
                    <img src="app-assets/img/portrait/small/avatar-s-2.png" alt="Avatar">
                    <span class="avatar-status-online"></span>
                    <i></i>
                </div>
            </div>

        </div>
        <!-- Sidebar Header Ends-->
        <!-- / main menu header-->
        <!-- main menu content-->
        <div class="sidebar-content main-menu-content">
            <div class="nav-container">
                <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                    <li class="nav-item"><a href="/"><i class="ft-home"></i><span class="menu-title"
                                                                                         data-i18n="Home">Início</span></a>
                    </li>
                    <li class=" nav-item"><a href="connector"><i class="fa fa-whatsapp"></i><span
                                class="menu-title"
                                data-i18n="">Connector Web</span></a>
                    </li>
                    <li class=" nav-item"><a href="submit"><i class="ft-send"></i><span class="menu-title"
                                                                                             data-i18n="Chat">Enviar</span></a>
                    </li>
                    <li class=" nav-item"><a href="chatbot">
                            <i class="icon-chatbot">
                                <svg version="1.1" id="" xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink"
                                     x="0px" y="0px" viewBox="0 0 122.88 105.21"
                                     style="enable-background:new 0 0 122.88 105.21"
                                     xml:space="preserve">
                    <style type="text/css">
                        .st0 {
                            fill-rule: evenodd;
                            clip-rule: evenodd;
                        }
                    </style>
                                    <g>
                                        <path class="st0"
                                              d="M63.91,18.75v12.16h33.51c5.43,0,9.87,4.44,9.87,9.87v12.47h13.42c1.19,0,2.17,0.97,2.17,2.17v25.28 c0,1.19-0.97,2.17-2.17,2.17h-13.42v12.47c0,5.43-4.44,9.87-9.87,9.87h-73c-5.43,0-9.87-4.44-9.87-9.87V82.87H2.17 C0.97,82.87,0,81.9,0,80.71V55.42c0-1.19,0.97-2.17,2.17-2.17h12.38V40.79c0-5.43,4.44-9.87,9.87-9.87h33.51V18.75 c-3.85-1.26-6.62-4.87-6.62-9.14c0-5.31,4.3-9.61,9.61-9.61c5.31,0,9.61,4.3,9.61,9.61C70.53,13.88,67.75,17.49,63.91,18.75 L63.91,18.75z M41.03,79.74h40.81c1.99,0,3.62,1.63,3.62,3.62v1.7c0,1.99-1.63,3.62-3.62,3.62H41.03c-1.99,0-3.62-1.63-3.62-3.62 v-1.7C37.41,81.36,39.04,79.74,41.03,79.74L41.03,79.74z M78.7,47.59c5.37,0,9.73,4.35,9.73,9.73c0,5.37-4.35,9.72-9.73,9.72 s-9.72-4.35-9.72-9.72C68.97,51.94,73.33,47.59,78.7,47.59L78.7,47.59z M44.18,47.59c5.37,0,9.72,4.35,9.72,9.73 c0,5.37-4.35,9.72-9.72,9.72c-5.37,0-9.72-4.35-9.72-9.72C34.46,51.94,38.81,47.59,44.18,47.59L44.18,47.59z"/>
                                    </g>
                  </svg>
                            </i><span class="menu-title" data-i18n="Task Board">ChatBot</span></a>
                    </li>
                    <li class=" nav-item"><a href="leads"><i class="icon-users"></i><span class="menu-title"
                                                                                               data-i18n="Task Board">Leads</span></a>
                    </li>
                    <li class=" nav-item"><a href="tags"><i class="fa fa-tags"></i><span class="menu-title"
                                                                                              data-i18n="Calendar">Tags</span></a>
                    </li>
                    <li class=" nav-item"><a href="apis"><i class="ft-rss"></i><span
                                class="menu-title"
                                data-i18n="Api">API</span></a>
                    </li>
                    <li class=" nav-item"><a href="options"><i
                                class="ft-settings"></i><span class="menu-title" data-i18n="Options">Opções</span></a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- main menu content-->
        <div class="sidebar-background"></div>
        <!-- main menu footer-->
        <!-- include includes/menu-footer-->
        <!-- main menu footer-->
    </div>
    <!-- / main menu-->

    <div class="main-panel">
        <!-- BEGIN : Main Content-->
        @yield('content')
        <!-- END : End Main Content-->

        <!-- BEGIN : Footer-->
        <footer class="footer undefined undefined">
            <p class="clearfix text-muted m-0"><span>Copyright &copy; 2020 &nbsp;</span>
                <a href="" id="pixinventLink" target="_blank">ZAP RESPONDER</a>
                <span class="d-none d-sm-inline-block">, All rights reserved.</span>
            </p>
        </footer>
        <!-- End : Footer-->
        <!-- Scroll to top button -->
        <button class="btn btn-primary scroll-top" type="button"><i class="ft-arrow-up"></i></button>

    </div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->


<div class="sidenav-overlay"></div>

<!-- BEGIN VENDOR JS-->
<script src="app-assets/vendors/js/vendors.min.js"></script>
<script src="app-assets/vendors/js/switchery.min.js"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<script src="app-assets/vendors/js/apexcharts.min.js"></script>
<!-- END PAGE VENDOR JS-->
<!-- BEGIN APEX JS-->
<script src="app-assets/js/core/app-menu.min.js"></script>
<script src="app-assets/js/core/app.min.js"></script>
<script src="app-assets/js/notification-sidebar.min.js"></script>
<script src="app-assets/js/customizer.min.js"></script>
<script src="app-assets/js/scroll-top.min.js"></script>
<!-- END APEX JS-->
<!-- BEGIN PAGE LEVEL JS-->
<script src="app-assets/js/charts-apex.min.js"></script>
<!-- END PAGE LEVEL JS-->
<!-- BEGIN: Custom JS-->
<script src="assets/js/scripts.js"></script>
</body>
<!-- END : Body-->

</html>
