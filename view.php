<?php
// mysql connection
require_once 'config.php';
$query = "SELECT * FROM `computer_sem_1_english`";

$results = mysqli_query($con, $query);
$records = mysqli_num_rows($results);


?>
<!DOCTYPE html>
<html lang="en">
<?php include 'head.php';?>
<body>
   <?php include 'nav.php';?>
    <div class="info"></div>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>
                <?php
    while ($row = mysqli_fetch_assoc($results)) {
        ?>
                                <tr>
                                
                                    <td><?php echo $row['Subject_Name'] ?></td>
                                       <td>
                                      <a href="delete.php?id=<?php echo $row['Sno']; ?>" class="btn btn-danger" onClick="javascript:return confirm('Do you really want to delete?');" >DELETE</a>
                                    </td>
                                </tr>

                            <?php
}

?>
            </tbody>
        </table>
    </div>
</body>
</html>