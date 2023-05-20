<?php
if (!isset($_GET['id'])) {
    header('Location: ../dashboard.php');
    exit;
}
// Connect to the database
$db = new PDO('mysql:host=localhost;dbname=db_hashy', 'root', '');
// Get all data from the products table
$sql = 'SELECT * FROM residents WHERE id = :id';
$stmt = $db->prepare($sql);
$stmt->bindValue(':id', $_GET['id']);
$stmt->execute();
$results = $stmt->fetchAll();

// Loop through the results and add them to the table
foreach ($results as $row) {
?>
        <div class="container-fluid">
            <h3 class="text-dark mb-4">Resident Profile</h3>
            <div class="card shadow mb-3">
                <div class="card-header py-3">
                    <p class="text-primary m-0 fw-bold">Personal Information</p>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row" style="margin-bottom: 25px;text-align: left;">
                            <div class="col-md-6 col-xl-12 offset-xl-0">
                                <div class="mb-3"></div><img src="assets/img/man.png" width="200px">
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3"><label class="form-label" for="first_name"><strong>First Name</strong></label>
                                <input class="form-control" type="text" placeholder="Juan" name="firstname" required="" readonly="" value="<?php echo $row['firstname']; ?>"></div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3"><label class="form-label" for="last_name"><strong>Last Name</strong></label>
                                <input class="form-control" type="text" placeholder="Doe" name="lastname" required="" readonly="" value="<?php echo $row['lastname']; ?>"></div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3"><label class="form-label" for="last_name"><strong>Birthday</strong></label>
                                <input class="form-control" type="text" placeholder="Birthdate" name="birthdate" required="" readonly="" value="<?php echo $row['birthdate']; ?>"></div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3"><label class="form-label" for="last_name"><strong>Email</strong></label>
                                <input class="form-control" type="text" placeholder="Email" name="email" required="" readonly="" value="<?php echo $row['email']; ?>"></div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3"><label class="form-label" for="last_name"><strong>Phone</strong></label>
                                <input class="form-control" type="text" placeholder="Phone" name="phone" required="" readonly="" value="<?php echo $row['phone']; ?>"></div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3"><label class="form-label" for="last_name"><strong>Address</strong></label>
                                <input class="form-control" type="text" placeholder="Address" name="address" required="" readonly="" value="<?php echo $row['address']; ?>"></div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3"><label class="form-label" for="last_name"><strong>Sex</strong></label>
                                <input class="form-control" type="text" placeholder="Sex" name="sex" required="" readonly="" value="<?php echo $row['sex']; ?>"></div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3"><label class="form-label" for="last_name"><strong>Status</strong></label>
                                <input class="form-control" type="text" placeholder="Status" name="status" required="" readonly="" value="<?php echo $row['status']; ?>"></div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3"><label class="form-label" for="last_name"><strong>Cause of Death</strong></label>
                                <input class="form-control" type="text" placeholder="None" name="status" required="" readonly="" value="<?php echo $row['cause_of_death']; ?>"></div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3"><label class="form-label" for="last_name"><strong>Date of Death</strong></label>
                                <input class="form-control" type="text" placeholder="None" name="status" required="" readonly="" value="<?php echo $row['date_of_death']; ?>"></div>
                            </div>
                        </div>
                    </form><button class="btn btn-primary" type="button" data-bs-target="#add-complain" data-bs-toggle="modal" data-resident-id="<?php echo $row['id']; ?>">Add Complain</button>
                </div>
            </div>
        </div>
        
<?php
}

