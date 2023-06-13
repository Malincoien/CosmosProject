<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="login.css">
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
    <div class="form-box-login">
        <h2>Please log in to use platform</h2>
        <form method="post">
            <div class="input-box">
                <span class="icon">
                    <ion-icon name="person-outline"></ion-icon>
                </span>
                <input name="username" type="text" required>
                <label>Username</label>
            </div><!--input-box-->
            <div class="input-box">
                <span class="icon">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                </span>
                <input name="password" type="password" required>
                <label>Password</label>
            </div><!--input-box-->
            <button name="submit" class="btn">Login</button>
            <div class="no-account">
                <a href="register.php" class="register-link">Don't have an account? Sign up!</a>
            </div><!--no-account-->
        </form>
    </div><!--form-box-login-->
  </div><!--wrapper-->

  <?php
			include_once 'config.php';
			if(isset($_POST['submit'])){
				
				//Gjøre om POST-data til variabler
				$username = $_POST['username'];
				$password = $_POST['password'];
				
				//Gjøre klar SQL-strengen
				$query = "SELECT username, password from users where username='$username' and password='$password'";
				
				//Utføre spørringen
				$result = mysqli_query($dbc, $query)
				or die('Error querying database.');


				
				//Koble fra databasen
				mysqli_close($dbc);

				//Sjekke om spørringen gir resultater
				if($result->num_rows > 0){

					//Gyldig login
					session_start();
					$_SESSION['username'] = $username;
					$_SESSION['password'] = $password;
					header('location: shop.php');

				}else{
					//Ugyldig login
					echo "Feil brukernavn eller passord";
				}
			}
		?>
  
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>