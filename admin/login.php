<?php include "../classes/AdminLogin.php"; ?>
<?php
$admin = new AdminLogin();
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$adminUser = $_POST['adminUser'];
	$adminPass = $_POST['adminPass'];

	$loginChk = $admin->adminlogin($adminUser, $adminPass);
}
 ?>
<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Admin Login</title>
    <link rel="stylesheet" type="text/css" href="css/stylelogin.css" media="screen" />
</head>
<body>
<div class="container">
	<section id="content">
		<form action="login.php" method="post">
			<h1>Admin Login</h1>
			<span style="color:red; font-size:18px;">
				<?php
				if(isset($loginmsg)){
					echo $loginmsg;
				}
				?>
			</span>
			<div>
				<input type="text" placeholder="Username" name="adminUser"/>
			</div>
			<div>
				<input type="password" placeholder="Password" name="adminPass"/>
			</div>
			<div>
				<input type="submit" value="Log in" />
			</div>
		</form><!-- form -->
		<div class="button">
			<a href="#">Training with live project</a>
		</div><!-- button -->
	</section><!-- content -->
</div><!-- container -->
</body>
</html>