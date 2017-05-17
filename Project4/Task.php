<?php
	require_once('TaskManager.php');
	require_once('AddUser.php');
	require_once('LogRequests.php');

	$httpVerb = $_SERVER['REQUEST_METHOD']; //Post, get, put, delete

	$taskManager = new TaskManager();
	$newUser = new AddUser();
	$logRequest = new LogRequests();

	switch ($httpVerb) {

		case "POST":
			//Create
			if (isset($_POST['username']) && isset($_POST['password'])) {
				$username = $_POST['username'];
				$password = $_POST['password'];

				$newUser->newUsers($username, $password);

			} else if (isset($_POST['desc'])) {

				$desc = $_POST['desc'];
				$result = $taskManager->create($desc);
				echo $result;

			} else {
				throw new Exception("Invalid HTTP POST request.");
			}
			break;

		case "GET":
			//Read
			if (isset($_GET['id'])) {

				$id = $_GET['id'];
				$result = $taskManager->read($id);
				echo $result;

			} else {
				
				$result = $taskManager->readAll();
				echo $result;

			}
			break;

		case "PUT":
			//Update
			parse_str(file_get_contents("php://input"), $putVars);
			if (isset($putVars['id']) && isset($putVars['desc'])) {

				$id = $putVars['id'];
				$desc = $putVars['desc'];
				$result = $taskManager->update($id, $desc);
				echo $result;

			} else {
				throw new Exception("Invalid HTTP DELETE request.");
			}
			break;

		case "DELETE":
			//Delete
			parse_str(file_get_contents("php://input"), $deleteVars);
			if (isset($deleteVars['id'])) {

				$id = $deleteVars['id'];
				$result = $taskManager->delete($id);
				echo $result;

			} else {
				throw new Exception("Invalid HTTP DELETE request.");
			}
			break;

		default:
			throw new Exception("Unsupported HTTP request.");
			break;
	}
?>