<?php
include 'db_conn.php';
if (isset($_GET['id'])) {
	header("Location: articles.php");
}

if (isset($_GET['id'])) {
	$user_id = $_GET['id'];


	$sql = "DELETE FROM `article` WHERE `id`='$user_id'";



	$result = $conn->query($sql);

	if ($result == TRUE) {
		echo "Record deleted successfully.";
	} else {
		echo "Error:" . $sql . "<br>" . $conn->error;
	}
}
