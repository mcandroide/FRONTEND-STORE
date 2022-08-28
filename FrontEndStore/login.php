<?php

$dbhost="localhost";
$dbuster="root";
$dbpass="";
$dbname="test";


$conn = mysqli_connect ($dbhost, $dbuster, $dbpass, $dbname);
if (!$conn)
{
    die("No hay conexión".mysqli_connect_error());
}
$nombre=$_POST("txtusuario");
$pass= $_POST("txtpassword");
$query = mysql_query($conn,"SELECT * FROM login WHERE usuario = '".$nombre."'and password = '".$pass."'");
$nr=mysql_num_rows($query);

if($nr ==1)
{
    header ("location: beneficios.html");
    echo"Binevenido: ".$nombre;
}
else if ($nr == 0)
{
echo "No ingreso";
}

?>