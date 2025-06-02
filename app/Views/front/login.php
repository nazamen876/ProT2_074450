<div class="container pt-5 mt-4 mb-5">
	<div class="card-header text-justify">
		<div class="row d-flex justify-content-center">

<form method="post" action="<?php echo base_url('/enviarlogin') ?>">
	<div class="card-body" media="(max-width:768px)">
		<div class="mb-2">
			<label for="exampleFormControlInput1" class="forml-label">Correo</label>
			<input name= "email" type="text" class="form-control" placeholder="Correo"> 
		</div>

		<div class="mb-3">
			<label for="exampleFormControlInput1" class="forml-label">Contraseña</label>
			<input name= "pass" type="password" class="form-control" placeholder="Contraseña"> 
		</div>

		<input type="submit" value="Ingresar" class="btn btn-success">
		<a href="<?php echo base_url('registro'); ?>" class="btn btn-success">Crear una cuenta</a>

	</div>
</form>

</div>
</div>
</div>