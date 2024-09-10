<?php
session_start();
include('inc/header.php');
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
        <h4>Crea tu Usuario:</h4>
        <div class="row" style="display: flex; justify-content: center;">
            <div class="col-4 mt-5 columna">
                <h2>Ingresa tus datos</h2>
                <form action="validar.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <input class="form-control" type="text" name="first_name" placeholder="Nombre">
                        <label class="form-label" for="nombre"></label>
                    </div>

                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Email">
                        <label class="form-label" for="nombre"></label>
                    </div>

                    <div class="form-group mb-3">
                        <input class="form-control" type="pwd" name="pwd" placeholder="Password">
                        <label for="pwd"></label>
                    </div>

                    <div class="form-group mb-3">
                        <input class="form-control" type="pwd" name="rpwd" placeholder="Repetir password">
                        <label for="pwd"></label>
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

