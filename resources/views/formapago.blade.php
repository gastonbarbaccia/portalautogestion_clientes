<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Dashboard | RCI Consultora</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description"/>
    <meta content="Coderthemes" name="author"/>

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Daterangepicker css -->
    <link href="assets/vendor/daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css">

    <!-- Vector Map css -->
    <link href="assets/vendor/jsvectormap/jsvectormap.min.css" rel="stylesheet" type="text/css">

    <!-- Theme Config Js -->
    <script src="assets/js/hyper-config.js"></script>

    <!-- Vendor css -->
    <link href="assets/css/vendor.min.css" rel="stylesheet" type="text/css"/>

    <!-- App css -->
    <link href="assets/css/app-saas.min.css" rel="stylesheet" type="text/css" id="app-style"/>

    <!-- Icons css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css"/>
</head>

<body>
<!-- Begin page -->
<div class="wrapper">


    <!-- ========== Topbar Start ========== -->
    <div class="navbar-custom">
        <div class="topbar container-fluid">
            <div class="d-flex align-items-center gap-lg-2 gap-1">

                <!-- Topbar Brand Logo -->
                <div class="logo-topbar">
                    <!-- Logo light -->
                    <a href="#" class="logo-light">
                            <span class="logo-lg">
                                <img src="assets/images/logo.png" alt="logo">
                            </span>
                        <span class="logo-sm">
                                <img src="assets/images/logo-sm.png" alt="small logo">
                            </span>
                    </a>

                    <!-- Logo Dark -->
                    <a href="#" class="logo-dark">
                            <span class="logo-lg">
                                <img src="assets/images/logo-dark.png" alt="dark logo">
                            </span>
                        <span class="logo-sm">
                                <img src="assets/images/logo-dark-sm.png" alt="small logo">
                            </span>
                    </a>
                </div>

                <!-- Sidebar Menu Toggle Button -->
                <button class="button-toggle-menu">
                    <i class="mdi mdi-menu"></i>
                </button>

                <!-- Horizontal Menu Toggle Button -->
                <button class="navbar-toggle" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </button>
            </div>

            <ul class="topbar-menu d-flex align-items-center gap-3">
                <li class="dropdown">
                    <a class="nav-link dropdown-toggle arrow-none nav-user px-2" data-bs-toggle="dropdown" role="button"
                       aria-haspopup="false" aria-expanded="false">

                            <span class="">
                                <h5 class="my-0">Dominic Keller</h5>
                                <h6 class="my-0 fw-normal">35991682</h6>
                            </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- ========== Topbar End ========== -->

    <!-- ========== Left Sidebar Start ========== -->
    <div class="leftside-menu">

        <!-- Brand Logo Light -->
        <a href="#" class="logo logo-light" style="background-color: #f2f3f5;">
                <span class="logo-lg">
                    <img src="assets/images/logo.png" alt="logo">
                </span>
            <span class="logo-sm">
                    <img src="assets/images/logo-sm.png" alt="small logo">
                </span>
        </a>

        <!-- Brand Logo Dark -->
        <a href="#" class="logo logo-dark">
                <span class="logo-lg">
                    <img src="assets/images/logo-dark.png" alt="dark logo">
                </span>
            <span class="logo-sm">
                    <img src="assets/images/logo-dark-sm.png" alt="small logo">
                </span>
        </a>

        <!-- Sidebar Hover Menu Toggle Button -->
        <div class="button-sm-hover" data-bs-toggle="tooltip" data-bs-placement="right" title="Show Full Sidebar">
            <i class="ri-checkbox-blank-circle-line align-middle"></i>
        </div>

        <!-- Full Sidebar Menu Close Button -->
        <div class="button-close-fullsidebar">
            <i class="ri-close-fill align-middle"></i>
        </div>

        <!-- Sidebar -->
        <div class="h-100" id="leftside-menu-container" data-simplebar>
            <!-- Leftbar User -->
            <div class="leftbar-user">
                <a href="pages-profile.html">
                    <img src="assets/images/users/avatar-1.jpg" alt="user-image" height="42"
                         class="rounded-circle shadow-sm">
                    <span class="leftbar-user-name mt-2">Dominic Keller</span>
                </a>
            </div>

            <!--- Sidemenu -->
            <ul class="side-nav">
                <li class="side-nav-item">
                    <a data-bs-toggle="collapse" href="#" aria-expanded="false" aria-controls="sidebarInicio"
                       class="side-nav-link">
                        <i class="uil-home-alt"></i>
                        <span> Inicio </span>
                    </a>
                </li>

                <li class="side-nav-item">
                    <a data-bs-toggle="collapse" href="#" aria-expanded="false" aria-controls="sidebarComprobante"
                       class="side-nav-link">
                        <i class="uil-file-upload-alt"></i>
                        <span> Subir comprobante </span>
                    </a>
                </li>

                <li class="side-nav-item">
                    <a data-bs-toggle="collapse" href="/" aria-expanded="false" aria-controls="sidebarLogout"
                       class="side-nav-link">
                        <i class="ri-logout-box-r-line"></i>
                        <span> Cerrar sesión </span>
                    </a>
                </li>
            </ul>
            <!--- End Sidemenu -->

            <div class="clearfix"></div>
        </div>
    </div>
    <!-- ========== Left Sidebar End ========== -->

    <!-- ============================================================== -->
    <!-- Start Page Content Here -->
    <!-- ============================================================== -->

    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid m-3">
            </div>
            <!-- container -->
            <div class="container">
                <div class="col">
                    <div class="card rounded-4">
                        <div class="card-body">
                            <h4>
                                Seleccione la forma de pago
                            </h4>
                        </div>
                        <div class="container ms-2">
                            <div class="row mb-5">
                                <div class="col-11 mt-3">
                                    <form action="contrato">
                                        <div class="container">
                                            <form action="/" method="POST">
                                                <div class="card mb-4" style="max-width: 540px; cursor: pointer;" onclick="document.getElementById('flexRadioDefault1').click()">
                                                    <div class="card-body d-flex align-items-center">
                                                        <!-- Icono -->
                                                        <img src="assets/images/transfer.png" alt=""
                                                             style="height: 80px;width:89px;">

                                                        <!-- Texto y opción de radio -->
                                                        <div>
                                                            <div class="form-check">
                                                                <input class="form-check-input ms-4" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                                <label class="form-check-label ms-2 fw-bold" for="flexRadioDefault1">
                                                                    Transferencia por cuenta bancaria
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <!-- Card 2 -->
                                                <div class="card mb-4" style="max-width: 540px; cursor: pointer;" onclick="document.getElementById('flexRadioDefault2').click()">
                                                    <div class="card-body d-flex align-items-center">
                                                        <!-- Icono -->
                                                        <img src="assets/images/pagofacil-pago-facil-seeklogo.png" alt=""
                                                             style="height: 80px;width:89px;">

                                                        <!-- Texto y opción de radio -->
                                                        <div>
                                                            <div class="form-check">
                                                                <input class="form-check-input ms-4" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                                                <label class="form-check-label ms-2 fw-bold" for="flexRadioDefault1">
                                                                    Transferencia por cuenta bancaria
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row pb-3">
                                                    <div class="col"></div>
                                                    <div class="col"></div>
                                                    <div class="col"></div>
                                                    <a href="/"
                                                       class="btn btn-danger col align-self-end rounded-pill me-2">
                                                        Cancelar </a>
                                                    <button type="submit"
                                                            class="btn btn-dark col align-self-end rounded-pill">
                                                        Siguiente
                                                    </button>
                                                    <div class="col"></div>
                                                </div>

                                            </form>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
                    <footer class="footer">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6">
                                    <script>document.write(new Date().getFullYear())</script>
                                    © RCI Consultora
                                </div>
                                <div class="col-md-6">
                                    <div class="text-md-end footer-links d-none d-md-block">
                                        <a href="javascript: void(0);">Soporte</a>
                                        <a href="javascript: void(0);">Consultas</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </footer>
                    <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

        <!-- Theme Settings -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="theme-settings-offcanvas">
            <div class="d-flex align-items-center bg-primary p-3 offcanvas-header">
                <h5 class="text-white m-0">Theme Settings</h5>
                <button type="button" class="btn-close btn-close-white ms-auto" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
            </div>

            <div class="offcanvas-body p-0">
                <div data-simplebar class="h-100">
                    <div class="card mb-0 p-3">
                        <h5 class="mt-0 font-16 fw-bold mb-3">Choose Layout</h5>
                        <div class="row">
                            <div class="col-4">
                                <div class="form-check card-radio">
                                    <input id="customizer-layout01" name="data-layout" type="radio" value="vertical"
                                           class="form-check-input">
                                    <label class="form-check-label p-0 avatar-md w-100" for="customizer-layout01">
                                    <span class="d-flex h-100">
                                        <span class="flex-shrink-0">
                                            <span class="bg-light d-flex h-100 border-end flex-column p-1 px-2">
                                                <span class="d-block p-1 bg-dark-lighten rounded mb-1"></span>
                                                <span
                                                    class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                <span
                                                    class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                <span
                                                    class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                <span
                                                    class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="bg-light d-block p-1"></span>
                                            </span>
                                        </span>
                                    </span>
                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Vertical</h5>
                            </div>
                            <div class="col-4">
                                <div class="form-check card-radio">
                                    <input id="customizer-layout02" name="data-layout" type="radio" value="horizontal"
                                           class="form-check-input">
                                    <label class="form-check-label p-0 avatar-md w-100" for="customizer-layout02">
                                    <span class="d-flex h-100 flex-column">
                                        <span
                                            class="bg-light d-flex p-1 align-items-center border-bottom border-secondary border-opacity-25">
                                            <span class="d-block p-1 bg-dark-lighten rounded me-1"></span>
                                            <span
                                                class="d-block border border-3 border-secondary border-opacity-25 rounded ms-auto"></span>
                                            <span
                                                class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                            <span
                                                class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                            <span
                                                class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                        </span>
                                        <span class="bg-light d-block p-1"></span>
                                    </span>
                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Horizontal</h5>
                            </div>
                        </div>

                        <h5 class="my-3 font-16 fw-bold">Color Scheme</h5>

                        <div class="colorscheme-cardradio">
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-check card-radio">
                                        <input class="form-check-input" type="radio" name="data-bs-theme"
                                               id="layout-color-light" value="light">
                                        <label class="form-check-label p-0 avatar-md w-100" for="layout-color-light">
                                            <div id="sidebar-size">
                                            <span class="d-flex h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 border-end flex-column p-1 px-2">
                                                        <span class="d-block p-1 bg-dark-lighten rounded mb-1"></span>
                                                        <span
                                                            class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                        <span
                                                            class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                        <span
                                                            class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                        <span
                                                            class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column bg-white rounded-2">
                                                        <span class="bg-light d-block p-1"></span>
                                                    </span>
                                                </span>
                                            </span>
                                            </div>

                                            <div id="topnav-color" class="bg-white rounded-2 h-100">
                                            <span class="d-flex h-100 flex-column">
                                                <span
                                                    class="bg-light d-flex p-1 align-items-center border-bottom border-secondary border-opacity-25">
                                                    <span class="d-block p-1 bg-dark-lighten rounded me-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded ms-auto"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                                </span>
                                                <span class="d-flex h-100 flex-column bg-white rounded-2">
                                                    <span class="bg-light d-block p-1"></span>
                                                </span>
                                            </span>
                                            </div>
                                        </label>
                                    </div>
                                    <h5 class="font-14 text-center text-muted mt-2">Light</h5>
                                </div>

                                <div class="col-4">
                                    <div class="form-check card-radio">
                                        <input class="form-check-input" type="radio" name="data-bs-theme"
                                               id="layout-color-dark" value="dark">
                                        <label class="form-check-label p-0 avatar-md w-100 bg-black"
                                               for="layout-color-dark">
                                            <div id="sidebar-size">
                                            <span class="d-flex h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 flex-column p-1 px-2">
                                                        <span class="d-block p-1 bg-dark-lighten rounded mb-1"></span>
                                                        <span
                                                            class="d-block border border-secondary border-opacity-25 border-3 rounded w-100 mb-1"></span>
                                                        <span
                                                            class="d-block border border-secondary border-opacity-25 border-3 rounded w-100 mb-1"></span>
                                                        <span
                                                            class="d-block border border-secondary border-opacity-25 border-3 rounded w-100 mb-1"></span>
                                                        <span
                                                            class="d-block border border-secondary border-opacity-25 border-3 rounded w-100 mb-1"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                    </span>
                                                </span>
                                            </span>
                                            </div>

                                            <div id="topnav-color">
                                            <span class="d-flex h-100 flex-column">
                                                <span
                                                    class="bg-light-lighten d-flex p-1 align-items-center border-bottom border-opacity-25 border-primary border-opacity-25">
                                                    <span class="d-block p-1 bg-dark-lighten rounded me-1"></span>
                                                    <span
                                                        class="d-block border border-primary border-opacity-25 border-3 rounded ms-auto"></span>
                                                    <span
                                                        class="d-block border border-primary border-opacity-25 border-3 rounded ms-1"></span>
                                                    <span
                                                        class="d-block border border-primary border-opacity-25 border-3 rounded ms-1"></span>
                                                    <span
                                                        class="d-block border border-primary border-opacity-25 border-3 rounded ms-1"></span>
                                                </span>
                                                <span class="bg-light-lighten d-block p-1"></span>
                                            </span>
                                            </div>
                                        </label>
                                    </div>
                                    <h5 class="font-14 text-center text-muted mt-2">Dark</h5>
                                </div>
                            </div>
                        </div>

                        <div id="layout-width">
                            <h5 class="my-3 font-16 fw-bold">Layout Mode</h5>

                            <div class="row">
                                <div class="col-4">
                                    <div class="form-check card-radio">
                                        <input class="form-check-input" type="radio" name="data-layout-mode"
                                               id="layout-mode-fluid" value="fluid">
                                        <label class="form-check-label p-0 avatar-md w-100" for="layout-mode-fluid">
                                            <div id="sidebar-size">
                                            <span class="d-flex h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 border-end flex-column p-1 px-2">
                                                        <span class="d-block p-1 bg-dark-lighten rounded mb-1"></span>
                                                        <span
                                                            class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                        <span
                                                            class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                        <span
                                                            class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                        <span
                                                            class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column rounded-2">
                                                        <span class="bg-light d-block p-1"></span>
                                                    </span>
                                                </span>
                                            </span>
                                            </div>

                                            <div id="topnav-color">
                                            <span class="d-flex h-100 flex-column">
                                                <span
                                                    class="bg-light d-flex p-1 align-items-center border-bottom border-secondary border-opacity-25">
                                                    <span class="d-block p-1 bg-dark-lighten rounded me-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded ms-auto"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                                </span>
                                                <span class="bg-light d-block p-1"></span>
                                            </span>
                                            </div>
                                        </label>
                                    </div>
                                    <h5 class="font-14 text-center text-muted mt-2">Fluid</h5>
                                </div>
                                <div class="col-4" id="layout-boxed">
                                    <div class="form-check card-radio">
                                        <input class="form-check-input" type="radio" name="data-layout-mode"
                                               id="layout-mode-boxed" value="boxed">
                                        <label class="form-check-label p-0 avatar-md w-100 px-2"
                                               for="layout-mode-boxed">
                                            <div id="sidebar-size" class="border-start border-end">
                                            <span class="d-flex h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 border-end flex-column p-1 px-2">
                                                        <span class="d-block p-1 bg-dark-lighten rounded mb-1"></span>
                                                        <span
                                                            class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                        <span
                                                            class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                        <span
                                                            class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                        <span
                                                            class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column rounded-2">
                                                        <span class="bg-light d-block p-1"></span>
                                                    </span>
                                                </span>
                                            </span>
                                            </div>

                                            <div id="topnav-color" class="border-start border-end h-100">
                                            <span class="d-flex h-100 flex-column">
                                                <span
                                                    class="bg-light d-flex p-1 align-items-center border-bottom border-secondary border-opacity-25">
                                                    <span class="d-block p-1 bg-dark-lighten rounded me-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded ms-auto"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                                </span>
                                                <span class="bg-light d-block p-1"></span>
                                            </span>
                                            </div>
                                        </label>
                                    </div>
                                    <h5 class="font-14 text-center text-muted mt-2">Boxed</h5>
                                </div>

                                <div class="col-4" id="layout-detached">
                                    <div class="form-check sidebar-setting card-radio">
                                        <input class="form-check-input" type="radio" name="data-layout-mode"
                                               id="data-layout-detached" value="detached">
                                        <label class="form-check-label p-0 avatar-md w-100" for="data-layout-detached">
                                        <span class="d-flex h-100 flex-column">
                                            <span class="bg-light d-flex p-1 align-items-center border-bottom ">
                                                <span class="d-block p-1 bg-dark-lighten rounded me-1"></span>
                                                <span
                                                    class="d-block border border-3 border-secondary border-opacity-25 rounded ms-auto"></span>
                                                <span
                                                    class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                                <span
                                                    class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                                <span
                                                    class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                            </span>
                                            <span class="d-flex h-100 p-1 px-2">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 flex-column p-1 px-2">
                                                        <span
                                                            class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                        <span
                                                            class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                        <span
                                                            class="d-block border border-3 border-secondary border-opacity-25 rounded w-100"></span>
                                                    </span>
                                                </span>
                                            </span>
                                            <span class="bg-light d-block p-1 mt-auto px-2"></span>
                                        </span>

                                        </label>
                                    </div>
                                    <h5 class="font-14 text-center text-muted mt-2">Detached</h5>
                                </div>
                            </div>
                        </div>

                        <h5 class="my-3 font-16 fw-bold">Topbar Color</h5>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-check card-radio">
                                    <input class="form-check-input" type="radio" name="data-topbar-color"
                                           id="topbar-color-light" value="light">
                                    <label class="form-check-label p-0 avatar-md w-100" for="topbar-color-light">
                                        <div id="sidebar-size">
                                        <span class="d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 border-end  flex-column p-1 px-2">
                                                    <span class="d-block p-1 bg-dark-lighten rounded mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                </span>
                                            </span>
                                        </span>
                                        </div>

                                        <div id="topnav-color">
                                        <span class="d-flex h-100 flex-column">
                                            <span
                                                class="bg-light d-flex p-1 align-items-center border-bottom border-secondary border-opacity-25">
                                                <span class="d-block p-1 bg-dark-lighten rounded me-1"></span>
                                                <span
                                                    class="d-block border border-3 border-secondary border-opacity-25 rounded ms-auto"></span>
                                                <span
                                                    class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                                <span
                                                    class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                                <span
                                                    class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                            </span>
                                            <span class="bg-light d-block p-1"></span>
                                        </span>
                                        </div>
                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Light</h5>
                            </div>

                            <div class="col-4" style="--ct-dark-rgb: 64,73,84;">
                                <div class="form-check card-radio">
                                    <input class="form-check-input" type="radio" name="data-topbar-color"
                                           id="topbar-color-dark" value="dark">
                                    <label class="form-check-label p-0 avatar-md w-100" for="topbar-color-dark">
                                        <div id="sidebar-size">
                                        <span class="d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 border-end  flex-column p-1 px-2">
                                                    <span class="d-block p-1 bg-primary-lighten rounded mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-dark d-block p-1"></span>
                                                </span>
                                            </span>
                                        </span>
                                        </div>

                                        <div id="topnav-color">
                                        <span class="d-flex h-100 flex-column">
                                            <span
                                                class="bg-dark d-flex p-1 align-items-center border-bottom border-secondary border-opacity-25">
                                                <span class="d-block p-1 bg-primary-lighten rounded me-1"></span>
                                                <span
                                                    class="d-block border border-primary border-opacity-25 border-3 rounded ms-auto"></span>
                                                <span
                                                    class="d-block border border-primary border-opacity-25 border-3 rounded ms-1"></span>
                                                <span
                                                    class="d-block border border-primary border-opacity-25 border-3 rounded ms-1"></span>
                                                <span
                                                    class="d-block border border-primary border-opacity-25 border-3 rounded ms-1"></span>
                                            </span>
                                            <span class="bg-light d-block p-1"></span>
                                        </span>
                                        </div>
                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Dark</h5>
                            </div>

                            <div class="col-4">
                                <div class="form-check card-radio">
                                    <input class="form-check-input" type="radio" name="data-topbar-color"
                                           id="topbar-color-brand" value="brand">
                                    <label class="form-check-label p-0 avatar-md w-100" for="topbar-color-brand">
                                        <div id="sidebar-size">
                                        <span class="d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 border-end  flex-column p-1 px-2">
                                                    <span class="d-block p-1 bg-dark-lighten rounded mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-primary bg-gradient d-block p-1"></span>
                                                </span>
                                            </span>
                                        </span>
                                        </div>

                                        <div id="topnav-color">
                                        <span class="d-flex h-100 flex-column">
                                            <span
                                                class="bg-primary bg-gradient d-flex p-1 align-items-center border-bottom border-secondary border-opacity-25">
                                                <span class="d-block p-1 bg-light opacity-25 rounded me-1"></span>
                                                <span
                                                    class="d-block border border-3 border opacity-25 rounded ms-auto"></span>
                                                <span
                                                    class="d-block border border-3 border opacity-25 rounded ms-1"></span>
                                                <span
                                                    class="d-block border border-3 border opacity-25 rounded ms-1"></span>
                                                <span
                                                    class="d-block border border-3 border opacity-25 rounded ms-1"></span>
                                            </span>
                                            <span class="bg-light d-block p-1"></span>
                                        </span>
                                        </div>
                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Brand</h5>
                            </div>
                        </div>

                        <div>
                            <h5 class="my-3 font-16 fw-bold">Menu Color</h5>

                            <div class="row">
                                <div class="col-4">
                                    <div class="form-check sidebar-setting card-radio">
                                        <input class="form-check-input" type="radio" name="data-menu-color"
                                               id="leftbar-color-light" value="light">
                                        <label class="form-check-label p-0 avatar-md w-100" for="leftbar-color-light">
                                            <div id="sidebar-size">
                                            <span class="d-flex h-100">
                                                <span class="flex-shrink-0">
                                                    <span
                                                        class="bg-light d-flex h-100 border-end  flex-column p-1 px-2">
                                                        <span class="d-block p-1 bg-dark-lighten rounded mb-1"></span>
                                                        <span
                                                            class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                        <span
                                                            class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                        <span
                                                            class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                        <span
                                                            class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                    </span>
                                                </span>
                                            </span>
                                            </div>

                                            <div id="topnav-color">
                                            <span class="d-flex h-100 flex-column">
                                                <span
                                                    class="bg-light d-flex p-1 align-items-center border-bottom border-secondary border-opacity-25">
                                                    <span class="d-block p-1 bg-dark-lighten rounded me-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded ms-auto"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                                </span>
                                                <span class="bg-light d-block p-1"></span>
                                            </span>
                                            </div>
                                        </label>
                                    </div>
                                    <h5 class="font-14 text-center text-muted mt-2">Light</h5>
                                </div>

                                <div class="col-4" style="--ct-dark-rgb: 64,73,84;">
                                    <div class="form-check sidebar-setting card-radio">
                                        <input class="form-check-input" type="radio" name="data-menu-color"
                                               id="leftbar-color-dark" value="dark">
                                        <label class="form-check-label p-0 avatar-md w-100" for="leftbar-color-dark">
                                            <div id="sidebar-size">
                                            <span class="d-flex h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-dark d-flex h-100 flex-column p-1 px-2">
                                                        <span class="d-block p-1 bg-dark-lighten rounded mb-1"></span>
                                                        <span
                                                            class="d-block border border-secondary rounded border-opacity-25 border-3 w-100 mb-1"></span>
                                                        <span
                                                            class="d-block border border-secondary rounded border-opacity-25 border-3 w-100 mb-1"></span>
                                                        <span
                                                            class="d-block border border-secondary rounded border-opacity-25 border-3 w-100 mb-1"></span>
                                                        <span
                                                            class="d-block border border-secondary rounded border-opacity-25 border-3 w-100 mb-1"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                    </span>
                                                </span>
                                            </span>
                                            </div>

                                            <div id="topnav-color">
                                            <span class="d-flex h-100 flex-column">
                                                <span
                                                    class="bg-light d-flex p-1 align-items-center border-bottom border-secondary border-primary border-opacity-25">
                                                    <span class="d-block p-1 bg-primary-lighten rounded me-1"></span>
                                                    <span
                                                        class="d-block border border-secondary rounded border-opacity-25 border-3 ms-auto"></span>
                                                    <span
                                                        class="d-block border border-secondary rounded border-opacity-25 border-3 ms-1"></span>
                                                    <span
                                                        class="d-block border border-secondary rounded border-opacity-25 border-3 ms-1"></span>
                                                    <span
                                                        class="d-block border border-secondary rounded border-opacity-25 border-3 ms-1"></span>
                                                </span>
                                                <span class="bg-dark d-block p-1"></span>
                                            </span>
                                            </div>
                                        </label>
                                    </div>
                                    <h5 class="font-14 text-center text-muted mt-2">Dark</h5>
                                </div>
                                <div class="col-4">
                                    <div class="form-check sidebar-setting card-radio">
                                        <input class="form-check-input" type="radio" name="data-menu-color"
                                               id="leftbar-color-brand" value="brand">
                                        <label class="form-check-label p-0 avatar-md w-100" for="leftbar-color-brand">
                                            <div id="sidebar-size">
                                            <span class="d-flex h-100">
                                                <span class="flex-shrink-0">
                                                    <span
                                                        class="bg-primary bg-gradient d-flex h-100 flex-column p-1 px-2">
                                                        <span class="d-block p-1 bg-light-lighten rounded mb-1"></span>
                                                        <span
                                                            class="d-block border opacity-25 rounded border-3 w-100 mb-1"></span>
                                                        <span
                                                            class="d-block border opacity-25 rounded border-3 w-100 mb-1"></span>
                                                        <span
                                                            class="d-block border opacity-25 rounded border-3 w-100 mb-1"></span>
                                                        <span
                                                            class="d-block border opacity-25 rounded border-3 w-100 mb-1"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                    </span>
                                                </span>
                                            </span>
                                            </div>

                                            <div id="topnav-color">
                                            <span class="d-flex h-100 flex-column">
                                                <span
                                                    class="bg-light d-flex p-1 align-items-center border-bottom border-secondary">
                                                    <span class="d-block p-1 bg-dark-lighten rounded me-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded ms-auto"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                                </span>
                                                <span class="bg-primary bg-gradient d-block p-1"></span>
                                            </span>
                                            </div>

                                        </label>
                                    </div>
                                    <h5 class="font-14 text-center text-muted mt-2">Brand</h5>
                                </div>
                            </div>
                        </div>

                        <div id="sidebar-size">
                            <h5 class="my-3 font-16 fw-bold">Sidebar Size</h5>

                            <div class="row">
                                <div class="col-4">
                                    <div class="form-check sidebar-setting card-radio">
                                        <input class="form-check-input" type="radio" name="data-sidenav-size"
                                               id="leftbar-size-default" value="default">
                                        <label class="form-check-label p-0 avatar-md w-100" for="leftbar-size-default">
                                        <span class="d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 border-end  flex-column p-1 px-2">
                                                    <span class="d-block p-1 bg-dark-lighten rounded mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                </span>
                                            </span>
                                        </span>
                                        </label>
                                    </div>
                                    <h5 class="font-14 text-center text-muted mt-2">Default</h5>
                                </div>

                                <div class="col-4">
                                    <div class="form-check sidebar-setting card-radio">
                                        <input class="form-check-input" type="radio" name="data-sidenav-size"
                                               id="leftbar-size-compact" value="compact">
                                        <label class="form-check-label p-0 avatar-md w-100" for="leftbar-size-compact">
                                        <span class="d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 border-end  flex-column p-1">
                                                    <span class="d-block p-1 bg-dark-lighten rounded mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                </span>
                                            </span>
                                        </span>
                                        </label>
                                    </div>
                                    <h5 class="font-14 text-center text-muted mt-2">Compact</h5>
                                </div>

                                <div class="col-4">
                                    <div class="form-check sidebar-setting card-radio">
                                        <input class="form-check-input" type="radio" name="data-sidenav-size"
                                               id="leftbar-size-small" value="condensed">
                                        <label class="form-check-label p-0 avatar-md w-100" for="leftbar-size-small">
                                        <span class="d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 border-end flex-column"
                                                      style="padding: 2px;">
                                                    <span class="d-block p-1 bg-dark-lighten rounded mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                </span>
                                            </span>
                                        </span>
                                        </label>
                                    </div>
                                    <h5 class="font-14 text-center text-muted mt-2">Condensed</h5>
                                </div>

                                <div class="col-4">
                                    <div class="form-check sidebar-setting card-radio">
                                        <input class="form-check-input" type="radio" name="data-sidenav-size"
                                               id="leftbar-size-small-hover" value="sm-hover">
                                        <label class="form-check-label p-0 avatar-md w-100"
                                               for="leftbar-size-small-hover">
                                        <span class="d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 border-end flex-column"
                                                      style="padding: 2px;">
                                                    <span class="d-block p-1 bg-dark-lighten rounded mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                </span>
                                            </span>
                                        </span>
                                        </label>
                                    </div>
                                    <h5 class="font-14 text-center text-muted mt-2">Hover View</h5>
                                </div>

                                <div class="col-4">
                                    <div class="form-check sidebar-setting card-radio">
                                        <input class="form-check-input" type="radio" name="data-sidenav-size"
                                               id="leftbar-size-full" value="full">
                                        <label class="form-check-label p-0 avatar-md w-100" for="leftbar-size-full">
                                        <span class="d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="d-block p-1 bg-dark-lighten mb-1"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                </span>
                                            </span>
                                        </span>
                                        </label>
                                    </div>
                                    <h5 class="font-14 text-center text-muted mt-2">Full Layout</h5>
                                </div>

                                <div class="col-4">
                                    <div class="form-check sidebar-setting card-radio">
                                        <input class="form-check-input" type="radio" name="data-sidenav-size"
                                               id="leftbar-size-fullscreen" value="fullscreen">
                                        <label class="form-check-label p-0 avatar-md w-100"
                                               for="leftbar-size-fullscreen">
                                        <span class="d-flex h-100">
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                </span>
                                            </span>
                                        </span>
                                        </label>
                                    </div>
                                    <h5 class="font-14 text-center text-muted mt-2">Fullscreen Layout</h5>
                                </div>
                            </div>
                        </div>

                        <div id="layout-position">
                            <h5 class="my-3 font-16 fw-bold">Layout Position</h5>

                            <div class="btn-group radio" role="group">
                                <input type="radio" class="btn-check" name="data-layout-position"
                                       id="layout-position-fixed"
                                       value="fixed">
                                <label class="btn btn-soft-primary w-sm" for="layout-position-fixed">Fixed</label>

                                <input type="radio" class="btn-check" name="data-layout-position"
                                       id="layout-position-scrollable" value="scrollable">
                                <label class="btn btn-soft-primary w-sm ms-0"
                                       for="layout-position-scrollable">Scrollable</label>
                            </div>
                        </div>

                        <div id="sidebar-user">
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <label class="font-16 fw-bold m-0" for="sidebaruser-check">Sidebar User Info</label>
                                <div class="form-check form-switch">
                                    <input type="checkbox" class="form-check-input" name="sidebar-user"
                                           id="sidebaruser-check">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <div class="offcanvas-footer border-top p-3 text-center">
                <div class="row">
                    <div class="col-6">
                        <button type="button" class="btn btn-light w-100" id="reset-layout">Reset</button>
                    </div>
                    <div class="col-6">
                        <a href="https://themes.getbootstrap.com/product/hyper-responsive-admin-dashboard-template/"
                           target="_blank" role="button" class="btn btn-primary w-100">Buy Now</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!-- Daterangepicker js -->
        <script src="assets/vendor/daterangepicker/moment.min.js"></script>
        <script src="assets/vendor/daterangepicker/daterangepicker.js"></script>

        <!-- Apex Charts js -->
        <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>

        <!-- Vector Map Js -->
        <script src="assets/vendor/jsvectormap/jsvectormap.min.js"></script>
        <script src="assets/vendor/jsvectormap/maps/world-merc.js"></script>
        <script src="assets/vendor/jsvectormap/maps/world.js"></script>

        <!-- Dashboard App js -->
        <script src="assets/js/pages/demo.dashboard.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>

</body>

</html>
