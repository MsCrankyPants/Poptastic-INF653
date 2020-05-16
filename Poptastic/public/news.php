<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!--FONTS-->
    <link href="https://fonts.googleapis.com/css?family=Metrophobic&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Luckiest+Guy&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,700&display=swap" rel="stylesheet">

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
      <a class="nav-item nav-link" href="tracker.php">Collection Tracker</a>
      <a class="nav-item nav-link" href="releases.php">New Releases</a>
      <a class="nav-item nav-link active" href="news.php">News</a>
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

<div class="jumbotron bg-cover">
  <div class="container">
  <h1 class="display-4">Poptastic! News</h1>
  <p>Find all exciting, up-to-date Pop! news here</p>
  </div>
</div>

<main role="main" class="container">
  <div class="row">
    <div class="col-md-8 blog-main">
      <h3 class="pb-4 mb-4 font-italic border-bottom">
        Poptastic! Funko News
      </h3>

      <div class="blog-post">
        <h2 id="October_2019" class="blog-post-title">Blog Post 1</h2>
        <p class="blog-post-meta">October 23, 2019 by <a href="#">Shannon</a></p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati quae officia quia sit vel molestiae tenetur nesciunt numquam ipsam reiciendis quis repudiandae alias quam debitis amet suscipit, eaque autem dolore. <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
        <blockquote>
          <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
        </blockquote>
        <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
  
        <ul>
          <li>Donec consectetur diam id enim auctor pulvinar.</li>
          <li>Proin iaculis nisi pharetra odio congue dignissim.</li>
          <li>Nulla vitae elit libero, a pharetra augue.</li>
        </ul>
      </div><!-- blog-post -->

      <hr>

      <div class="blog-post">
        <h2 id="July_2019" class="blog-post-title">Another blog post</h2>
        <p class="blog-post-meta">July 3, 2019 by <a href="#">Jacob</a></p>

        <p>Phasellus id sapien cursus, pharetra purus ac, dignissim diam. Nunc efficitur augue et aliquet pretium. Phasellus gravida lorem neque, nec vehicula tortor semper a. Praesent sem lectus, suscipit eget quam id, laoreet lacinia urna. In ac neque gravida, rhoncus lacus iaculis, vestibulum ante. Fusce tincidunt pellentesque efficitur. Nam at ipsum venenatis, consequat tortor lacinia, aliquam diam. Maecenas sed facilisis mauris.</p>
        <blockquote>
          <p>Quisque libero risus, egestas ac nisl laoreet, condimentum. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
        </blockquote>
        <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
        <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
      </div><!--blog-post -->
    <hr>

      <div class="blog-post">
        <h2 id="December_2018" class="blog-post-title">New feature</h2>
        <p class="blog-post-meta">February 10, 2019 by <a href="#">Chris</a></p>

        <p>Sed sollicitudin vestibulum justo, at rutrum nisi molestie sed. Aenean non volutpat dolor. Vestibulum vitae tortor laoreet, laoreet sapien in, pharetra ligula. Curabitur pretium efficitur malesuada. Quisque in ullamcorper turpis. Cras semper metus id malesuada condimentum. Nunc pretium imperdiet nibh vel mattis. Donec et viverra libero.</p>
        <ul>
          <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
          <li>Donec id elit non mi porta gravida at eget metus.</li>
          <li>Nulla vitae elit libero, a pharetra augue.</li>
        </ul>
        <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
        <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>
      </div>

      <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Newer</a>
      </nav>

    </div>

    <aside class="col-md-4 blog-sidebar">

      <div class="p-4">
        <h4 class="font-italic">Archives</h4>
        <ol class="list-unstyled mb-0">
          <li><a href="#October_2019">October 2019</a></li>
          <li><a href="#">September 2019</a></li>
          <li><a href="#">August 2019</a></li>
          <li><a href="#July_2019">July 2019</a></li>
          <li><a href="#">June 2019</a></li>
          <li><a href="#">May 2019</a></li>
          <li><a href="#">April 2019</a></li>
          <li><a href="#">March 2019</a></li>
          <li><a href="#February_2019">February 2019</a></li>
          <li><a href="#">January 2019</a></li>
          <li><a href="#December_2018">December 2018</a></li>
          <li><a href="#">November 2018</a></li>
        </ol>
      </div>
    </aside>
  </div>

</main><!--container -->

<footer>
    <p>Poptastic!, Copyright &copy; 2019</p>
</footer>

</body>
</html>
