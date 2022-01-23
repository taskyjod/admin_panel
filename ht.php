<html lang="en">
<?php include 'head.php';?>
<body>
   <?php include 'nav.php';?>

    <div class="container">
        <div class="formdiv">
        <div class="info"></div>
        <form method="POST" action="">
            <div class="form-group row">
                <label for="Sno" class="col-sm-4 col-form-label">Subject Code</label>
                <div class="col-sm-7">
                <input type="text" name="" class="form-control" id="first_name" placeholder="Subject code">
                </div>
            </div>
            <div class="form-group row">
                <label for="last_name" class="col-sm-4 col-form-label">Subject name</label>
                <div class="col-sm-7">
                <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Subject name" >
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-8">
                <input type="hidden" name="student_id" value="<?php echo $stu_id; ?>">
                <input type="submit" name="submit" class="btn btn-success" value="SUBMIT" />
                </div><br><br><br><br><br>
            <div class="alert alert-info">
  <strong>Info!</strong> enter subject in format given below 
                    ex: 3330702 - Basics of DBMS.
</div>
                </div>

        </form>
    </div>
</div>
</body>
</html>
