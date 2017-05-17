<?php
	require_once('TaskManager.php');

	$result = TaskManager::readAll();
	
	foreach($result as $record) {
		echo implode($record) . "<br/>";
	}
?>

<html>
<head>
	<title>Read All</title>
</head>
<body>
	<form action="index.html">
		<label id="return">Click here to return to main page.</label>
		<br/>
		<input type="submit" value="Return">
	</form>
</body>
</html>