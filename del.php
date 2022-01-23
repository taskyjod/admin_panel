<?php
include_once 'config.php';
$sql = "DELETE FROM 'computer_sem_1_english' WHERE Sno='" . $_GET["sno"] . "'";
$res = mysqli_query($con, $sql);
if ($res) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>
