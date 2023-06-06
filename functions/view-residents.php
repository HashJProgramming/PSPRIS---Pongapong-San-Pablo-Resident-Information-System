<?php

// Connect to the database
$db = new PDO('mysql:host=localhost;dbname=db_hashy', 'root', '');

// Get all data from the products table
$sql = 'SELECT * FROM residents WHERE status LIKE "%alive%" ORDER BY firstname ASC';
$stmt = $db->prepare($sql);
$stmt->execute();
$results = $stmt->fetchAll();

// Loop through the results and add them to the table
foreach ($results as $row) {
?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['firstname']; ?></td>
        <td><?php echo $row['lastname']; ?></td>
        <td><?php echo $row['birthdate']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['phone']; ?></td>
        <td><?php echo $row['address']; ?></td>
        <td><?php echo $row['age']; ?></td>
        <td><?php echo $row['sex']; ?></td>
        <td class="text-center align-middle" style="max-height: 60px;height: 60px;">
        <a class="btn btnMaterial btn-flat success semicircle" role="button" href="residents-profile.php?id=<?php echo $row['id']; ?>">
            <i class="far fa-eye"></i></a>
                <button class="btn btnMaterial btn-flat success semicircle" role="button" data-bs-target="#update-resident" data-bs-toggle="modal" data-resident-id="<?php echo $row['id']; ?>" data-resident-firstname="<?php echo $row['firstname']; ?>" data-resident-lastname="<?php echo $row['lastname']; ?>" data-resident-birthdate="<?php echo $row['birthdate']; ?>" data-resident-email="<?php echo $row['email']; ?>" data-resident-phone="<?php echo $row['phone']; ?>" data-resident-address="<?php echo $row['address']; ?>" data-resident-sex="<?php echo $row['sex']; ?>">
            <i class="fas fa-pen"></i></button>
                <button class="btn btnMaterial btn-flat accent btnNoBorders checkboxHover" type="button" style="margin-left: 5px;" data-bs-toggle="modal" data-bs-target="#add-complain" data-resident-id="<?php echo $row['id']; ?>">
            <i class="fas fa-user-shield btnNoBorders" style="color: #DC3545;"></i></button>
                <button class="btn btnMaterial btn-flat accent btnNoBorders checkboxHover" type="button" style="margin-left: 5px;" data-bs-toggle="modal" data-bs-target="#confirmation" data-resident-id="<?php echo $row['id']; ?>">
            <i class="fas fa-trash btnNoBorders" style="color: #DC3545;"></i></button>
        </td>
    </tr>
<?php
}

