<?php
// Clase Conexion
// Conecta a la base de datos 
// 15 de Febrero de 2018 v0.0.1
class Conexion{
private $con;//variable que guarda la conexion a la base de datos
private $url="localhost";//url de la conexion
private $usr="id4765331_utpaigtesting";//usuario
private $pass="memes2662";//contraseña
private $dbname="id4765331_permisos";//nombre de la bd


function __construct(){
        //El Constructor crea la conexion a la base de datos
        $this->con = mysqli_connect($this->url,$this->usr,$this->pass,$this->dbname);
        if (mysqli_connect_errno())
            {
            echo "Error: " . mysqli_connect_error();//error de Conexion
            }
       }

function get_adjunto($tipo){
    //devuelve los adjuntos necesarios de acuerdo al tipo
    $SQLQuery="SELECT ta.nombre FROM tipo_adjunto as ta 
    INNER JOIN adjunto_solicitud as adso
    ON ta.id_tipo_adj=adso.id_tipo_adj
    Where adso.id_tipo_sol=";//QUERY PARA REGRESAR EL NOMBRE DE LOS ADJUNTOS
    $cadena="";//cadena que contiene el resultado
    switch($tipo){
        case 1:
        // Este es el caso para Trabajo de Obra en Via Publica
            $SQLQuery=$SQLQuery."'1'";
        break;
        case 2:
        // Este es el caso para Corte en Via Publica
            $SQLQuery=$SQLQuery."'2'";
        break;
        case 3:
        // Este es el caso para Actividades en Via Publica
            $SQLQuery=$SQLQuery."'3'";
        break;
        case 4:
        // Este es el caso para Movimiento de Tierra....
            $SQLQuery=$SQLQuery."'4'";
        break;
    }
    $result =$this->con->query($SQLQuery);
    while($res=mysqli_fetch_assoc($result)){//el while se ejecuta mientras en el arreglo $result haya todavia elementos
       $cadena=$cadena."Adjunte el .pdj de ".$res['nombre'].": <input type='file' name='".$res['nombre']."'><br>";
    }
    return $cadena;

}

function contar(){
$SQLQuery="Select COUNT(id_adjunto) from adjunto";
$result =$this->con->query($SQLQuery);
    while($res=mysqli_fetch_assoc($result)){
         return $res['COUNT(id_adjunto)']+1;
}
}
}