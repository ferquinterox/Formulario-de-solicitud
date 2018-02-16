<?php 
include ("connection.php");
function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}
try{
    $stack = array();
    $dias = "";
    $fechai = "";
    $fechaf = "";
if(isset($_REQUEST['submit'])){
	//1era seccion, preguntas del primer contenedor!
    //Nombre del proyecto
    if (!empty($_REQUEST['nom_proy'])){
        inserciones($stack, 1, $_REQUEST['nom_proy']);
	}else {
		phpAlert(   "Error!\\n\\n Falta el nombre"   );
	}
    //Numero de reporte
    if (!empty($_REQUEST['num_rep'])){
        inserciones($stack, 2, $_REQUEST['num_rep']);
	}else {
		phpAlert(   "Error!\\n\\n Falta el numero de reporte"   );
	}
    //Nombre del solicitante
    if (!empty($_REQUEST['nom_sol'])){
        inserciones($stack, 3, $_REQUEST['nom_sol']);
	}else {
		phpAlert(   "Error!\\n\\n Falta el nombre del solicitante"   );
	}
    //RUC
    if (!empty($_REQUEST['ruc'])){
        inserciones($stack, 4, $_REQUEST['ruc']);
	}else {
		phpAlert(   "Error!\\n\\n Falta el RUC de la empresa"   );
	}
    //Correo del solicitante
    if (!empty($_REQUEST['correo'])){
        inserciones($stack, 5, $_REQUEST['correo']);
	}else {
		phpAlert(   "Error!\\n\\n Falta el correo del solicitante"   );
	}
    //Numero de telefono fijo
    if (!empty($_REQUEST['num_fijo'])){
        inserciones($stack, 6, $_REQUEST['num_fijo']);
	}else {
		phpAlert(   "Error!\\n\\n Falta el numero de telefono fijo"   );
	}
    //Numero de celular
    if (!empty($_REQUEST['num_cel'])){
        inserciones($stack, 7, $_REQUEST['num_cel']);
	}else {
		phpAlert(   "Error!\\n\\n Falta el numero de celular"   );
	}
    //2DA seccion, segundo contenedor
    //Dias
	if (!empty($_REQUEST['dia'])){
		foreach($_REQUEST['dia'] as $afi){
			$dias = $dias . $afi . "\n";
		}
        inserciones($stack, 8, $dias);
	}else{
        phpAlert(   "Error!\\n\\n NO introdujo ningun día"   );
	}
    //Horas de inicio
	if (!empty($_REQUEST['hora_inicio'])){
		foreach($_REQUEST['hora_inicio'] as $afi){
		    $fechai = $fechai . $afi . "\n";
		}
        inserciones($stack, 9, $fechai);
	}else{
        phpAlert(   "Error!\\n\\n NO introdujo ninguna hora de inicio"   );
	}
    //Horas de finalización
    if (!empty($_REQUEST['hora_fin'])){
		foreach($_REQUEST['hora_fin'] as $afi){
		    $fechaf = $fechaf . $afi . "\n";
		}
        inserciones($stack, 10, $fechaf);
	}else{
        phpAlert(   "Error!\\n\\n NO introdujo ninguna hora de finalización"   );
	}
    //3ra sección, tercer contenedor
    //Tipo de permiso
    if (!empty ($_REQUEST['tipo_permiso'])){
       inserciones($stack, 11, $_REQUEST['tipo_permiso']);
    }else {
        phpAlert(   "Error!\\n\\n Falta el tipo de permiso"   );
    }
    //Motivo del tipo de permiso
    if (!empty ($_REQUEST['motivo'])){
		inserciones($stack, 12, $_REQUEST['motivo']);
    }else {
        phpAlert(   "Error!\\n\\n Falta el Motivo del permiso"   );
    }    
	//4ta sección, cuarto contenedor
    //Latitud
    if (!empty ($_REQUEST['latitud'])){
        inserciones($stack, 13, $_REQUEST['latitud']);
    }else {
        phpAlert(   "Error!\\n\\n Falta la latitud"   );
    }
    //Longitud
    if (!empty ($_REQUEST['longitud'])){
        inserciones($stack, 14, $_REQUEST['longitud']);
    }else {
        phpAlert(   "Error!\\n\\n Falta la longitud"   );
    }
    
}else {
	throw new Exception ("POR FAVOR INTRODUZCA UN VALOR");
}
	querys($stack);
    phpAlert("¡Datos Enviados!");

}catch (Exception $e){
	echo $e->getMessage();
}

?>