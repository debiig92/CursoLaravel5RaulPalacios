@extends('layouts.principal')

@section('menu')
	<li><a href="{!!URL::to('/')!!}"><i class="home"></i></a></li>
	<li><a href="{!!URL::to('reviews')!!}"><div class="cat"><i class="watching"></i><i class="watching1"></i></div></a></li>
	<li><a class="active" href="{!!URL::to('contacto')!!}"><div class="cnt"><i class="contact"></i><i class="contact1"></i></div></a></li>
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
			<h3 class="head">CONTACT</h3>
			<p>WE'RE ALWAYS HERE TO HELP YOU</p>
			<div class="contact-form">
				{!!Form::open(['route' => 'mail.store', 'method' => 'POST'])!!}
					<div class="col-md-6 contact-left">
						{!!Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre', 'required' => 'required'])!!}
						{!!Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Correo Electronico', 'required' => 'required'])!!}
					</div>
					<div class="col-md-6 contact-right">
						{!!Form::textarea('mensaje', null, ['placeholder' => 'Mensaje'])!!}
						{!!Form::submit('SEND')!!}
					</div>
					<div class="clearfix"></div>
				{!!Form::close()!!}
			</div>
		</div>
	</div>

@stop
