<?php
$email=$_POST['email'];
$password=$_POST['password'];

/*session_start();
$_SESSION['email']=$email;*/

$conexion=mysqli_connect("localhost", "id21456164_admin123", "Uninpahu2023-", "id21456164_product_management_inventory");

$consulta="SELECT *FROM registros where email='$email' and contrasena='$password'";
$resultado=mysqli_query($conexion,$consulta);

$resultado = $conexion->query($consulta);

if($resultado->num_rows > 0){
    header("location:../pagina/pagina1.html");
}else{
    include("index.html");
    ?>
       <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script>
                Swal.fire({
                  title: "Error!",
                  text: "Error en la autenticación. Por favor, verifica tu Email  y Password e inténtalo nuevamente!",
                  icon: "error"
                });     
            </script>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>