<?php
if(isset($_SESSION['userlogin'])){
  header("Location: poptastic/public/index.php");
}
?>

<html lang="en" dir="ltr">
<head>
	  <meta charset="UTF-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <meta http-equiv="x-ua-compatible" content="ie=edge">	
    <title>Poptastic! Login</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
   <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body>
  <div class="bg-img">
  <div class="content">

    <header>Signup Form</header>
    <form id="myForm">
      <div class="field">
        <span class="fa fa-user"></span>
        <input type="text" name="username" id="username" required placeholder="Username">
      </div>
      <div class="field space">
        <span class="fa fa-lock"></span>
        <input type="password" name="password" id="password" class="pass-key" required placeholder="Password">
        
      </div>

      <div class="form-group">
        <div class="custom-control custom-checkbox">
          <input type="checkbox" name="rememberme" class="custom-control-input" id="customControlInline">
          <label class="custom-control-label" for="customControlInline">Remember me</label>
        </div>
      </div>

      <div class="d-flex justify-content-center mt-3 login_container">
        <button type="button" class="btn btn-primary" name="button" id="login" class="btn login_btn">Login</button> 
      </div>



    </form>

    <div class="login">Or login with</div>

    <!--SOCIAL MEDIA BUTTONS-->
  
        <button type="button" class="btn login_btn" aria-label="Left Align" name="button" id="login" style="background-color:#3b5998; color:#ffffff;"><i class="fab fa-facebook"></i> Facebook</button> 
   
        <button type="button" class="btn login_btn" aria-label="Left Align" name="button" id="login" style="background-color:#e1306c; color:#ffffff;"><i class="fab fa-instagram"></i> Instagram</button> 
     

    <div class="signup">Don't have an account?
      <a href="poptastic/useraccounts/registration.php">Signup Now</a>
    </div>
        <div class="pass">
        <div class="d-flex justify-content-center">
          <a href="#">Forgot Password?</a>
      </div>
      </div>



<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


<script>
  $(function(){
    $('#login').click(function(e){

      var valid = this.form.checkValidity();

      if(valid){
        var username = $('#username').val();
        var password = $('#password').val();
      }

      e.preventDefault();

      $.ajax({
        type: 'POST',
        url: 'jslogin.php',
        data:  {username: username, password: password},
        success: function(data){
          alert(data);
          if($.trim(data) === "Logged In"){
            setTimeout(' window.location.href =  "index.php"', 1000);
          }
        },
        error: function(data){
          alert('there were erros while doing the operation.');
        }
      });

    });
  });
</script>

  </body>
</html>

