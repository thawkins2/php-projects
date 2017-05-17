<?php
	require_once('TaskManager.php');

	$id = $_POST['id'];

	$result = TaskManager::read($id);

	if(is_bool($result)) {
		echo "There is no such record with that ID.";
	} else {
		echo "The description for that record is: $result";
	}
	
?>

<html>
<head>
	<title>Read</title>
</head>
<body>
	<form action="index.html">
		<label id="return">Click here to return to main page.</label>
		<br/>
		<input type="submit" value="Return">
	</form>
</body>
</html>