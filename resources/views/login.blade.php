<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Portal de autogestión | RCI Consultora</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="description" />
    <meta content="Coderthemes" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Theme Config Js -->
    <script src="assets/js/hyper-config.js"></script>

    <!-- Vendor css -->
    <link href="assets/css/vendor.min.css" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="assets/css/app-saas.min.css" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
</head>

<body class="authentication-bg position-relative">
    <div class="position-absolute start-0 end-0 start-0 bottom-0 w-100 h-100">
        <svg xmlns='http://www.w3.org/2000/svg' width='100%' height='100%' viewBox='0 0 800 800'>
            <g fill-opacity='0.22'>
                <circle style="fill: rgba(var(--ct-primary-rgb), 0.1);" cx='400' cy='400' r='600' />
                <circle style="fill: rgba(var(--ct-primary-rgb), 0.2);" cx='400' cy='400' r='500' />
                <circle style="fill: rgba(var(--ct-primary-rgb), 0.3);" cx='400' cy='400' r='300' />
                <circle style="fill: rgba(var(--ct-primary-rgb), 0.4);" cx='400' cy='400' r='200' />
                <circle style="fill: rgba(var(--ct-primary-rgb), 0.5);" cx='400' cy='400' r='100' />
            </g>
        </svg>
    </div>
    <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5 position-relative">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-4 col-lg-5">
                    <div class="card">

                        <!-- Logo -->
                        <div class="card-header py-4 text-center" style="padding-bottom: 5% !important;">
                            <a href="index.html">
                                <span><img src="assets/images/logo.png" alt="logo" height="22" style="height: 50px;"></span>
                            </a>
                        </div>

                        <hr style="height: 2px; background-color: #F5F5F5; border: none;">
                        <div class="card-body p-4" style="padding-top: 20px !important">
                            <form action="/verification">

                                <div class="mb-3">
                                    <label for="dni" class="form-label">DNI</label>
                                    <input class="form-control" type="text" id="dni" required="" placeholder="Ingrese su número de documento">
                                </div>

                                <div class="mb-3">
                                    <label for="telefono" class="form-label">Teléfono</label>
                                    <div class="input-group input-group-merge">
                                        <input type="text" id="telefono" class="form-control" placeholder="Ingrese su numero de teléfono">
                                    </div>
                                </div>

                                <div class="mb-3 mb-0 text-center">
                                    <button class="btn btn-primary" type="submit" style="border-radius: 30px;width: 40%;"> Iniciar sesión </button>
                                </div>

                            </form>
                        </div> <!-- end card-body -->
                    </div>
                    <!-- end card -->


                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->

    <footer class="footer footer-alt">
        2024 -
        <script>document.write(new Date().getFullYear())</script> © RCI Consultora
    </footer>
    <!-- Vendor js -->
    <script src="assets/js/vendor.min.js"></script>

    <!-- App js -->
    <script src="assets/js/app.min.js"></script>

</body>
</html>
