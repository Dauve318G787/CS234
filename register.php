<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>


    <?php

        error_reporting(E_ALL);
        ini_set('display_errors', '1');

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $username = $_POST['username'];
            $password = $_POST['password'];

            try {

                $pdo = new PDO("mysql:host=localhost;port=8889;dbname=project", "root", "root");
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $statement = $pdo->prepare("SELECT * FROM registration WHERE username = :username");
                $statement->bindParam(":username", $_POST['username']);
                $statement->execute();
                $tableRow = $statement->fetchAll((PDO::FETCH_ASSOC));

                if ($tableRow) {

                    echo "<p> That username already exists! Please try again.";

                } else {
                

                    $statement = $pdo->prepare("INSERT INTO registration (username, password) VALUES (:username, :password)");

                    $statement->bindParam(':username', $username);
                    $statement->bindParam(':password', $password);

                    $statement->execute();

                    header('Location:login.php');

                }

            } catch (PDOException $e) {

                echo "<p>" . $e->getMessage() . "</p>";
            }

        }



         

    ?>
</head>
<body>

    <h2> You were redirected to this page for one of two reasons.</h2>
    <p> If you are a new user, welcome! Glad you're here. To access our website, you will need a username and a password. </p>
    <p> Your username must be unique to YOU- if someone's taken your username, no worries, you'll just be redirected right back here.</p>
    <p> If you forgot your password, you must create a new username and password. Again, make sure your username isn't taken!</p>
    <p> Finally, click submit to, well, submit your information! </p>
    <p> Once you're done, you'll be redirected to the login page. </p>
   

	<form method="post" action="register.php">
		<label for="username">Enter your username here:</label>
		<input type="text" name="username" id="username" required><br><br>

		<label for="password">Enter your password here:</label>
		<input type="password" name="password" id="password" required><br><br>

		<input type="submit" name="submit" value="Submit">
	</form>

</body>
    
</html>