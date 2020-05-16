  <?php 

session_start();

	if(!isset($_SESSION['userlogin'])){
		header("Location: poptastic/login.php");
	}

	if(isset($_GET['logout'])){
		session_destroy();
		unset($_SESSION);
		header("Location: poptastic/login.php");
	}

?>

<p>Welcome to index</p>


<a href="poptastic/index.php?logout=true">Logout</a>