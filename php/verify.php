<?php
//variables de login y registro
$usr;
$pass;
//variables de registro
$nom;
if(isset($_POST['enviar']) or isset($_POST['registrar'])){
    if(isset($_POST['usr']) and !empty($_POST['usr']))
    $nom=$_POST['usr'];
    if(isset($_POST['pass'] and !empty($_POST['pass']))
    $pass=$_POST['pass'];
    }
}
?>