<?php require_once('../private/initialize.php'); ?>
<?php require_once('../private/database.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>View Item</title>
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
      <a class="nav-item nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link active" href="tracker.html">Collection Tracker</a>
      <a class="nav-item nav-link" href="releases.html">New Releases</a>
      <a class="nav-item nav-link" href="news.html">News</a>
    </div>
      <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
      </form>
        <button id="login" class="btn btn-outline-light my-2 my-sm-0" type="submit">Login</button>
    </div>
  </div> <!--container-->
</nav>
<!--END NAV-->

<div id="content">

<?php
$id = $_GET['id'] ?? '1';

$sql = "SELECT * from collection ";
$sql .= "WHERE id='" . $id . "'";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);

?>

<a class="back-link" href="<?php echo url_for('/tracker.php'); ?>">&laquo; Back to List</a>


<h1>Collection Item: <?php echo h($row['name']); ?></h1>

<div class="attributes">
  <dl>
    <dt>Name</dt>
    <dd><?php echo h($row['name']); ?></dd>
  </dl>
  <dl>
    <dt>Category</dt>
    <dd><?php echo h($row['category']); ?></dd>
  </dl>
  <dl>
    <dt>Category Number</dt>
    <dd><?php echo h($row['catnumber']); ?></dd>
  </dl>
</div>



</div>

</body>
</html>