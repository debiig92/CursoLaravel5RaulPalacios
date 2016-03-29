@extends('layouts.admin')

@section('content')

	@include('alerts.success')

	<div class="users">

		<table class="table">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Correo</th>
					<th>Operacion</th>
				</tr>
			</thead>
			<tbody>
				@foreach($users as $user)
					<tr>
						<td>{{$user->name}}</td>
						<td>{{$user->email}}</td>
						<td>
							{!!link_to_route('usuario.edit', $title = 'Editar', $parameters = $user->id, $attributes = array('class' => 'btn btn-primary'))!!}
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>

		{!!$users->render()!!}

	</div>
@stop

@section('scripts')
	{!!Html::script('js/script3.js')!!}
@endsection
