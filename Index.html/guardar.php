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
       <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script>
                Swal.fire({
                  title: "Error!",
                  text: "El email ya está en uso. Por favor, utiliza otro correo electrónico!",
                  icon: "error"
                });     
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