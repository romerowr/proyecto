<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?= $this->page;?> - TheFancyCards</title>
	<link rel="stylesheet" href="pub/css/css.css"> 
        <link rel="stylesheet" type="text/css" href="pub/fonts/iconos/flaticon.css"> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="pub/js/nav.js"></script>
</head>
<body>
    <header>
        <div class="logo">the·fancy·cards</div>
        <div id="adorno">Todos Los Adornos</div>
        <div><input type="search" placeholder="Buscar"><span class="flaticon-magnifier-tool"></span></div>

          <!-- if user is logged: quitar inciar sesion y que aparezca Perfil-->   
          <!-- dentro de ese logged ver que tipo de usuario estamos usando-->
             <div class="main-nav">
	
                 <ul>
		
	

        <?php if($this->page=="Home")
                        {
                        echo('<li><a class="cd-signin" href="#0">Iniciar Sesión</a></li>
		<li><a class="cd-signup" href="#0">Registrarse</a></li>');
                        }
        ?>
          </ul></div>
    <div><img id="carrito" src="pub/img/iconosCategoria/carrito.png"></div></header>
          <div class="cd-user-modal"> <!-- this is the entire modal form, including the background -->
		<div class="cd-user-modal-container"> <!-- this is the container wrapper -->
			<ul class="cd-switcher">
				<li><a href="#0">Iniciar Sesión</a></li>
				<li><a href="#0">Registrarse</a></li>
			</ul>

			<div id="cd-login"> <!-- log in form -->
				<form class="cd-form">
					<p class="fieldset">
						<label class="image-replace cd-email" for="signin-email">E-mail</label>
						<input class="full-width has-padding has-border" id="signin-email" type="email" placeholder="E-mail">
						<span class="cd-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
						<label class="image-replace cd-password" for="signin-password">Contraseña</label>
						<input class="full-width has-padding has-border" id="signin-password" type="text"  placeholder="Contraseña">
						<a href="#0" class="hide-password">Oculto</a>
						<span class="cd-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
						<input type="checkbox" id="remember-me" checked>
						<label for="remember-me">No me olvides!</label>
					</p>

					<p class="fieldset">
						<input class="full-width" type="submit" value="Iniciar Sesión">
					</p>
				</form>
				
				<p class="cd-form-bottom-message"><a href="#0">Olvidaste tu contraseña?</a></p>
				<!-- <a href="#0" class="cd-close-form">Close</a> -->
			</div> <!-- cd-login -->

			<div id="cd-signup"> <!-- sign up form -->
				<form class="cd-form">
					<p class="fieldset">
						<label class="image-replace cd-username" for="signup-username">Username</label>
						<input class="full-width has-padding has-border" id="signup-username" type="text" placeholder="Username">
						<span class="cd-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
						<label class="image-replace cd-email" for="signup-email">E-mail</label>
						<input class="full-width has-padding has-border" id="signup-email" type="email" placeholder="E-mail">
						<span class="cd-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
						<label class="image-replace cd-password" for="signup-password">Contraseña</label>
						<input class="full-width has-padding has-border" id="signup-password" type="text"  placeholder="Contraseña">
						<a href="#0" class="hide-password">Ocultar</a>
						<span class="cd-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
						<input type="checkbox" id="accept-terms">
						<label for="accept-terms">Acepto los <a href="#0">Términos y Condiciones</a></label>
					</p>

					<p class="fieldset">
						<input class="full-width has-padding" type="submit" value="Registrarse">
					</p>
				</form>

				<!-- <a href="#0" class="cd-close-form">Close</a> -->
			</div> <!-- cd-signup -->

			<div id="cd-reset-password"> <!-- reset password form -->
				<p class="cd-form-message">Olvidaste tu contraseña? Por favor escribe tu email. Recibirás un correo electrónico para reestablecerla.</p>

				<form class="cd-form">
					<p class="fieldset">
						<label class="image-replace cd-email" for="reset-email">E-mail</label>
						<input class="full-width has-padding has-border" id="reset-email" type="email" placeholder="E-mail">
						<span class="cd-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
						<input class="full-width has-padding" type="submit" value="Restablece tu contraseña">
					</p>
				</form>

				<p class="cd-form-bottom-message"><a href="#0">Back to log-in</a></p>
			</div> <!-- cd-reset-password -->
			<a href="#0" class="cd-close-form">Close</a>
		</div> <!-- cd-user-modal-container -->
	</div> <!-- cd-user-modal -->
          
    