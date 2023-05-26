<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $email = $_POST['email'];
   $username = $_POST['username'];
   $password = $_POST['password'];

//Koble til databasen
$mysqli = new mysqli("10.2.2.237","admin","cosmos127","cosmos");
        
// Check connection
if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
}

 // prepare and bind
 $stmt = $mysqli -> prepare("INSERT INTO users (username,password) VALUES (?, ?)");
 $stmt -> bind_param("ss", $username, $password);
 
 $stmt->execute();
 
 //Sjekke om spørringen gir resultater
 if($stmt->affected_rows){
     //Gyldig login
     echo "Takk for at du lagde bruker! Trykk <a href='login.php'>her</a> for å logge inn";
 }else{
     //Ugyldig login
     echo "Noe gikk galt, prøv igjen!";
 }
 $stmt -> close();
 $mysqli -> close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="register.css">
   <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,300,0,0" />
   <title>Login</title>
</head>
<body>

   <header>
   <a href="#" class="logo">logo</a>
      <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="index.html" id="aboutus">About Us</a></li>
      </ul>
  </header>

  <div class="wrapper">
    <div class="form-box-reg">
        <h2>Please register to use platform</h2>
        <form method="post">
        <div class="input-box">
                <span class="icon">
                <ion-icon name="mail-outline"></ion-icon>
                </span>
                <input type="email" name="email" required>
                <label>Email</label>
            </div><!--input-box-->
            <div class="input-box">
                <span class="icon">
                    <ion-icon name="person-outline"></ion-icon>
                </span>
                <input type="text" name="username" required>
                <label>Username</label>
            </div><!--input-box-->
            <div class="input-box">
                <span class="icon">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                </span>
                <input type="password" name="password" required>
                <label>Password</label>
            </div><!--input-box-->
            <button name="submit" class="btn">Sign up</button>
            <div class="have-account">
                <a href="login.php" class="login-link">Already have an account? Login!</a>
            </div><!--no-account-->
        </form>
    </div><!--form-box-reg-->
  </div><!--wrapper-->
  
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>