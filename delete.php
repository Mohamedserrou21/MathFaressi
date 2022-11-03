<?php 
 include 'db.php';
if (isset($_GET['id'])) {
    header("Location: insert.php");
}

if (isset($_GET['id'])) {
	$user_id = $_GET['id'];

	
	$sql = "DELETE FROM `pdf_file` WHERE `id`='$user_id'";

	

	$result = $conn->query($sql);

	if ($result == TRUE) {
		echo "Record deleted successfully.";
	}else{
		echo "Error:" . $sql . "<br>" . $conn->error;
	}
}
