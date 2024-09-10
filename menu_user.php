<link rel="icon" href="https://i.ibb.co/0BmgTXK/vision-limpieza-removebg-preview.png">
<ul class="nav navbar-nav">
	<?php
	if ($_SESSION['userid']) { ?>
		<li class="dropdown">
			<button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown">Hola de nuevo <?php echo $_SESSION['user']; ?>
				<span class="caret"></span></button>
			<ul class="dropdown-menu">
				<li><a href="action.php?action=logout">Cerrar Sesión</a></li>
			</ul>
		</li>
	<?php } ?>
</ul>
<br /><br /><br /><br />