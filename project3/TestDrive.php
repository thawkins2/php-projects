<?php
	require_once('TaskManager.php');

	if (!isset($_POST['description'])) {
		header("Location: index.html");
	} else {
		echo $_POST['description'];
	}
?>