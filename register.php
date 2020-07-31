<?php

	include_once ('template/topbar.php');
	//include_once ('functions/connection_db.php');
	
	if (islogged() == 1) {
		header("Location:blog.php");
	}

	if (isset($_POST['submit'])){
		extract($_POST);
		if ($_POST['pass'] == $_POST['repass']) {
			$name = htmlspecialchars(trim($_POST['nom']));
			$prenom = htmlspecialchars(trim($_POST['prenom']));
			$email = htmlspecialchars(trim($_POST['email']));
			$password = htmlspecialchars(trim($_POST['pass']));

			if (email_verif($email) == 1 ) {
				$email_taken = "Ce email à été dejà utilisé";
			}
			else
			{
				if (!(lencase($password))) {
					$pass_low = "Votre mot de passe doit contenir 5 caractère au minimum";
				}
				else {

					register($name,$prenom,$email,$password);
					header("Location:login.php");
					
				}
			}
	
		
		}
		else
		{
			$password_nomatch = "Les mots de passe ne sont pas identiques.";
		}	

		
		
	}
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Socail - Inscription</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="img/Fevicon.png" type="image/png">

  <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">

  <link rel="stylesheet" href="css/style.css">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100" style="padding-top: 100px; margin-top: 67px;">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" method="POST">
					<span class="login100-form-title">
						Inscription de membre
                    </span>
                    
                    <div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="nom" placeholder="Nom" required value="<?php echo (isset($_POST['nom'])) ?  $_POST['nom'] : ''; ?>">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
                    </div>
                    
                    <div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="prenom" placeholder="Prénom" required value="<?php echo (isset($_POST['prenom'])) ?  $_POST['prenom'] : ''; ?>">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input is-invalid">
						<input class="input100" type="email" name="email" placeholder="Email" required value="<?php echo (isset($_POST['email'])) ?  $_POST['email'] : ''; ?>">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
						
					</div>
					<div class="error text-center">
							<span style="color:red;"><?php echo (isset($email_taken)) ? $email_taken : ''; ?></span>
					</div>

					<div class="wrap-input100 validate-input is-invalid" >
						<input class="input100" type="password" name="pass" placeholder="Mot de passe" required >
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
						
					</div>
					
                    <div class="error text-center">
							<span style="color:red;"><?php echo (isset($password_nomatch)) ? $password_nomatch : ''; ?></span>
							<span style="color:red;"><?php echo (isset($pass_low)) ? $pass_low : ''; ?></span>
					</div>

                    <div class="wrap-input100 validate-input ">
						<input class="input100" type="password" name="repass" placeholder="Confirmation de mot de passe"  required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="submit"> 
							S'inscrire
						</button>
					</div>

					<div class="text-center p-t-136" style="padding-top: 30px;">
						<a class="txt2" href="login.php">
                            Connectez-vous
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
   <!-- <script src="js/main.js"></script>-->
    <script src="vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/mail-script.js"></script>
  <script src="js/main.js"></script>
</body>

</body>
</html>