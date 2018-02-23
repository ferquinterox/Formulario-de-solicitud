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
        mysqli_set_charset($this->con,"utf8");
        if (mysqli_connect_errno())
            {
            echo "Error: " . mysqli_connect_error();//error de Conexion
            }
       }
    
function get_permiso(){
    $sql = "SELECT * FROM `tipo_solicitud` WHERE id_tipo_sol";
      $result =$this->con->query($sql);
        $tipos = 1;
        $cadena = "";
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            $cadena = $cadena.'<option value="'.$tipos.'">'.$row['nombre'].'</option>';
                $tipos += 1;
            }}
    return $cadena;
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
        case 5:
        $SQLQuery="SELECT id_tipo_sol,nombre FROM `tipo_solicitud` ORDER BY id_tipo_sol ASC";
        $result =$this->con->query($SQLQuery);
        while($res=mysqli_fetch_assoc($result)){//el while se ejecuta mientras en el arreglo $result haya todavia elementos
            $cadena=$cadena."<option value='".$res['id_tipo_sol']."'>".$res['nombre']."</option>";
         }
        return $cadena;
    }
    $result =$this->con->query($SQLQuery);
    while($res=mysqli_fetch_assoc($result)){//el while se ejecuta mientras en el arreglo $result haya todavia elementos
            $cadena=$cadena.'<div class="form-row"><div class="form-group col-12 col-sm-12 col-md-6" id="cajas"> <label> 📃 '.$res['nombre'].'</label> </div> <!-- Bloque del adjuntos --> <div class="form-group col-12 col-sm-12 col-md-6" id="cajas" onload="bs_input_file()"> <h6>Tipo de archivos permitidos: .doc, .pdf y .rar o .zip (en caso de ser varios archivos).</h6> <div class="input-group input-file" name="Fichier1"> <span class="input-group-btn"> <button class="btn btn-info btn-choose" type="button">Elige Archivo</button> </span>&nbsp;<!-- FALTAN LOS NAME --> <input type="text" class="form-control" name="'.$res['nombre'].'" placeholder="Choose a file..."/> <span class="input-group-btn">&nbsp; <button class="btn btn-warning btn-reset" type="button">Borrar</button> </span> </div> </div> </div>';
    }
    
    $cadena = $cadena . '<script src="../js/jquery-3.3.1.min.js"></script> <script>$(function() { bs_input_file(); }); </script>';
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