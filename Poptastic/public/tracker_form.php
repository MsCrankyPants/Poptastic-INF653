<?php require_once('../private/initialize.php');  ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  

<!--STYLES-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="project.css">

  </head>
<body>

<form action="create.php" method="POST" enctype="multipart/form-data">
	<div class="container">

		<div class="row">
			<div class="col-sm-5">
				<h1>Add your Pop!</h1>
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
  		</div>
  	</div>
</form>
</div>