<?php require_once('../private/initialize.php'); ?>
<?php include_once '../private/database.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Collection Tracker</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  

    <!--STYLES-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="project.css">
  </head>
<body>

<!--NAV-->
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #1193cd;">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="images/small_logotemp2.png" alt="">
    </a>
    <a class="navbar-brand" href="#">Poptastic!</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <div class="navbar-nav mr-auto">
      <a class="nav-item nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link active" href="tracker.php">Collection Tracker</a>
      <a class="nav-item nav-link" href="releases.php">New Releases</a>
      <a class="nav-item nav-link" href="news.php">News</a>
    </div>
      <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
      </form>
        <button id="login" class="btn btn-outline-light my-2 my-sm-0" type="submit"><a href="../userlogin/login.php">Login</a></button>
    </div>
  </div> <!--container-->
</nav>
<!--END NAV-->

<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">Collection Tracker</h1>
        <p class="lead text-muted">Keep track of your entire collection here so you'll always know what you have anytime, anywhere!</p>
        <a href="tracker_form.php"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Add a Pop!</button></a>
        
    </div>
</section>
<!--
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Enter Your Pop! Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form action="process.php" method="POST" enctype="multipart/form-data">
              <div class="form-group">
                <label for="name">Pop! Name</label>
                <input required type="text" class="form-control" id="name" name="name" placeholder="Ex: The Hulk">
                <small id="emailHelp" class="form-text text-muted">*required</small>
              </div>
              <div class="form-group">
                <label for="category">Movie/TV Show/Character</label>
                <input type="text" class="form-control" id="category" name="category" placeholder="Ex: The Avengers">
              </div>
              <div class="form-group">
                <label for="catnumber">Collection Number</label>
                <input type="text" class="form-control" id="catnumber" name="catnumber" placeholder="Ex: 932">
              </div>
              <div class="custom-file">
                  <input type="file" class="custom-file-input" id="customFile">
                  <label class="custom-file-label" for="customFile">Upload an image</label>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
              <button class="btn btn-secondary" type="reset" value="Reset">Reset</button>
        </form>
      </div>
    </div>
  </div>
</div>
</section>
-->

<table class="table table-striped table-light">
    <tr>
      <th>#</th>
      <th>Name</th>
      <th>Category</th>
      <th>Number</th>
      <th>&nbsp;</th>
      <th>&nbsp;</th>
      <th>&nbsp;</th>
    </tr>

    <?php 
      $sql = "SELECT * FROM collection;";
      $result = mysqli_query($conn, $sql);
      $resultCheck = mysqli_num_rows($result);

      if ($resultCheck > 0) {
      while($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
          <td><?php echo h($row['id']); ?></td>
          <td><?php echo h($row['name']); ?></td>
          <td><?php echo h($row['category']); ?></td>
          <td><?php echo h($row['catnumber']); ?></td>
          <td><a class="action" href="<?php echo url_for('show.php?id=' . $row['id']); ?>">View</a></td>
          <td><a class="action" href="<?php echo url_for('edit_collection.php?id=' . $row['id']); ?>">Edit</a></td>
          <td><a class="action" href="">Delete</a></td>
        </tr>
      <?php } } ?>
    </table>
     



<footer>
        <p>Poptastic!, Copyright &copy; 2019</p>
    </footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>