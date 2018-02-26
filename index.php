<?php 
session_start();
if(!isset($_SESSION['usr']))
    header("Location:./Login");
else {
?>
<html lang="es">
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSS -->
    <link rel="stylesheet" href="css/bootstrap-grid.min.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/solicitud.css" type="text/css">
    <link rel="icon" type="image/png" href="../static/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="../static/favicon-16x16.png" sizes="16x16" />
    <title>Solicitud de permiso</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!--pido jquery-->
    <script src="js/ajax.js"></script>
</head>

<body>
    <?php
         include("php/conexion.php");
         $obj=new Conexion();
        ?>
        <!-- Parte de arriba del banner -->
        <header class="banner">
            <div class="container">
                <div class="row">
                    <img class="img col-12 col-sm-4 col-md-2" src="./static/logoattt.png" height="150px" width="120px" style="margin-bottom: 10px; margin-top: 10px;">
                    <div class="col-12 col-sm-8 col-md-10 ">
                        <h3 style="margin-top: 30px; color:white;">Solicitudes de permisos para la ATTT:<br> </h3>
                        <p style="color:white;">Estos formularios tienen el propósito de recolectar la información sobre los distintos permisos para ser aprobados por la Autoridad del Transito y Transporte Terrestre (ATTT).</p>
                    </div>
                </div>
            </div>
        </header>
        <!-- Barra para seleccionar      -->
        <div class="container">
            <div class="row">
                <div class="col">
                    <h4>Elija el tipo de permiso que desea solicitar:</h4>
                    <select class="custom-select" name="tipo_solicitud" id="menu">
                        <?php
                  echo($obj->get_adjunto(5));
              ?>
                    </select>
                    <button class="btn btn-info" id="buscar" type="button" style="margin-top:5px; margin-left:5px;">Aceptar</button>
                    <button class="btn btn-danger" id="rem" type="button" style="margin-top:5px; margin-left:5px;">Desplegar tipos de permisos disponibles</button>

                </div>
            </div>
            <br>
            <br>
            <!--Información sobre los permisos disponibles            -->
            <div id="bienvenida">
                <h2>Tipos de permisos disponibles:</h2>
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-3" id="cajas1">
                        <h5 class="title_sub">Solicitud de Trabajo en vía <br></h5>
                        <hr width="100%">
                        <label class="sub">Este formulario tiene el propósito de recolectar la información sobre los permisos de trabajos en vía que ha aprobado la Autoridad del Transito y Transporte Terrestre (ATTT). Esta sección se incluyen trabajos como: Mantenimiento de líneas eléctricas, telefónicas y cables (aéreos o subterráneos), mantenimientos de vías y calles (asfalto y concreto), carga y descarga de contenedores (mercacncía y mudanza), instalación y desintalacion de gruas, entradas y salida de camiones, carga y descarga de materiales y vaciado de concreto.</label>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3" id="cajas2">
                        <h5 class="title_sub">Solicitud de Trabajo en vía - Trabajos de Corte de pavimento<br></h5>
                        <hr width="100%">
                        <label class="sub">Este formulario tiene el propósito de recolectar la información sobre los permisos de trabajos en vía que ha aprobado la Autoridad del Transito y Transporte Terrestre (ATTT). Esta sección incluye trabajos como: Trabajos de corte y pavimento para la instalación de tubería de drenaje pluvil, agua potable, aguas servidas, viaducto eléctrico, fibra óptica, vaciado de concreto, construcción de carrriles de circulación, ceras, cunetas y actividades de obra.</label>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3" id="cajas3">
                        <h5 class="title_sub">Solicitud de permisos de actividades en vías públicas <br></h5>
                        <hr width="100%">
                        <label class="sub">Este formulario tiene el propósito de recolectar la información sobre alguna actividad en la vía publica, que alguna entidad o persona, desee realizar, estas incluyen: Desfiles, marchas, caravanas, caminatas, carreras (autos, bicicleta), procesiones.</label>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3" id="cajas4">
                        <h5 class="title_sub">Solicitud para Movimiento de tierra, tosca, y otros materiales pétreos <br></h5>
                        <hr width="100%">
                        <label class="sub">Este formulario tiene el propósito de recolectar la información sobre los permisos de movimiento de tierra, piedra, tosca y otros materiales pétreos.</label>
                    </div>
                </div>
                <br>
                <br>
            </div>
        </div>
        <!-- Termina contenido de barra e informacion de los permisos       -->
        <!--Empieza el formulario -->
        <div id="formi" style="display:none;">
            <form class="form-inline" data-toggle="validator" method="post" action="" target='votar' id="formulario">
                <div class="container" id="menu" style="margin-top:10px;">
                <!--Banner que indica cual permiso selecciono-->
                    <div class="form-row banner_permiso">
                        <h3 class="titulo_permisos">Solicitud de Trabajo en vía <br></h3>
                        <label class="subtitle">Este formulario tiene el propósito de recolectar la información sobre los permisos de trabajos en vía que ha aprobado la Autoridad del Transito y Transporte Terrestre (ATTT).</label>
                    </div>
                </div>
                <div class="container" id="all1">
                    <!--1era Seccion  -->
                    <h4>Información Personal: <br><small>Información del solicitante para contactarlo durante el proceso de solicitud.</small></h4>
                    <!--Primera fila de preguntas -->
                    <div class="form-row">
                        <!-- Bloque de Cedula -->
                        <div class="form-group col-12 col-sm-12 col-md-4" id="cajas">
                            <label for="nom_proy" data-trigger="hover click" data-container="body" data-toggle="popover" data-placement="top" data-content="En este espacio va la cedula de la persona que esta llenando la infomarción actualmente. Ejemplo: 8-930-1175." title="Cedula del solicitante">→ Cedula: (?)</label>
                            <div class="large_input">
                                <input class="form-control" type="text" name="ced_sol" placeholder="Introduzca su cedula" data-required-error="Por favor llene este campo" required tabindex="1">
                            </div>
                            <div class="help-block with-errors text-danger"></div>
                        </div>
                        <!-- Bloque de nombre del solicitante-->
                        <div class="form-group col-12 col-sm-12 col-md-4" id="cajas">
                            <label data-trigger="hover click" data-container="body" data-toggle="popover" data-placement="top" data-content="En este espacio va el nombre de la persona que en este momento estan llenando la solicitud. Ejemplo: Alan Brito." title="Nombre del Solicitante o Empresa">→ Nombre del Solicitante que solicita el permiso:* (?)</label>
                            <div class="large_input">
                                <input class="form-control" type="text" name="nom_sol" placeholder="Introduzca el Nombre del solicitante o empresa" data-required-error="Por favor llene este campo" required tabindex="2">
                            </div>
                            <div class="help-block with-errors text-danger"></div>
                        </div>
                        <!-- Bloque de correo electronico -->
                        <div class="form-group col-12 col-sm-12 col-md-4" id="cajas">
                            <label data-trigger="hover click" data-container="body" data-toggle="popover" data-placement="top" data-content="En este espacio va el correo del solicitante o de la empresa para comunicarnos con este. Ejemplo: innovacion@gob.pa" title="Correo Electrónico">→ Correo electrónico:*(?)</label>
                            <div class="large_input">
                                <input class="form-control" type="email" name="correo" data-error="Ingrese un correo valido" placeholder="Introduzca el Correo del solicitante o empresa" required tabindex="5"> </div>
                            <div class="help-block with-errors text-danger"></div>
                        </div>
                       
                    </div>
                    <!--Segunda fila de preguntas -->
                    <div class="form-row">
                        <!-- Bloque de nombre de la empresa -->
                        <div class="form-group col-12 col-sm-12 col-md-4" id="cajas">
                            <label data-trigger="hover click" data-container="body" data-toggle="popover" data-placement="top" data-content="En este espacio va el nombre de la empresa a la cual usted va a solicitar este permiso. Ejemplo: 430-1-15000." title="Nombre de la empresa">→ Nombre de la empresa:(?)</label>
                            <div class="large_input">
                                <input class="form-control" type="text" name="ruc" placeholder="Introduzca el nombre empresa" tabindex="4"> </div>
                        </div>
                         <!-- Bloque de RUC -->
                         <div class="form-group col-12 col-sm-12 col-md-4" id="cajas">
                            <label data-trigger="hover click" data-container="body" data-toggle="popover" data-placement="top" data-content="En este espacio van el número que identifica e individualiza a los contribuyentes, personas físicas o jurídicas, para fines tributarios. Se compone de Nº de Asiento, Tomo y Folio. Ejemplo: 430-1-15000." title="RUC (Registro Único de Contribuyentes)">→ RUC (Registro Único de Contribuyentes):(?)</label>
                            <div class="large_input">
                                <input class="form-control" type="text" name="ruc" placeholder="Introduzca el RUC de la empresa" tabindex="3"> </div>
                        </div>
                        <!--Bloque de numero de telefono/celular -->
                        <div class="form-group col-12 col-sm-12 col-md-4" id="cajas">
                            <label data-trigger="hover click" data-container="body" data-toggle="popover" data-placement="top" data-content="En este espacio va el teléfono fijo (local) o número de celular, de la empresa o del solicitante. Ejemplo: 230-1234" title="Número de Celular/Teléfono fijo">→ Número de Celular o Teléfono fijo:*(?)</label>
                            <div class="large_input">
                                <input class="form-control" type="text" name="num_fijo" placeholder="Introduzca el celular/telefono fijo" pattern="[0-9]{3}-[0-9]{4}|[0-9]{4}-[0-9]{4}" data-error="Ingrese un numero de celular/telefono valido" required tabindex="6">
                            </div>
                            <div class="help-block with-errors text-danger"></div>
                        </div>
                    </div>
                </div>
                <!-- Cerrando primera seccion -->
                <hr style="width: 90%">
                <!--Empieza la 2da seccion -->
                <div class="container" id="all2">
                    <div class="clearfix">
                        <h4>Fecha y hora en que se estará realizando el trabajo: <br><small>Se especifican los horarios en que se plantea realizar el trabajo.</small></h4> </div>
                    <!--Grupo de preguntas -->
                    <div class="form-row">
                        <!--Bloque de fecha de inicio y final de los dias -->
                        <div class="form-group col-12 col-sm-12 col-md-6" id="cajas">
                            <label data-trigger="hover click" data-container="body" data-toggle="popover" data-placement="top" data-content="En esta sección se definen días en que se estarán realizando los trabajos, si son dias seguidos, puede realizar esta acción 1 sola vez, en caso de necesitar días diferentes, debe aagregar más días con el botón de abajo. Ejemplo: Del 1-02-2018 al 3-02-2018 (todos los días seguidos), Del 1-02-2018 al 1-02-2018 (si no son días seguidos, luego agrega los otros dias con el botón de abajo)" title="Fecha del día en que se realizará el trabajo">→ Fecha del día en que se estará realizando el trabajo:*(?)</label>
                            <div class="large_input">Inicia: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input class="form-control" type="date" name="dia_inicio[]" data-date-format="DD MMMM YYYY" tabindex="7">
                                <br> Termina:&nbsp;&nbsp;
                                <input class="form-control" type="date" name="dia_fin[]" data-date-format="DD MMMM YYYY" tabindex="8">
                            </div>
                        </div>
                        <!--Bloque de horarios de trabajo -->
                        <div class="form-group col-12 col-sm-12 col-md-6" id="cajas">
                            <label data-trigger="hover click" data-container="body" data-toggle="popover" data-placement="top" data-content="En esta sección va los horarios en que se estarán realizando los trabajos, según los días seleccionados previamente. (Se guarda en formato 0:00 - 23:59) Ejemplo: De 10:00 a 14:00 (2:00PM)" title="Horarios de trabajo">→ Horario del trabajo:*(?)</label>
                            <div class="large_input"> De:&nbsp;&nbsp;
                                <input class="form-control" type="time" name="hora_inicio[]" tabindex="9"> Hasta: &nbsp;&nbsp;
                                <input class="form-control" type="time" name="hora_fin[]" tabindex="10">
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <!-- Bloque para añadir otro dia -->
                <div class="container" id="fecha" id="all">
                    <!--Boton de anadir otro dia, FALTA LA FUNCION DE AGREGAR OTRA FECHA -->
                    <div class="form-row" id="cajas">
                        <br>
                        <h5>En caso de tener dias no-secuenciales, puede añadir otro día presionando el botón &darr; (Maxímo 10): </h5>
                        <div class="form-row">
                            <button class="btn btn-info" type="button" id="añadir" style="margin-top: 10px; margin-bottom:20px;" onClick="addInput('fecha');">+ ¡Añadir otro día diferente!</button>
                            <span id="cantidad_dia"> Llevas 1 día.</span> </div>
                    </div>
                </div>
                <!-- Cerrando segunda seccion -->
                <hr style="width: 90%">
                
                <!--Grupo de adjunto -->
                <!--Empieza el contenedor de adjuntos -->
                <div class="container" id="adj1">
                    <div class="form-row">
                        <h4>Adjuntos necesarios:<br><small>Aqui se deben subir los distintos adjuntos necesarios para la aprovación de la solicitud.</small></h4></div>
                    <div id="aqui"></div>
                    <br>
                    <div class="container">
                        <div class="form-row" id="cajas">
                            <h5>Ejemplo de un documento de <i>"Planes de manejo de transito":</i> </h5> &nbsp;&nbsp;
                            <a class="btn btn-info" href="../docs/Requisito_planes_de_manejo_de_transito.docx" download>Descargar ejemplo</a>
                        </div>
                    </div>
                </div>
                <!--Cerrando el contenedor de adjuntos -->
                <hr style="width: 90%">
                <!--Empieza el contenedor del motivo (solo 1 permiso) -->               
                <div class="container" id="menu1_2">
                    <div class="clearfix">
                        <h4>Descripción del trabajo:<br><small>Para especificar que tipo de trabajo se estará realizando.</small></h4></div>
                    <!--Grupo de preguntas -->
                    <div class="form-row">
                        <!-- Bloque del motivo -->
                        <div class="form-group col-12 col-sm-12 col-md-12" id="cajas">
                            <label data-container="body" data-trigger="hover click" data-toggle="popover" data-placement="top" data-content="En este espacio escribira el motivo de porque necesitara este permiso. Ejemplo: Necesito cerrar la vía para arreglar una fuaga debajo del pavimento." title="Motivo del permiso">→ Motivo:*(?)</label>
                            <div class="large_input">
                                <textarea class="form-control" placeholder="Especifique el motivo detallado del trabajo" form="formulario" name="motivo" rows="4" cols="50" required data-required-error="Por favor llene este campo" required tabindex="12"></textarea>
                            </div>
                            <div class="help-block with-errors text-danger"></div>
                        </div>
                    </div>
                </div>
                <!-- Cerrando contenedor motivo -->

                <!--Empieza el cuarto contenedor -->
                <hr style="width: 90%">
                <div class="container" id="all3">
                    <div class="clearfix">
                        <h4>Lugar donde se realizará el trabajo:<br><small>Para especificar en que lugar especificamente se estará realizando el trabajo. </small></h4> </div>
                    <!--Mapa de google con javascript-->
                    <!--Grupo que contiene el mapa -->
                    <div class="form-row">
                        <!-- Bloque del mapa -->
                        <div class="col-12 col-sm-12 col-md-12" id="map" style="border: 1px solid black;"></div>
                    </div>
                    <!-- Grupo que contiene la latitud y longitud -->
                    <div class="form-row">
                        <!-- Bloque de latitud -->
                        <div class="form-group col-12 col-sm-12 col-md-6" id="cajas">
                            <label data-container="body" data-trigger="hover click" data-toggle="popover" data-placement="top" data-content="En esta sección contará con un mapa donde arrastrará el pin rojo hacia el lugar donde estará realizando su trabajo." title="Lugar donde se realizará el trabajo">→ Latitud:(?)</label>
                            <div class="large_input">
                                <input class="form-control" type="text" id="lat" name="latitud">
                            </div>
                            <label data-container="body" data-trigger="hover" data-toggle="popover" data-placement="top" data-content="En esta sección contará con un mapa donde arrastrará el pin rojo hacia el lugar donde estará realizando su trabajo." title="Lugar donde se realizará el trabajo">→ Longitud:(?)</label>
                            <div class="large_input">
                                <input class="form-control" type="text" id="lng" name="longitud">
                            </div>

                        </div>
                        <div class="form-group col-12 col-sm-12 col-md-6" id="cajas">
                            <label data-container="body" data-trigger="hover click" data-toggle="popover" data-placement="top" data-content="En este espacio escribirá exactamente los alrededores del lugar de trabajo. Ejemplo: Al frente del restaurante cubano" title="Descripción de la Ubicación">→ Descripción de la ubicación:*(?)</label>
                            <div class="large_input">
                                <textarea class="form-control" placeholder="Describa de donde hasta donde se realizara el trabajo" form="formulario" name="ubicacion_esp" rows="4" cols="50" required data-required-error="Por favor llene este campo" required tabindex="13"></textarea>
                            </div>
                            <div class="help-block with-errors text-danger"></div>
                        </div>
                    </div>
                    <!-- Grupo que contiene el boton de submit -->
                    <div class="row" style="margin-top: 20px;">
                        <!-- Bloque de enviar -->
                        <div class="col">
                            <input type="submit" name="submit" class="btn-primary" value="Enviar Solicitud" onclick="arriba()"> </div>
                    </div>
                </div>
            </form>
        </div>
        <br>
        <br>
        <br>
        <!--Empieza el footer-->
        <footer class="fixed-bottom pie">
            <div class="container">
                <div class="row">
                    <img class=" col-2 col-sm-2 col-md-2 col-lg-1 col-xl-1 imagen_footer" src="static/rsz_logoattt.png" width="50px" height="60px">
                    <div class="col-10 col-sm-10 col-md-10 col-lg-11 col-xl-11">
                        <h6 class="footer_letters">© 2018 - Autoridad del Tránsito y Transporte Terrestre </h6></div>
                </div>
            </div>
        </footer>
        <!--Cierra el footer -->
        <!--JavaScript -->
        <script>
            function arriba() {
                $('html, body').animate({
                    scrollTop: 0
                }, 'fast');
            }
        </script>
        <script src="js/googlemaps.js"></script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC0QOw7Z3wgnwgVYwjRhndk2Sn6ihzyG2s&callback=initMap">
        </script>
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/popup.js"></script>
        <script src="js/fechaydia.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.js"></script>
        <script src="js/myjs.js"></script>
        <script type="text/javascript">
            $(function() {
                $('[data-toggle="popover"]').popover()
            })
        </script>
</body>
</html>
<?php
}
?>
