<div class="container pt-5 mt-4 mb-5">
	<div class="card-header text-justify">
		<div class="row d-flex justify-content-center">
			<div class="card col-lg-3" style="width: 70%;">

				<div class="mt-4" style="padding-left: 15px;">

					<!-- Mensajes -->
					<?php if(!empty (session()->getFlashdata('msg'))):?>
						<div class="alert alert-danger"><?=session()->getFlashdata('msg');?></div>
					<?php endif?>
					<?php if(!empty (session()->getFlashdata('success'))):?>
						<div class="alert alert-success"><?=session()->getFlashdata('success');?></div>
					<?php endif?>

					<!-- Título -->
					<h4>Iniciar Sesión</h4>
				</div>

				<!-- Formulario -->
				<form method="post" action="<?php echo base_url('/enviar-login') ?>">
					<div class="card-body" media="(max-width:768px)">
						<!-- Email -->
						<div class="mb-2">
							<label for="exampleFormControlInput1" class="forml-label">Correo</label>
							<input name= "email" type="text" class="form-control" placeholder="Correo"> 
						</div>

						<!-- Contraseña -->
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
</div>