<?php

 if(isset($_POST['name'])){
     include("php/Conexion.php");
     $tipo=$_POST['name'];
     $obj=new Conexion();
     echo $obj->get_adjunto($tipo);
    
 }
 ?>
