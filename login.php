<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"></link>


    <title>Login</title>

    
</head>
<body>

<?php

function getValue($key) {

  if (isset($_POST[$key])) {

      $value = htmlspecialchars($key);
      $value = trim($key);

      return $value;

  } else {

      return "";

  }

}



// If POST then check submitted username/password



if ($_SERVER["REQUEST_METHOD"] == "POST") {

    session_start();

    $username = getValue($_POST['username']);
    $password = getValue($_POST['password']);

    
   
    try {
    
        $pdo = new PDO("mysql:host=localhost;port=8889;dbname=project;", "root", "root");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // Check if the username and password match a row in the users table
        $stmt = $pdo->prepare("SELECT * FROM registration WHERE username = :username AND password = :password");
        $stmt->bindParam(':username', $_POST['username']);
        $stmt->bindParam(':password', $_POST['password']);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row) {

          $_SESSION['username'] = $username;
          $_SESSION['password'] = $password;

          header("Location: home.php");

        } else {

          header("Location: register.php");

        }

    } catch (PDOException $e) {
        echo $e->getMessage();
    }

     
 


    
}

?>

</head>
<body>

  <h1 class="w3-text-red">Welcome to our website! </h1>



  <form method="POST" action="login.php">
    <p><label>Enter your username:</label> 
      <input type="text" name="username" autofocus></p>
    <p><label>Enter your password:</label>
      <input type="password" name="password"></p>
    <input type="submit" value="Login">
  </form>

</body>

</html>