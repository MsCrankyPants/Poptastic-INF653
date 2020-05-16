<?php require_once('../private/initialize.php');  ?>
<?php require_once('../private/database.php'); ?>
<?php require_once('../private/logic.php'); ?>

<?php
if(is_post_request()) {

	// Handle form values sent by tracker_form.php

	$name = $_POST['name'] ?? '';
	$category = $_POST['category'] ?? '';
	$catnumber = $_POST['catnumber'] ?? '';

	$sql = "INSERT INTO collection ";
	$sql .= "(name, category, catnumber) ";
	$sql .= "VALUES (";
	$sql .= "'" . $name . "', ";
	$sql .= "'" . $category . "', ";
	$sql .= "'" . $catnumber . "'";
	$sql .= ")";
	$result = mysqli_query($conn, $sql);

	if($result) {
		$new_id = mysqli_insert_id($conn);
		redirect_to('show.php?id=' . $new_id);
	} else
		echo mysqli_error($conn);
		exit;

} else {
	redirect_to('tracker.php');
}

?>