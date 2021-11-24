<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
    <link rel="stylesheet" href="../login/css/style2.css">
    
</head>
<body >
<br>
				<form >
					<h1 class="panel panel-heading">Registro de usuario</h1>

				</form>
				
				<div class="panel panel-body">
					<form id="frmRegistro" align="center">

					<label>Correo</label><br>
					<input type="text" class="form-control input-sm" id="usuario" name="usuario"><br>	

					<label>Nombre</label><br>
					<input type="text" class="form-control input-sm" id="nombre" name="nombre"><br>

					<label>Apellido</label><br>
					<input type="text" class="form-control input-sm" id="apellido" name="apellido"><br>

					<label>Contraseña</label><br>
					<input type="text" class="form-control input-sm" id="password" name="password"><br>

					

					<p></p>
					<span class="btn btn-primary" id="registrarNuevo" name="registrarse" >Registrar</span><br>
					<br>
						<a href="index.php" class="btn btn-default" align="center " id="boton">Iniciar sesión</a>
					</div></form>
</div>
</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#registrarNuevo').click(function(){

			if($('#nombre').val()==""){
				alertify.alert("Debes agregar el nombre");
				return false;
			}else if($('#apellido').val()==""){
				alertify.alert("Debes agregar el apellido");
				return false;
			}else if($('#usuario').val()==""){
				alertify.alert("Debes agregar el usuario");
				return false;
			}else if($('#password').val()==""){
				alertify.alert("Debes agregar el password");
				return false;
			}

			cadena="nombre=" + $('#nombre').val() +
					"&apellido=" + $('#apellido').val() +
					"&usuario=" + $('#usuario').val() + 
					"&password=" + $('#password').val();

					$.ajax({
						type:"POST",
						url:"php/registro.php",
						data:cadena,
						success:function(r){

							if(r==2){
								alertify.alert("Este usuario ya existe, prueba con otro");
							}
							else if(r==1){
								$('#frmRegistro')[0].reset();
								alertify.success("Agregado con exito");
							}else{
								alertify.error("Fallo al agregar");
							}
						}
					});
		});
	});
</script>

