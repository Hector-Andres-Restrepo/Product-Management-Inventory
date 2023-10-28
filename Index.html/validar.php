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
    <div id="message-container" style="position: fixed; top: 21px; width: 40%; background-color: #2691d9; text-align: center; border-radius: 20px;">
    <div id="message" style="padding: 10px; background-color: #65b2e6; border-radius: 20px;">
        <h1 style="color: #fff; font-size: 27px;">Error en la Autentificacion</h1>
    </div>
</div>

<script>
    // JavaScript para ocultar el mensaje después de 3 segundos
    setTimeout(function () {
        document.getElementById("message-container").style.display = "none";
    }, 2000); // 2000 milisegundos = 2 segundos
</script>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>