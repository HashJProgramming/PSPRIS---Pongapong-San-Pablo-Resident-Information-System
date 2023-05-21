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
    <?php include_once 'functions/dashboard-counter.php' ?>
    <div class="container py-4 py-xl-5">
    <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3 d-xl-flex">
            <div class="col">
                <div class="card border-danger border-2 mb-4">
                    <div class="card-body text-center p-4"><span class="badge rounded-pill bg-danger position-absolute top-0 start-50 translate-middle text-uppercase">Total</span>
                        <h4 class="fw-bold card-subtitle">Decease</h4>
                        <h4 class="display-5 fw-bold card-title"><?php get_deceased(); ?></h4>
                        <p>PSPRIS - System</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-success border-2 mb-4">
                    <div class="card-body text-center p-4"><span class="badge rounded-pill bg-success position-absolute top-0 start-50 translate-middle text-uppercase">Total</span>
                        <h4 class="fw-bold card-subtitle">Male</h4>
                        <h4 class="display-5 fw-bold card-title"><?php get_deceased_male(); ?></h4>
                        <p>PSPRIS - System</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-success border-2 mb-4">
                    <div class="card-body text-center p-4"><span class="badge rounded-pill bg-success position-absolute top-0 start-50 translate-middle text-uppercase">Total</span>
                        <h4 class="fw-bold card-subtitle">Female</h4>
                        <h4 class="display-5 fw-bold card-title"><?php get_deceased_female(); ?></h4>
                        <p>PSPRIS - System</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="py-4 py-xl-5">
        
        <div class="container-fluid">
            <div class="card" id="TableSorterCard">
                <div class="card-header py-3">
                    <div class="row table-topper align-items-center">
                        <div class="col-12 col-sm-5 col-md-6 text-start" style="margin: 0px;padding: 5px 15px;">
                            <p class="text-primary m-0 fw-bold">List of Decease Residents</p>
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
                                        <?php include_once "functions/view-decease-residents.php" ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                            <form id="application-form-3" action="functions/update-decease-resident.php" method="post">
                                 <input type="hidden" name="resident_id">
                                <div class="form-group mb-3">
                                    <p><strong>Status</strong><span class="text-danger">*</span></p><input class="form-control" type="text"  name="status" placeholder="Ex. Deceased & Alive">
                                </div>
                                <div class="form-group mb-3">
                                    <p><strong>Cause of Death</strong><span class="text-danger">*</span></p><textarea class="form-control" type="text" placeholder="Ex.  Juan is noisy" name="cause_of_death"></textarea>
                                </div>
                                <div class="form-group mb-3">
                                    <div class="row">
                                        <div class="col">
                                            <p><strong>Date Of Death</strong>&nbsp;<span class="text-danger">*</span></p><input class="form-control" type="date" name="date_of_death">
                                        </div>
                                    </div>
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
                <form action="functions/remove-resident.php" method="post">
                     <input type="hidden" name="resident_id">
                    <div class="modal-header">
                        <h4 class="modal-title">Remove Resident</h4><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to remove this person?</p>
                    </div>
                    <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button><button class="btn btn-danger" type="submit">Remove</button></div>
                </form>
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
                            <form id="application-form-2" action="functions/add-complain.php" method="post">
                             <input type="hidden" name="resident_id">
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
    <script>
         $('button[data-bs-target="#update-resident"]').on('click', function() {
        // Get the user ID from the data attribute.
        var resident_id = $(this).data('resident-id');
        console.log(resident_id);
        // Set the value of all input fields with the name "userid" to the user ID.
        $('input[name="resident_id"]').each(function() {
            $(this).val(resident_id);
        });
        });

        $('button[data-bs-target="#add-complain"]').on('click', function() {
        // Get the user ID from the data attribute.
        var resident_id = $(this).data('resident-id');
        console.log(resident_id);
        // Set the value of all input fields with the name "userid" to the user ID.
        $('input[name="resident_id"]').each(function() {
            $(this).val(resident_id);
        });
        });

        $('button[data-bs-target="#confirmation"]').on('click', function() {
        // Get the user ID from the data attribute.
        var resident_id = $(this).data('resident-id');
        console.log(resident_id);
        // Set the value of all input fields with the name "userid" to the user ID.
        $('input[name="resident_id"]').each(function() {
            $(this).val(resident_id);
        });
        });
    </script>
</body>

</html>