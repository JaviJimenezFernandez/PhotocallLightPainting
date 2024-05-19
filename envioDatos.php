<?php
    
    include ("conexion.php");

    if(isset($_POST['enviar'])){
        if(
            strlen($_POST['nombre']) >= 1 &&
            strlen($_POST['email']) >= 1 &&
            strlen($_POST['telefono']) >= 1 &&
            strlen($_POST['asunto']) >= 1 &&
            strlen($_POST['comentarios']) >= 1
        ){
            $nombre = trim($_POST['nombre']);
            $email = trim($_POST['email']);
            $telefono = trim($_POST['telefono']);
            $fecha = date("d/m/y");
            $asunto = trim($_POST['asunto']);
            $comentarios = trim($_POST['comentarios']);

            $consulta = "INSERT INTO clientes(nombre, email, telefono, fecha)
                VALUES('$nombre', '$email', '$telefono', '$fecha')";
            $resultado = mysqli_query($conex, $consulta);

            // Destinatario y asunto del correo electrónico
            $destinatario = "superjevi@hotmail.com";
            $asunto_email = "Nuevo mensaje desde el formulario de contacto";

            $mensaje = "Nombre: $nombre\n";
            $mensaje .= "Email: $email\n";
            $mensaje .= "Teléfono: $telefono\n";
            $mensaje .= "Fecha: $fecha\n";
            $mensaje .= "Asunto: $asunto\n";
            $mensaje .= "Comentarios: $comentarios\n";

            // Enviar el correo electrónico
            // $resultado_envio = mail($destinatario, $asunto_email, $mensaje);

                if ($resultado) {
                    ?>
                        <script>
                            document.getElementById("mensaje-envio").innerHTML = "Muchas gracias por contactar con nosotros!!<br>Te responderemos a la mayor brevedad con llamada, Wassap o mail.";
                            $(".form-control").get(0).reset();
                        </script>
                    <?php 
                }else{
                    ?>
                        <script>
                            document.getElementById("mensaje-envio").innerHTML = "Algo ha salido mal!!";
                            $(".form-control").get(0).reset();
                        </script>
                        <!-- <h3 class="error">Algo ha salido mal!!</h3> -->
                    <?php
                }
            }else{
                ?>
                    <script>
                        document.getElementById("mensaje-envio").innerHTML = "Por favor, rellena todos los campos.";
                        
                    </script>
                    <!-- <h3 class="error">Debes rellenar todos los campos por favor</h3> -->
                <?php
            }

    }

?>