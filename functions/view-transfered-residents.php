<?php

// Connect to the database
$db = new PDO('mysql:host=localhost;dbname=db_hashy', 'root', '');

// Get all data from the products table
$sql = 'SELECT * FROM residents WHERE status LIKE "%TRANSFERED%" ORDER BY firstname ASC';
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
        </td>
    </tr>
<?php
}

