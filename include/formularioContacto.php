<div class="container">
	<div class="main">
		<h2 class="section-title">Formulario de Contácto</h2>

		<form action="<?php echo $url_host?>js/mail.php" method="POST">
			<div class="col-sm-12">
				<input type="text" name="nombre" id="nombre" placeholder="Nombre Completo" class="form-control required fromName" />
				<input type="number" name="telefono" id="telefono" placeholder="Telefóno/Celular" class="form-control required fromEmail" />
				<input type="email" name="email" id="email" placeholder="Correo electrónico" class="form-control required fromEmail" />
				<input type="text" name="asunto" placeholder="Asunto" id="asunto" class="form-control required subject" />
				<textarea name="mensaje" id="mensaje" placeholder="Mensaje" class="form-control required"></textarea>
				<div class="checkbox">
					<label>
						<input type="checkbox" name="terms"> Confirmo que he leído, entendido y acepto el <a href="images/Politicas_Tratamiento_Datos.pdf" target="_blank">Manual de políticas Web</a> , <a href="images/Aviso_de_Privacidad.pdf" target="_blank">Aviso
							de
							Privacidad</a> y la <a href="images/Consentimiento_Tratamiento_Datos.pdf" target="_blank">Cláusula de
							consentimiento web </a>
					</label>
				</div>
			</div>

			<div class="center">
				<button type="submit" class="btn btn-default-color btn-lg submit_form"><i class="fa fa-envelope"></i>Enviar
					Mensaje</button>
			</div>
		</form>
	</div>
</div>