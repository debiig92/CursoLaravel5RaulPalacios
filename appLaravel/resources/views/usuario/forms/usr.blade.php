<div class="form-group">
	<label for="">Nombre</label>
	{!!Form::text('name', null, array('class' => 'form-control', 'placeholder' => 'Inserta el Nombre del usuario'))!!}
</div>
<div class="form-group">
	<label for="">Correo</label>
	{!!Form::email('email', null, array('class' => 'form-control', 'placeholder' => 'Inserta el email del usuario'))!!}
</div>
	<div class="form-group">
	<label for="">Contraseña</label>
	{!!Form::password('password', array('class' => 'form-control', 'placeholder' => 'Inserta la contraseña del usuario'))!!}
</div>