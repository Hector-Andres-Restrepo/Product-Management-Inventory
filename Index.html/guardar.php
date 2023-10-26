<?php
$conexion=mysqli_connect("localhost", "root", "", "validacion_usuarios");

$nombre1 = $_POST['nombre1'];
$email1 = $_POST['email1'];
$password1 = $_POST['password1'];

$sql = "SELECT * FROM registros WHERE email = '$email1'";
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    include("rgister.html");
    ?>
    <h1>EMAIL YA EN USO</h1>
    <?php
} else {
    $insertar = "INSERT INTO registros VALUES ('$nombre1', '$email1', '$password1')";
    if ($conexion->query($insertar) === TRUE) {
        header("location:login-pro.html");
    } else {
        echo "Error al insertar el registro: " . $conexion->error;
    }
}
?>