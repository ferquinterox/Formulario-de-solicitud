<html>
<body>
<?php
include("php/Conexion.php");
$obj= new Conexion();
?>
<?php
if(isset($_POST['env'])){
print_r($_POST);
include("php/upload.php");
upload_arch($_POST['Plano_de_Trabajos']);
}
else
{?>
<form action="" method="post" enctype="multipart/form-data">
<?php
echo($obj->get_adjunto(1));
?>
<input type="submit" name="env">
</form>
</body>
</html>
<?php 
}?>