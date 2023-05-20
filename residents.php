<?php include_once 'functions/authentication.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Pongapong San Pablo Resident Information System</title>
    <meta name="description" content="PSPRIS - Pongapong San Pablo Resident Information System">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Lato.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
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
    <header class="text-center text-white masthead" style="background: url('assets/img/bg-pspris.jpg')no-repeat center center;background-size: cover;height: 25em;">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto position-relative">
                    <h1 class="mb-5">PSPRIS - System</h1>
                </div>
            </div>
        </div>
    </header>
    <section class="py-4 py-xl-5">
        <section class="py-4 py-xl-5">
            <div class="bg-light border rounded border-0 border-light d-flex flex-column justify-content-between align-items-center flex-lg-row p-4 p-lg-5">
                <div class="text-center text-lg-start py-3 py-lg-1">
                    <h2 class="fw-bold mb-2">PSPRIS - System</h2>
                    <p class="mb-0">Here you can view and check resident</p>
                </div>
                <form class="d-flex justify-content-center flex-wrap my-2" method="post">
                    <div class="my-2"><button class="btn btn-primary ms-sm-2" type="button" data-bs-target="#add-resident" data-bs-toggle="modal"><i class="fa fa-plus"></i>&nbsp;Add Resident</button></div>
                </form>
            </div>
        </section>
        <div class="container-fluid">
            <div class="card" id="TableSorterCard">
                <div class="card-header py-3">
                    <div class="row table-topper align-items-center">
                        <div class="col-12 col-sm-5 col-md-6 text-start" style="margin: 0px;padding: 5px 15px;">
                            <p class="text-primary m-0 fw-bold">List of Residents</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="table table-striped table tablesorter" id="ipi-table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th class="text-center">ID</th>
                                        <th class="text-center">FIRSTNAME</th>
                                        <th class="text-center">LASTNAME</th>
                                        <th class="text-center">bIRTHDATE</th>
                                        <th class="text-center">EMAIL</th>
                                        <th class="text-center">PHONE</th>
                                        <th class="text-center">aDDRESS</th>
                                        <th class="text-center">age</th>
                                        <th class="text-center">SEX</th>
                                        <th class="text-center filter-false sorter-false">OPTION</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    <tr>
                                        <td>01</td>
                                        <td>Diseñador</td>
                                        <td>Diseño</td>
                                        <td>5/20/2023</td>
                                        <td>Diseño@gmail.com</td>
                                        <td>+63 12 345 6789</td>
                                        <td>Pngapong San Pablo</td>
                                        <td>21</td>
                                        <td>Male</td>
                                        <td class="text-center align-middle" style="max-height: 60px;height: 60px;"><a class="btn btnMaterial btn-flat success semicircle" role="button" href="residents-profile.php"><i class="far fa-eye"></i></a><a class="btn btnMaterial btn-flat success semicircle" role="button" href="#" data-bs-target="#update-resident" data-bs-toggle="modal"><i class="fas fa-pen"></i></a><button class="btn btnMaterial btn-flat accent btnNoBorders checkboxHover" type="button" style="margin-left: 5px;" data-bs-toggle="modal" data-bs-target="#add-complain"><i class="fas fa-user-shield btnNoBorders" style="color: #DC3545;"></i></button><button class="btn btnMaterial btn-flat accent btnNoBorders checkboxHover" type="button" style="margin-left: 5px;" data-bs-toggle="modal" data-bs-target="#confirmation"><i class="fas fa-trash btnNoBorders" style="color: #DC3545;"></i></button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
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
    <div class="modal fade" role="dialog" tabindex="-1" id="add-resident">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Resident</h4><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <section>
                        <div class="container">
                            <form id="application-form-1" method="post" action="functions/add-residents.php">
                                <div class="form-group mb-3">
                                    <div class="row">
                                        <div class="col">
                                            <p><strong>First Name</strong>&nbsp;<span class="text-danger">*</span></p><input class="form-control" type="text" required="" name="firstname" placeholder="Ex. Juan">
                                        </div>
                                        <div class="col">
                                            <p><strong>Last Name</strong>&nbsp;<span class="text-danger">*</span></p><input class="form-control" type="text" required="" name="lastname" placeholder="Ex. Smith">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <div class="row">
                                        <div class="col">
                                            <p><strong>Date Of Birth</strong>&nbsp;<span class="text-danger">*</span></p><input class="form-control" type="date" required="" name="birthdate">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <p><strong>Email&nbsp;</strong><span class="text-danger">*</span></p><input class="form-control" type="email" name="email" placeholder="user@domain.com (Optional)">
                                </div>
                                <div class="form-group mb-3">
                                    <p><strong>Phone Number&nbsp;</strong><span class="text-danger">*</span></p><input class="form-control" type="number" name="phone" placeholder="63+ 00 000 0000" required="">
                                </div>
                                <div class="form-group mb-3">
                                    <p><strong>Address&nbsp;</strong><span class="text-danger">*</span></p><input class="form-control" type="text" required="" name="address" placeholder="Ex. Room No-361, 33/1, 3rd Floor">
                                </div>
                                <div class="form-group mb-3">
                                    <div class="row">
                                        <div class="col">
                                            <p><strong>Sex</strong></p><input class="form-control" type="text" required="" name="sex" placeholder="Ex. Male">
                                        </div>
                                        <div class="col">
                                            <p><strong>Age</strong></p><input class="form-control" type="text" required="" name="age" placeholder="Ex. 18">
                                        </div>
                                    </div>
                                </div>
                                <div class="justify-content-center d-flex form-group mb-3">
                                    <div id="submit-btn-1">
                                        <div class="row">
                                            <div class="col"><button class="btn btn-primary" type="submit" style="width: 28em;">Add Resident</button></div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col">
                            <h3 id="fail-1" class="text-center text-danger d-none"><br>Form not Submitted&nbsp;<a href="contact.php">Try Again</a><br><br></h3>
                            <h3 id="success-2" class="text-center text-success d-none"><br>Form Submitted Successfully&nbsp;<a href="contact.php">Send Another Response</a><br><br></h3>
                        </div>
                    </section>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button></div>
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="update-resident">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Update Resident</h4><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <section>
                        <div class="container">
                            <form id="application-form-3">
                                <div class="form-group mb-3">
                                    <div class="row">
                                        <div class="col">
                                            <p><strong>First Name</strong>&nbsp;<span class="text-danger">*</span></p><input class="form-control" type="text" required="" name="firstname" placeholder="Ex. Juan">
                                        </div>
                                        <div class="col">
                                            <p><strong>Last Name</strong>&nbsp;<span class="text-danger">*</span></p><input class="form-control" type="text" required="" name="lastname" placeholder="Ex. Smith">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <div class="row">
                                        <div class="col">
                                            <p><strong>Date Of Birth</strong>&nbsp;<span class="text-danger">*</span></p><input class="form-control" type="date" required="" name="birthdate">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <p><strong>Email&nbsp;</strong><span class="text-danger">*</span></p><input class="form-control" type="email" name="email" placeholder="user@domain.com (Optional)">
                                </div>
                                <div class="form-group mb-3">
                                    <p><strong>Phone Number&nbsp;</strong><span class="text-danger">*</span></p><input class="form-control" type="number" name="phone" placeholder="63+ 00 000 0000" required="">
                                </div>
                                <div class="form-group mb-3">
                                    <p><strong>Address&nbsp;</strong><span class="text-danger">*</span></p><input class="form-control" type="text" required="" name="address" placeholder="Ex. Room No-361, 33/1, 3rd Floor">
                                </div>
                                <div class="form-group mb-3">
                                    <div class="row">
                                        <div class="col">
                                            <p><strong>Sex</strong></p><input class="form-control" type="text" required="" name="sex" placeholder="Ex. Male">
                                        </div>
                                        <div class="col">
                                            <p><strong>Age</strong></p><input class="form-control" type="text" required="" name="age" placeholder="Ex. 18">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <p><strong>Status</strong><span class="text-danger">*</span></p><input class="form-control" type="text" required="" name="status" placeholder="Ex. Deceased">
                                </div>
                                <div class="justify-content-center d-flex form-group mb-3">
                                    <div id="submit-btn-3">
                                        <div class="row">
                                            <div class="col"><button class="btn btn-primary" type="submit" style="width: 28em;">Update Resident</button></div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col">
                            <h3 id="fail-3" class="text-center text-danger d-none"><br>Form not Submitted&nbsp;<a href="contact.php">Try Again</a><br><br></h3>
                            <h3 id="success-3" class="text-center text-success d-none"><br>Form Submitted Successfully&nbsp;<a href="contact.php">Send Another Response</a><br><br></h3>
                        </div>
                    </section>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button></div>
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="confirmation">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Remove Resident</h4><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to remove this person?</p>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button><button class="btn btn-danger" type="button">Remove</button></div>
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="add-complain">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Complaint Info.</h4><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <section>
                        <div class="container">
                            <form id="application-form-2">
                                <div class="form-group mb-3">
                                    <div class="row">
                                        <div class="col">
                                            <p><strong>First Name</strong>&nbsp;<span class="text-danger">*</span></p><input class="form-control" type="text" required="" name="firstname" placeholder="Ex. John">
                                        </div>
                                        <div class="col">
                                            <p><strong>Last Name</strong>&nbsp;<span class="text-danger">*</span></p><input class="form-control" type="text" required="" name="lastname" placeholder="Ex. Smith">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <p><strong>Email&nbsp;</strong><span class="text-danger">*</span></p><input class="form-control" type="email" name="email" placeholder="user@domain.com">
                                </div>
                                <div class="form-group mb-3">
                                    <p><strong>Phone Number&nbsp;</strong><span class="text-danger">*</span></p><input class="form-control" type="number" name="phone" placeholder="63+ 00 000 0000" required="">
                                </div>
                                <div class="form-group mb-3">
                                    <p><strong>Address&nbsp;</strong><span class="text-danger">*</span></p><input class="form-control" type="text" required="" name="address" placeholder="Ex. Room No-361, 33/1, 3rd Floor">
                                </div>
                                <div class="form-group mb-3">
                                    <p><strong>Sex</strong><span class="text-danger">*</span></p><input class="form-control" type="text" required="" name="sex" placeholder="Ex. Male">
                                </div>
                                <div class="form-group mb-3">
                                    <p><strong>Complain</strong><span class="text-danger">*</span></p><textarea class="form-control" type="text" required="" placeholder="Ex.  Juan is noisy" name="complain"></textarea>
                                </div>
                                <div class="justify-content-center d-flex form-group mb-3">
                                    <div id="submit-btn-2">
                                        <div class="row">
                                            <div class="col"><button class="btn btn-primary" type="submit" style="width: 28em;">Add Complain</button></div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col">
                            <h3 id="fail-2" class="text-center text-danger d-none"><br>Form not Submitted&nbsp;<a href="contact.php">Try Again</a><br><br></h3>
                            <h3 id="success-1" class="text-center text-success d-none"><br>Form Submitted Successfully&nbsp;<a href="contact.php">Send Another Response</a><br><br></h3>
                        </div>
                    </section>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button></div>
            </div>
        </div>
    </div>
    
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/jquery.min.js"></script>
</body>

</html>