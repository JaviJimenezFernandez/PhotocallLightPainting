<!doctype html>
<html lang="es">
	
	
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE-edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Contacto</title>
		
		<link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
		
		<link rel="stylesheet" href="css/style.css">
		
	</head>

	
	
	<body>

		<header class="header_pinta">
			<a href="index.html" class="logo"><img src="images/LogoPhotocall.png" alt="LogoPhotocall"></a>

		</header>
		
		<!--diseño de la sección CONTACTO-->
		
		<section class="contact" id="contact">
			
			<h2 class="heading">Hablamos <span>!!</span></h2>
			<p>
				Contacta con nosotros para saber más y pedir tu presupuesto sin compromiso.
			</p>
			
			<form action="contacto.php" method="POST">
			
				<div class="input-box">
					<input type="text" name="nombre" placeholder="Nombre completo" class="form-control">
					<input type="email" name="email" placeholder="email" class="form-control">
				</div>
				
				<div class="input-box">
					<input type="number" name="telefono" placeholder="Teléfono" class="form-control">
					<input type="text" name="asunto" placeholder="Asunto" class="form-control">
				</div>
				
				<textarea name="comentarios" id="" cols="30" rows="10" placeholder="Cuéntame..." class="form-control"></textarea>
				<input type="submit" name="enviar" value="Enviar" class="btn">
			
			</form>
			<br>
			<div id="mensaje-envio"></div>
			<br><br>
			<div class="footer-pinta">
				<a href="index.html" class="btn">Volver</a>
			</div>

			<?php
    
    			include ("envioDatos.php");

			?>

		</section>
		
		<!--diseño delFOOTER-->
		
		<!-- <footer class="footer">
		
			<div class="footer-text">
				<p>Copyright &copy; 2023 Photocall Light Painting | Todos los derechos reservados.</p>
			</div>
			
			<div class="footer-iconTop">
				<a href="index.html" class="btn">Volver a inicio</a>
			</div>
		
		</footer> -->
		
		<!--SCROLL REVEAL-->
		<script src="https://unpkg.com/scrollreveal"></script>
		
		<!--TYPED JS-->
		<!--<script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>-->
		<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script> 
		
		<!--CÓDIGO JAVASCRIPT-->
		<script src="js/script.js" defer></script>
		<script src="js/jquery-1.6.3.min.js"></script>

	</body>

	
</html>











