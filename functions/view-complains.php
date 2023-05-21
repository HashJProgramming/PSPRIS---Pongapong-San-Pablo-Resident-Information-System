<?php

// Connect to the database
$db = new PDO('mysql:host=localhost;dbname=db_hashy', 'root', '');
// Get all data from the products table
$sql = 'SELECT * FROM complaints ORDER BY id DESC';
$stmt = $db->prepare($sql);
$stmt->execute();
$results = $stmt->fetchAll();

// Loop through the results and add them to the table
foreach ($results as $row) {
?>
          <tr>
            <td><?php echo $row['id']; ?></td>
            <?php get_respondent($row['resident_id'])?>
            <td><?php echo $row['firstname']; ?></td>
            <td><?php echo $row['lastname']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['phone']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td><?php echo $row['sex']; ?></td>
            <td><?php echo $row['complain']; ?></td>
            <td class="text-center align-middle" style="max-height: 60px;height: 60px;">
                <a class="btn btnMaterial btn-flat success semicircle" role="button" href="residents-profile.php?id=<?php echo $row['resident_id']; ?>"><i class="far fa-eye"></i></a>
                <button class="btn btnMaterial btn-flat accent btnNoBorders checkboxHover" type="button" style="margin-left: 5px;" data-bs-toggle="modal" data-bs-target="#confirmation" data-resident-id="<?php echo $row['id']; ?>">
                <i class="fas fa-trash btnNoBorders" style="color: #DC3545;"></i></button></td>
            <td><?php echo $row['status']; ?></td>
            <td><?php echo $row['created']; ?></td>
        </tr>
<?php
}

function get_respondent($id){
    $db = new PDO('mysql:host=localhost;dbname=db_hashy', 'root', '');
    $sql = 'SELECT * FROM residents WHERE id = :id';
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $results = $stmt->fetchAll();
    foreach ($results as $row) {
        ?>
        <td><?php echo $row['firstname']; ?></td>
        <?php
    }
}