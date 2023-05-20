<?php include_once 'functions/authentication.php'; ?>
<?php include_once 'functions/dashboard-counter.php'; ?>
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
                    <li class="nav-item"><a class="nav-link active" href="functions/sign-out.php"><button class="btn btn-outline-primary" type="button">Logout</button></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="text-center text-white masthead" style="background: url('assets/img/bg-pspris.jpg')no-repeat center center;background-size: cover;">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto position-relative">
                    <h1 class="mb-5">Dashboard</h1>
                </div>
            </div>
        </div>
    </header>
    <div class="container py-4 py-xl-5">
        <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3 d-xl-flex">
            <div class="col">
                <div class="card mb-4 border-primary">
                    <div class="card-body text-center p-4">
                        <h4 class="fw-bold card-subtitle">Total Residents</h4>
                        <h4 class="display-5 fw-bold card-title">0</h4>
                        <p>PSPRIS - System</p><a class="btn btn-primary d-block w-100" role="button" href="residents.php">View Residents</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-4 border-primary">
                    <div class="card-body text-center p-4">
                        <h4 class="fw-bold card-subtitle">Total Male</h4>
                        <h4 class="display-5 fw-bold card-title"><?php get_male(); ?></h4>
                        <p>PSPRIS - System</p><a class="btn btn-primary d-block w-100" role="button" href="residents.php">View Residents</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-4 border-primary">
                    <div class="card-body text-center p-4">
                        <h4 class="fw-bold card-subtitle">Total Female</h4>
                        <h4 class="display-5 fw-bold card-title"><?php get_female(); ?></h4>
                        <p>PSPRIS - System</p><a class="btn btn-primary d-block w-100" role="button" href="residents.php">View Residents</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-4 border-primary">
                    <div class="card-body text-center p-4">
                        <h4 class="fw-bold card-subtitle">Total Deceased</h4>
                        <h4 class="display-5 fw-bold card-title"><?php get_deceased(); ?></h4>
                        <p>PSPRIS - System</p><a class="btn btn-primary d-block w-100" role="button" href="#">View Deceased</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-4 border-primary">
                    <div class="card-body text-center p-4">
                        <h4 class="fw-bold card-subtitle">Total Young</h4>
                        <h4 class="display-5 fw-bold card-title"><?php get_young(); ?></h4>
                        <p>PSPRIS - System</p><a class="btn btn-primary d-block w-100" role="button" href="residents.php">View Residents</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-4 border-primary">
                    <div class="card-body text-center p-4">
                        <h4 class="fw-bold card-subtitle">Total Adult</h4>
                        <h4 class="display-5 fw-bold card-title"><?php get_old(); ?></h4>
                        <p>PSPRIS - System</p><a class="btn btn-primary d-block w-100" role="button" href="residents.php">View Residents</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-4 border-primary">
                    <div class="card-body text-center p-4">
                        <h4 class="fw-bold card-subtitle">Total Complains</h4>
                        <h4 class="display-5 fw-bold card-title"><?php get_total(); ?></h4>
                        <p>PSPRIS - System</p><a class="btn btn-primary d-block w-100" role="button" href="complains.php">View Complains</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-4 border-primary">
                    <div class="card-body text-center p-4">
                        <h4 class="fw-bold card-subtitle">Total Resolve</h4>
                        <h4 class="display-5 fw-bold card-title"><?php get_resolve(); ?></h4>
                        <p>PSPRIS - System</p><a class="btn btn-primary d-block w-100" role="button" href="complains.php">View Resolves</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-4 border-primary">
                    <div class="card-body text-center p-4">
                        <h4 class="fw-bold card-subtitle">Total Complains Pending</h4>
                        <h4 class="display-5 fw-bold card-title"><?php get_active(); ?></h4>
                        <p>PSPRIS - System</p><a class="btn btn-primary d-block w-100" role="button" href="complains.php">View Pending Compalins</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
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