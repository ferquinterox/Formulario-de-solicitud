<?php
//$con = mysqli_connect("localhost","id4673579_utpaig","aig1234","id4673579_permisos");

function inserciones (&$stack, $tipo, $valores){
   switch ($tipo){
       case 1:
           //Nombre proyecto
           array_push($stack, $valores);
       break;
       case 2:
           //Numero de reporte
           array_push($stack, $valores);
       break;
       case 3:
           //Nombre de solicitante
           array_push($stack, $valores);
       break;
       case 4:
           //RUC
           array_push($stack, $valores);
       break;
       case 5:
           //Correo
           array_push($stack, $valores);
       break;
       case 6:
           //Telefono Fijo
           array_push($stack, $valores);
       break;
       case 7:
           //Telefono celular
           array_push($stack, $valores);
       break;
       case 8:
           //Dias
           array_push($stack, $valores);
       break;
       case 9:
           //Horas Inicios
           array_push($stack, $valores);
       break;
       case 10:
           //Horas Fin
           array_push($stack, $valores);
       break;
       case 11:
           //Tipos de permiso
           array_push($stack, $valores);
       break; 
       case 12:
           //Motivo de permiso
           array_push($stack, $valores);
       break; 
       case 13:
           //Latitud
           array_push($stack, $valores);
       break; 
       case 14:
           //Longitud
           array_push($stack, $valores);
       break; 
           
        default:
         echo '<script type="text/javascript">alert("Fallo la conexion")</script>';
   }
    
}
function querys (&$stack){
    $con = mysqli_connect("localhost","root","","id4673579_permisos");
// Check connection
    if (mysqli_connect_errno())
    {
     echo '<script type="text/javascript">alert("Fallo la conexion ' . mysqli_connect_error() . '")</script>';
    }
    try{
    $sql = "INSERT INTO `info_peticion`(`id_solicitud`, `nom_proy`, `num_rep`, `nom_org`, `ruc`, `correo`, `tel_fijo`, `tel_cel`, `fechas_dias`, `horas_ini`, `horas_fin`, `tipo_perm`, `motivo_per`, `loc_lat`, `loc_long`) VALUES ('','$stack[0]','$stack[1]','$stack[2]','$stack[3]','$stack[4]','$stack[5]','$stack[6]','$stack[7]','$stack[8]','$stack[9]','$stack[10]','$stack[11]','$stack[12]','$stack[13]')";
    $Insert=mysqli_query ($con, $sql);
    }catch (Exception $e){
	echo '<script type="text/javascript">alert("'. $e->getMessage().'")</script>' ;
}    
}
?>