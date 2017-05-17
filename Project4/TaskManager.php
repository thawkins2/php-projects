<?php
	require_once('ITaskManager.php');

	class TaskManager implements ITaskManager {

		public function create($desc) {
			
			//Server, database name, and credentials to access database
			$db = new PDO("mysql:host=localhost;dbname=Task", "root", "root");

			$sql = "INSERT INTO task(`description`) VALUES (:description)";

			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			try {

				$query = $db->prepare($sql);
				$query->bindParam(":description", $desc);
				$query->execute();

			}
			catch(Exception $ex) {
				echo "{$ex->getMessage()}<br/>";
			}

			return $db->lastInsertId();
		}

		public function readAll() {

			//Server, database name, and credentials to access database
			$db = new PDO("mysql:host=localhost;dbname=Task", "root", "root");

			$sql = "SELECT id, description FROM task";

			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			try {

				$query = $db->prepare($sql);
				$query->execute();

				$results = $query->fetchAll(PDO::FETCH_ASSOC);
				$results = json_encode($results, JSON_PRETTY_PRINT);

			}
			catch(Exception $ex) {
				echo "{$ex->getMessage()}<br/>";
			}

			return $results;
		}

		public function read($id) {

			//Server, database name, and credentials to access database
			$db = new PDO("mysql:host=localhost;dbname=Task", "root", "root");

			$sql = "SELECT `description` FROM task WHERE `id` = :id";

			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			try {

				$query = $db->prepare($sql);
				$query->bindParam(":id", $id);
				$query->execute();

				$result = $query->fetch(PDO::FETCH_COLUMN, 1);
			}
			catch(Exception $ex) {
				echo "{$ex->getMessage()}<br/>";
			}

			return $result;
		}

		public function update($id, $desc) {

			//Server, database name, and credentials to access database
			$db = new PDO("mysql:host=localhost;dbname=Task", "root", "root");

			$sql = "UPDATE task SET `description`=:description WHERE `id`=:id";

			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			try {

				$query = $db->prepare($sql);
				$query->bindParam(":description", $desc);
				$query->bindParam(":id", $id);
				$query->execute();

				$rowsAffected = $query->rowCount();
			}
			catch(Exception $ex) {
				echo "{$ex->getMessage()}<br/>";
			}

			return $rowsAffected;
		}

		public function delete($id) {

			//Server, database name, and credentials to access database
			$db = new PDO("mysql:host=localhost;dbname=Task", "root", "root");

			$sql = "DELETE FROM task WHERE `id`=:id";

			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			try
            {
                $query = $db->prepare($sql);
                $query->bindParam(":id", $id);
                $query->execute();
                $rowsAffected = $query->rowCount();
            }
            catch (Exception $ex)
            {
                echo "{$ex->getMessage()}<br/>";
            }
            
            return $rowsAffected;
		}
	}
?>