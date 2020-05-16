<?php
require_once('../private/logic.php');
require_once('../private/initialize.php');
?>

<?php 
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "pops";

$conn = mysqli_connect($dbServername, $dbUsername,$dbPassword, $dbName);

if (mysqli_connect_errno($conn)){
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>

<?php

/*
$sql = "SELECT * from collection ";
$sql .= "WHERE id='" . $id . "'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
mysqli_free_result($result);
return $row;


$name = $row['name'];
$category = $row['category'];
$catnumber = $row['catnumber'];
*/
?>

<html>
  <head>
    <title>Edit Collection Item</title>
    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="project.css">

    
  </head>

  <body>

  <div id="content">

    <h2>Edit Collection Item</h2>
    <p>Please enter the information below to edit an existing item in your collection.</p>
  <a class="back-link" href="tracker.php">&laquo; Back to List</a>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
        <h2>Pop! Name: </h2>
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="name" id="name">
        </div>
        <div class="form-group">
            <label for="category">Category:</label>
            <input type="text" class="form-control" name="category" id="category">
        </div>
        <div class="form-group">
            <label for="catnumber">Category Number:</label>
            <input type="text" class="form-control" name="catnumber" id="catnumber">
        </div>
<!--upload image        
        <div class="form-group">
            Select image to upload:
            <input type="file" name="file_upload" id="file_upload">
        </div>
-->
        <div class="form-group">
            <button input type="submit" class="btn btn-primary" value="UPDATE DATA" name="update">Update</button>
            <button input type="reset" class="btn btn-secondary" value="submitForm" name="reset">Reset</button>
        </div>
    </form>


 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>

<?php

$id = $_GET['id'];

if(isset ($_POST['update'])) {
  $id = $_POST['id'];

  $query = "UPDATE 'collection' SET name='$_POST[name]', category='$_POST[category]', catnumber='$_POST[catnumber]' WHERE id=$'_POST[id]'";
  $query_run = mysqli_query($conn,$query);

  if($query_run) {
    echo '<script type="text/javascript"> alert("Item Updated"> </script>';
  } else {
    '<script type="text/javascript"> alert("Item Not Updated"> </script>';
  }

}










?>

