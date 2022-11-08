<?php
	session_start();
	
	// Check if user is already logged in
	if(isset($_SESSION['loggedIn'])){
		header('Location: index.php');
		exit();
	}
	
	require_once('inc/config/constants.php');
	require_once('inc/config/db.php');
	require_once('inc/header.html');
?>
<link rel="stylesheet" href="style.css">
  <body>

<?php
// Variable to store the action (login, register, passwordReset)
$action = '';
	if(isset($_GET['action'])){
		$action = $_GET['action'];
		if($action == 'register'){
?>
			<img src="back_login.jpg" alt="background" class="back">
	<div class="namecon">
	<div class="name">ACCOUNTABLES</div>
	<div class="slog">Big Dream, Big Calculation</div>
	</div>
			<div class="container">
			<img src="ACCOUNTABLES.png" alt="LOGO" class="logo">
      <div class="login_con">
				<div class="card">
				  <div class="card-header" style="background-color: black; color:white; ">
					Register
				  </div>
				  <div class="card-body">
					<form action="">
					<div id="registerMessage"></div>
					  <div class="form-group">
						<label for="registerFullName">Name<span class="requiredIcon">*</span></label>
						<input type="text" class="form-control" id="registerFullName" name="registerFullName">
						<!-- <small id="emailHelp" class="form-text text-muted"></small> -->
					  </div>
					   <div class="form-group">
						<label for="registerUsername">Username<span class="requiredIcon">*</span></label>
						<input type="email" class="form-control" id="registerUsername" name="registerUsername" autocomplete="on">
					  </div>
					  <div class="form-group">
						<label for="registerPassword1">Password<span class="requiredIcon">*</span></label>
						<input type="password" class="form-control" id="registerPassword1" name="registerPassword1">
					  </div>
					  <div class="form-group">
						<label for="registerPassword2">Re-enter password<span class="requiredIcon">*</span></label>
						<input type="password" class="form-control" id="registerPassword2" name="registerPassword2">
					  </div>
					  <a href="login.php" class="btn" style="background-color: #005185;color:white;">Login</a>
					  <button type="button" id="register" class="btn" style="background-color: #198754;color:white;">Register</button>
					  <a href="login.php?action=resetPassword" class="btn" style="background-color: #DC3545;color:white;">Reset Password</a>
					</form>
				  </div>
				</div>
				</div>
			  </div>
			</div>
<?php
			require 'inc/footer.php';
			echo '</body></html>';
			exit();
		} elseif($action == 'resetPassword'){
?>
			<img src="back_login.jpg" alt="background" class="back">
	<div class="namecon">
	<div class="name">ACCOUNTABLES</div>
	<div class="slog">Big Dream, Big Calculation</div>
	</div>
			<div class="container">
			<img src="ACCOUNTABLES.png" alt="LOGO" class="logo">
      <div class="login_con">
				<div class="card">
				  <div class="card-header" style="background-color: black; color:white; ">
					Reset Password
				  </div>
				  <div class="card-body">
					<form action="">
					<div id="resetPasswordMessage"></div>
					  <div class="form-group">
						<label for="resetPasswordUsername">Username</label>
						<input type="text" class="form-control" id="resetPasswordUsername" name="resetPasswordUsername">
					  </div>
					  <div class="form-group">
						<label for="resetPasswordPassword1">New Password</label>
						<input type="password" class="form-control" id="resetPasswordPassword1" name="resetPasswordPassword1">
					  </div>
					  <div class="form-group">
						<label for="resetPasswordPassword2">Confirm New Password</label>
						<input type="password" class="form-control" id="resetPasswordPassword2" name="resetPasswordPassword2">
					  </div>
					  <a href="login.php" class="btn" style="background-color: #005185;color:white;">Login</a>
					  <a href="login.php?action=register" class="btn" style="background-color: #198754;color:white;">Register</a>
					  <button type="button" id="resetPasswordButton" class="btn" style="background-color: #DC3545;color:white;">Reset Password</button>
					</form>
				  </div>
				</div>
				</div>
			  </div>
			</div>
<?php
			require 'inc/footer.php';
			echo '</body></html>';
			exit();
		}
	}	
?>
	<!-- Default Page Content (login form) -->
	<img src="back_login.jpg" alt="background" class="back">
	<div class="namecon">
	<div class="name">ACCOUNTABLES</div>
	<div class="slog">Big Dream, Big Calculation</div>
	</div>

    <div class="container">
		<img src="ACCOUNTABLES.png" alt="LOGO" class="logo">
      <div class="login_con">
		<div class="card">
		  <div class="card-header" style="background-color: black; color:white; ">
			Login
		  </div>
		  <div class="card-body">
			<form action="">
			<div id="loginMessage"></div>
			  <div class="form-group">
				<label for="loginUsername">Username</label>
				<input type="text" class="form-control" id="loginUsername" name="loginUsername">
			  </div>
			  <div class="form-group">
				<label for="loginPassword">Password</label>
				<input type="password" class="form-control" id="loginPassword" name="loginPassword">
			  </div>
			  <button type="button" id="login" class="btn" style="background-color: #005185;color:white;">Login</button>
			  <a href="login.php?action=register" class="btn" style="background-color: #198754;color:white;">Register</a>
			  <a href="login.php?action=resetPassword" class="btn" style="background-color: #DC3545;color:white;">Forgot Password</a>
			</form>
		  </div>
		</div>
		</div>
      </div>
<?php
	require 'inc/footer.php';
?>
  </body>
</html>
