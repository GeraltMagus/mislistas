<?php
$correo=$_POST['txtCorreo'];
$pass=$_POST['txtPassword'];
if($correo=="alan@correo.com"){
    if($pass=="1234"){
        echo " 
<script language='JavaScript'> 
alert('Bienvenido Alan'); 
//status es el contenido del error 
</script>";
header("login.php");
    }
}
?>