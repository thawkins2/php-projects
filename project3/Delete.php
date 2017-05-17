<?php
	require_once('TaskManager.php');

	$id = $_POST['id'];

	$result = TaskManager::delete($id);
	echo "Rows affected: $result";
?>

<html>
<head>
	<title>Delete a Record</title>
</head>
<body>
	<form action="index.html">
		<label id="return">Click here to return to main page.</label>
		<br/>
		<input type="submit" value="Return">
	</form>
</body>
</html>