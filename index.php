<?php 
session_start();
// Check if the user is already logged in
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
    header("Location: dashboard.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Pongapong San Pablo Resident Information System</title>
    <meta name="description" content="PSPRIS - Pongapong San Pablo Resident Information System">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Lato.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/Application-Form.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/css/theme.bootstrap_4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Basic-icons.css">
    <link rel="stylesheet" href="assets/css/Ludens---1-Index-Table-with-Search--Sort-Filters-v20.css">
    <link rel="stylesheet" href="assets/css/Pricing-Free-Paid-badges.css">
    <link rel="stylesheet" href="assets/css/Table-With-Search-search-table.css">
    <link rel="stylesheet" href="assets/css/Table-With-Search.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md sticky-top bg-white">
        <div class="container-fluid"><a class="navbar-brand" href="#">Pongapong San Pablo Resident Information System</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-2"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-2">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="dashboard.php">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link" href="residents-complains.php">Complains</a></li>
                    <li class="nav-item"><a class="nav-link" href="residents.php">Residents</a></li>
                    <li class="nav-item"><a class="nav-link" href="residents-decease.php">Decease Residents</a></li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="#"><button class="btn btn-outline-primary" type="button" data-bs-toggle="modal" data-bs-target="#login">Log In</button></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="text-center text-white masthead" style="background: url('assets/img/bg-pspris.jpg')no-repeat center center;background-size: cover;">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto position-relative">
                    <h1 class="mb-5">Pongapong San Pablo Resident Information System</h1>
                </div>
                <div class="col-md-10 col-lg-8 col-xl-7 mx-auto position-relative">
                    <form action="functions/check-resident.php" method="post">
                        <div class="row">
                            <div class="col-12 col-md-9 mb-2 mb-md-0"><input class="form-control form-control-lg" type="text" name="resident" placeholder="Resident name"></div>
                            <div class="col-12 col-md-3"><button class="btn btn-primary btn-lg" type="submit">Check</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>
    <section class="text-center bg-light features-icons">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="mx-auto features-icons-item mb-5 mb-lg-0 mb-lg-3">
                        <div class="d-flex features-icons-icon"><i class="icon-people m-auto text-primary" data-bss-hover-animate="pulse"></i></div>
                        <h3>Total Residents</h3>
                        <p class="lead mb-0" style="font-size: 35px;"><strong>0</strong></p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="mx-auto features-icons-item mb-5 mb-lg-0 mb-lg-3">
                        <div class="d-flex features-icons-icon"><i class="icon-symbol-male m-auto text-primary" data-bss-hover-animate="pulse"></i></div>
                        <h3>Male</h3>
                        <p class="lead mb-0" style="font-size: 35px;"><strong>0</strong></p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="mx-auto features-icons-item mb-5 mb-lg-0 mb-lg-3">
                        <div class="d-flex features-icons-icon"><i class="icon-symbol-female m-auto text-primary" data-bss-hover-animate="pulse"></i></div>
                        <h3>Female</h3>
                        <p class="lead mb-0" style="font-size: 35px;"><strong>0</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="bg-light footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-start my-auto h-100">
                    <ul class="list-inline mb-2">
                        <li class="list-inline-item"><a href="#">About</a></li>
                        <li class="list-inline-item"><span>⋅</span></li>
                        <li class="list-inline-item"><a href="#">Contact</a></li>
                        <li class="list-inline-item"><span>⋅</span></li>
                        <li class="list-inline-item"><a href="#">Terms of &nbsp;Use</a></li>
                        <li class="list-inline-item"><span>⋅</span></li>
                        <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
                    </ul>
                    <p class="text-muted small mb-4 mb-lg-0">© Pongapong San Pablo Resident Information System 2023. All Rights Reserved.</p>
                </div>
                <div class="col-lg-6 text-center text-lg-end my-auto h-100">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="#"><i class="fa fa-facebook fa-2x fa-fw"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-twitter fa-2x fa-fw"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-instagram fa-2x fa-fw"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <div class="modal fade" role="dialog" tabindex="-1" id="login">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Sign In</h4><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form method="post" action="functions/sign-in.php">
                        <div class="form-group mb-3">
                            <div class="input-group"><span class="text-primary input-group-text"><i class="fa fa-user"></i></span><input class="form-control" type="text" required="" name="username" placeholder="Username"></div>
                        </div>
                        <div class="form-group mb-3">
                            <div class="input-group"><span class="text-primary input-group-text"><i class="fa fa-lock"></i></span><input class="form-control" type="password" name="password" required="" placeholder="Password"></div>
                        </div>
                        <div class="form-group mb-3"><button class="btn btn-primary btn-lg" style="width: 100%;" type="submit">Log in</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/jquery.tablesorter.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-filter.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-storage.min.js"></script>
    <script src="assets/js/Ludens---1-Index-Table-with-Search--Sort-Filters-v20-Ludens---1-Index-Table-with-Search--Sort-Filters.js"></script>
    <script src="assets/js/Ludens---1-Index-Table-with-Search--Sort-Filters-v20-Ludens---Material-UI-Actions.js"></script>
    <script src="assets/js/Table-With-Search-search-table.js"></script>
</body>

</html>