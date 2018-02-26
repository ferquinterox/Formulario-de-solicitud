<?php 
session_start();
if(isset($_SESSION['usr']))
    header("Location:..");
else{
?>
<html>
<head>
    <title>Ingresar</title>
<!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSS -->
    <link rel="stylesheet" href="../css/bootstrap-grid.min.css" type="text/css">
    <link rel="stylesheet" href="../css/bootstrap-reboot.min.css" type="text/css">
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <style>
            body{
                background-image:url("../static/tr_via.jpg");
                background-size:     cover;                      /* <------ */
                background-repeat:   no-repeat;
                background-position: center center;
            }
            #cajeta{
                padding:3%;
                margin:10% 25%;
                height: 50%;
                background-color:#F2E9E0;
                -webkit-box-shadow: 0 40px 80px black;
                
            }
            .titulo{
                text-align:center;
                font-family: 'Source Sans Pro', sans-serif;
                margin-bottom:5%;
            }
            label,input{
                font-family: 'Lato', sans-serif;
            }
            div.form-group{
           margin-bottom:35px;
            }
            div.has-error{
            margin-bottom:-2px;
            } 
    </style>
    <script>
 
    </script>
</head>
<body>
<div id="cajeta">
    <h1 class="titulo">Login</h1>
    <form action="../php/verify.php" method="POST" data-toggle="validator" id='miform'>
        <div class="form-group row">
            <label for="usr" class="col-sm-2 col-form-label col-form-label-lg">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control form-control-lg" id="usr" placeholder="Email" data-error="Ingrese un correo valido" required tabindex="1">
                <div class="help-block with-errors text-danger"></div>
            </div>
            
        </div>
        <div class="form-group row">
            <label for="pass" class="col-sm-2 col-form-label form-control-lg">Contraseña</label>
            <div class="col-sm-10">
                <input type="password" class="form-control form-control-lg" name="pass" id="pass" placeholder="Contraseña"  data-required-error="Por favor llene este campo" required tabindex="2">
                <div class="help-block with-errors text-danger"></div>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary btn-md">Conectarme</button>
                <a href="../Registro/" class="btn btn-link">No tengo cuenta, registrarme.</a>
            </div>
        </div>
    </form>
</div>
<script src="../js/jquery-3.3.1.min.js"></script>
<script src="../js/bootstrap.bundle.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.js"></script>
<script>
  $(document).ready(function () {
    $('#miform').validator().off('input.bs.validator change.bs.validator focusout.bs.validator');
   });
</script>
</body>
</html>
<?php
}?>