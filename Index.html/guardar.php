<?php
$conexion=mysqli_connect("localhost", "id21456164_admin123", "Uninpahu2023-", "id21456164_product_management_inventory");

$nombre1 = $_POST['nombre1'];
$email1 = $_POST['email1'];
$password1 = $_POST['password1'];

$sql = "SELECT * FROM registros WHERE email = '$email1'";
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    include("rgister.html");
    ?>
    
<div id="message-container" style="position: fixed; top: 21px; width: 40%; background-color: #2691d9; text-align: center; border-radius: 20px;">
    <div id="message" style="padding: 10px; background-color: #65b2e6; border-radius: 20px;">
        <h1 style="color: #fff; font-size: 27px;">Email ya en uso</h1>
    </div>
</div>

<script>
    // JavaScript para ocultar el mensaje después de 3 segundos
    setTimeout(function () {
        document.getElementById("message-container").style.display = "none";
    }, 2000); // 2000 milisegundos = 2 segundos
</script>

    <?php
} else {
    $insertar = "INSERT INTO registros VALUES('$nombre1','$email1','$password1')";
    if ($conexion->query($insertar) === TRUE) {
        header("location:index.html");
    } else {
        echo "Error al insertar el registro: " . $conexion->error;
    }
}
?>