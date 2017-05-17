<?php
	if (empty($_POST['username'])) {
		header("Location: index.html");
	} else {
		$username = $_POST['username'];

		//Server, database name, and credentials to access database
        $db = new PDO("mysql:host=localhost;dbname=Task", "root", "root");

        $sql = "SELECT username FROM users WHERE username = :username";

        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        try {

        	$query = $db->prepare($sql);
        	$query->bindParam(":username", $username);
        	$query->execute();

        	$check = $query->rowCount();

        } catch(Exception $ex) {
            echo "{$ex->getMessage()}<br/>";
        }
	}

	if ($check == 0) {
		echo "The username you entered is not in our database. Hit home and try again.";
?>
		<form id="newUser" action="index.html">
        	<div class="form-group">
            	<input type="submit" value="Go Home">
        	</div>
    	</form>
<?php

		exit();
	}
?>

