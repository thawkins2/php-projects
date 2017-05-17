<?php
    class AddUser {

        public function newUsers($username, $password) {

            //Server, database name, and credentials to access database
            $db = new PDO("mysql:host=localhost;dbname=Task", "root", "root");

            $userCheck = "SELECT username FROM users WHERE username = :username";

            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            try {

                $queryCheck = $db->prepare($userCheck);
                $queryCheck->bindParam(":username", $username);
                $queryCheck->execute();

                $rowCheck = $queryCheck->rowCount();

                if ($rowCheck != 0) {
                    header("Location: createUser.html");
                    exit;
                } else {

                    $sql = "INSERT INTO users(`username`, `password`)
                            VALUES (:username, :password)";

                    $requestAdd = "INSERT INTO requests(`username`) VALUES(:username)";

                    try {

                    $query = $db->prepare($sql);
                    $query->bindParam(":username", $username);
                    $query->bindParam(":password", $password);
                    $query->execute();

                    echo $db->lastInsertId();

                    $query = $db->prepare($requestAdd);
                    $query->bindParam(":username", $username);
                    $query->execute();

                    } catch(Exception $ex) {
                        echo "{$ex->getMessage()}<br/>";
                    }

                    

                }
            } catch (Exception $ex) {
                echo "{$ex->getMessage()}<br/>";
            }
        }
    }
?>

<html>
<head>
    <title>New User</title>
</head>
<body>
    <h1 align="center">Task API</h1>
    <hr>
    <br>

    <form id="newUser" action="index.html">
        <div class="form-group">
            <input type="submit" value="Go Home">
        </div>
    </form>
</body>
</html>