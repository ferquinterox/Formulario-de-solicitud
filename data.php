<html>
<head>
     <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->
    <link rel="stylesheet" href="css/bootstrap-grid.min.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">    
    <link rel="stylesheet" href="css/solicitud.css">
    <link rel="icon" type="image/png" href="static/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="static/favicon-16x16.png" sizes="16x16" />

    <title>(DATA)Solicitudes de permiso de vía</title>
</head>
<body>
    <header class="banner">
          <div class="container">
              <div class="row" >
                  <img class="img-responsive col-5 col-sm-4 col-md-2" src="static/logoattt.png" height="150px" width="120px" style="margin-bottom: 10px;">
                  <div class="col-7 col-sm-8 col-md-10">
                  <h3 style="margin-top: 30px;">Data recolectada de "Solicitudes de Trabajo en vía" <br> </h3>
                  <p>Este formulario tiene el propósito de recolectar la información sobre los permisos de trabajos en vía que ha aprobado la Autoridad del Transito y Transporte Terrestre (ATTT). Esta pagína despliega la información de recolectada en el formulario.</p></div>
              </div>
          </div>
      </header>
    <div class="container">
    <div class="table-responsive">
    <table class="table table-hover table-bordered">
         <caption>Lista de solicitudes enviadas</caption>
  <thead class="thead-dark">
    <tr>
      <th scope="col">#ID Solicitud</th>
      <th scope="col">Nombre del proyecto</th>
      <th scope="col">Numero de reporte</th>
      <th scope="col">Nombre del solicitante</th>
      <th scope="col">RUC</th>
      <th scope="col">Correo Electronico</th>
      <th scope="col">Numero de telefono_fijo</th>
      <th scope="col">Numero de telefono_Celular</th>
      <th scope="col">Dias_de_trabajo</th>
      <th scope="col">Horas de inicio</th>
      <th scope="col">Horas de finalizacion</th>
      <th scope="col">Tipo de permiso</th>
      <th scope="col">Motivo_de_solicitud</th>
      <th scope="col">Latitud de la ubicacion</th>
      <th scope="col">Longitud de la ubicacion</th>
    </tr>
  </thead>
  <tbody>
    <?php
     $con = mysqli_connect("localhost","root","","id4673579_permisos");
        if (!$con) {
            die("Connection failed: " . mysqli_connect_error());
        }

    $sql = "SELECT `id_solicitud`, `nom_proy`, `num_rep`, `nom_org`, `ruc`, `correo`, `tel_fijo`, `tel_cel`, `fechas_dias`, `horas_ini`, `horas_fin`, `tipo_perm`, `motivo_per`, `loc_lat`, `loc_long` FROM `info_peticion`";
    $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo nl2br('<tr class="table-info"><th scope="row">'.$row['id_solicitud'].'</th> <td>'.$row['nom_proy'].'</td> <td>'.$row['num_rep']. '</td> <td>'.$row['nom_org'].'</td> <td>'.$row['ruc'].'</td> <td>'.$row['correo'].'</td> <td>'.$row['tel_fijo'].'</td><td>'.$row['tel_cel'].'</td><td>'.$row['fechas_dias'].'</td><td>'.$row['horas_ini'].'</td><td>'.$row['horas_fin'].'</td><td>'.$row['tipo_perm'].'</td><td>'.$row['motivo_per'].'</td><td>'.$row['loc_lat'].'</td><td>'.$row['loc_long'].'</td></tr>');
            }
        } else {
            echo "<h2>0 results</h2>";
        }
?>
  </tbody>
</table>
</div>
    </div>
    <script src="js/jquery-3.3.1.min.js"></script> 
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.js"></script>
</body>
</html>
