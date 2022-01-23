<?php
  require_once 'config.php';
if (!empty($_GET['id'])) {
    
  

    $no = $_GET['id'];
    $del_query = "DELETE FROM computer_sem_1_english WHERE Sno = '$no'";
    $result = mysqli_query($con, $del_query);
    if ($result) {
        echo "<script>alert('Deleted Successfully');</script>";
        header("Location: view.php");
    }
    else {
        echo "<script>alert('Deletion Failed');</script>";
        header("Location: view.php");
    }

}
?>