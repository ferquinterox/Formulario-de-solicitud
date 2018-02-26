<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <style>
            body{
                background-image:url("static/tr_via.jpg");
                background-size:     cover;                      /* <------ */
                background-repeat:   no-repeat;
                background-position: center center; 
                background-color: red; 
            }
            #cajeta{
                padding:3%;
                margin: 10% 25%;
                height: 50%;
                background-color:white;
                -webkit-box-shadow: 0 5px 80px #505050;
                -moz-box-shadow: 0 5px 80px #505050;
                box-shadow: 0 5px 80px #505050; 
            }
            .titulo{
                text-align:center;
                font-family: 'Source Sans Pro', sans-serif;
                margin-bottom:10%;
            }
            .cont,input{
                font-family: 'Lato', sans-serif;
                font-size:20px;
            }
            input[type=text],input[type=password]{
                width:50%;
                height:10%;
                font-size:15px;
                margin-left:10px;
            }
            #usr{
                margin-left:42px;
            }
    </style>
</head>
<body>
<div id="cajeta">
    <h1 class="titulo">Login</h1>
    <?php
    if(!isset($_POST['enviar'])){//se crea el formulario si enviar no existe
    ?>
    <form action="" method="POST">
        <label class="cont">Usuario:<input name="usr" id="usr" type="text" placeholder="usuario"><br><br></label>
        <label class="cont">Contraseña:<input name="pass" type="password"><br><br></label>
        <label class="cont"><input type="submit" name="enviar" value="enviar"></label>
    </form>
    <?php
    }else{
        
    }
    ?>
</div>
</body>
</html>