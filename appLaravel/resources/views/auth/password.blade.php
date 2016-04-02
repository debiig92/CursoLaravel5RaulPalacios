@extends('layouts.principal')

	@section('menu')
		<li><a href="{!!URL::to('/')!!}"><i class="home"></i></a></li>
		<li><a href="{!!URL::to('reviews')!!}"><div class="cat"><i class="watching"></i><i class="watching1"></i></div></a></li>
		<li><a href="{!!URL::to('contacto')!!}"><div class="cnt"><i class="contact"></i><i class="contact1"></i></div></a></li>
	@endsection

	@section('content')
		@include('alerts.success')
		<div class="contact-content">
			<div class="top-header span_top">
				<div class="logo">
					<a href="index.html"><img src="images/logo.png" alt="" /></a>
					<p>Movie Theater</p>
				</div>
				<div class="search v-search">
					<form>
						<input type="text" value="Search.." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search..';}"/>
						<input type="submit" value="">
					</form>
				</div>
				<div class="clearfix"></div>
			</div>
			<!---contact-->
			<div class="main-contact">
				<h3 class="head">Recuperar contraseña</h3>
				<p>Escribe tu correo electronico</p>
				<div class="contact-form">
					{!!Form::open(['url' => 'password/email', 'method' => 'POST'])!!}
						<div class="col-md-6 contact-left">
							{!!Form::text('email', null, ['placeholder' => 'Correo Electronico', 'required' => 'required'])!!}
						</div>

						{!!Form::submit('Enviar link')!!}
						<div class="clearfix"></div>
					{!!Form::close()!!}
				</div>
			</div>
		</div>

	@endsection
