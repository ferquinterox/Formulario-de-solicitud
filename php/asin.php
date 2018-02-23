<?php
 if(isset($_POST['data'])){
     include("conexion.php");
     $tipo=$_POST['data'];
     $obj=new Conexion();
     echo $obj->get_adjunto($tipo);
    }
 ?>