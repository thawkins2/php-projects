<?php
	require_once('TaskManager.php');

	$desc = $_POST['description'];

	$result = TaskManager::create($desc);
	echo "The ID of the record created is: $result";
?>

<html>
<head>
	<title>Add Record</title>
</head>
<body>
	<form action="index.html">
		<label id="return">Click here to return to main page.</label>
		<br/>
		<input type="submit" value="Return">
	</form>
</body>
</html>