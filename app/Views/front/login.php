<div class="container pt-5 mt-4 mb-5">
	<div class="card-header text-justify">
		<div class="row d-flex justify-content-center">

			<?php if(!empty (session()->getFlashdata('fail'))):?>
				<div class="alert alert-danger"><?session()->getFlashdata('fail');?></div>
			<?php endif?>
			<?php if(!empty (session()->getFlashdata('success'))):?>
				<div class="alert alert-success"><?=session()->getFlashdata('success');?></div>
			<?php endif?>

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
					<p>¿No tiene una cuenta? <a href="<?php echo base_url('registro'); ?>">Registrarse</a></p>

				</div>
			</form>

		</div>
	</div>
</div>