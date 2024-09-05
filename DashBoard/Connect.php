<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
function conectar(){
$con = @mysqli_connect('localhost', 'root', 'usbw','tcc')
or die("Problemas na conexão, tente novamente");
}
?>