<?php
$email=$_POST['email'];
$password=$_POST['password'];

/*session_start();
$_SESSION['email']=$email;*/

$conexion=mysqli_connect("localhost", "root", "", "validacion_usuarios");

$consulta="SELECT*FROM registros where email='$email' and contraseña='$password'";
$resultado=mysqli_query($conexion,$consulta);

$resultado = $conexion->query($consulta);

if($resultado->num_rows > 0){
    header("location:pagina1.html");
}else{
    include("login-pro.html");
    ?>
    <h1>ERROR EN LA AUTENTIFICACION</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>