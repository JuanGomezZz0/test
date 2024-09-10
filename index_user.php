<?php
session_start();
include('inc/header.php');
$loginError = '';

if (!empty($_POST['email']) && !empty($_POST['pwd'])) {
	include_once 'invoice.php';
	$invoice = new Invoice();
	$user = $invoice->loginUser($_POST['email'], $_POST['pwd']);
	if (!empty($user)) {
		$_SESSION['user'] = $user[0]['first_name'] . "" . $user[0]['last_name'];
		$_SESSION['userid'] = $user[0]['id'];
		$_SESSION['email'] = $user[0]['email'];
		$_SESSION['address'] = $user[0]['address'];
		$_SESSION['mobile'] = $user[0]['mobile'];
		header("Location:invoice_list_user.php");
	} else {
		$loginError = "Correo electrónico o contraseña no válidos!";
	}
}
?>

<title>Sistema de Facturación</title>
<script src="js/invoice.js"></script>
<link href="css/style.css" rel="stylesheet">
<link rel="icon" href="https://i.ibb.co/0BmgTXK/vision-limpieza-removebg-preview.png">
<?php include('inc/container.php'); ?><link rel="stylesheet"href="https://fonts.googleapis.com/css2?family=Righteous&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap">
<div class="row">
	<div class="demo-heading">
	</div>
	<div class="login-form">
		<h4>Acceso Usuario:</h4>
		<form method="post" action="">
			<div class="form-group">
				<?php if ($loginError) { ?>
					<div class="alert alert-warning"><?php echo $loginError; ?></div>
				<?php } ?>
			</div>
			<div class="form-group">
				<input name="email" id="email" type="email" class="form-control" placeholder="Correo Electrónico" autofocus="" required>
			</div>
			<div class="form-group">
				<input type="password" class="form-control" name="pwd" placeholder="Contraseña" required>
			</div>
			<div class="form-group">
				<button type="submit" name="login" class="btn btn-info">Ingresar</button>	
				<a href="register.php" button type="button" class="btn btn-resgister" data-bs-target="#exampleModal">Registrar</button>            </div>
		</form>				
				</div>
				
		<br>
	</div>
</div>
</div>