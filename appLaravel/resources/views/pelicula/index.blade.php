@extends ('layouts.admin')

    @section('content')

    @include('alerts.success')

        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Genero</th>
                    <th>Direccion</th>
                    <th>Caratula</th>
                    <th>Operaciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($movies as $value)
                    <tr>
                        <td>{!!$value->name!!}</td>
                        <td>{!!$value->genre!!}</td>
                        <td>{!!$value->direction!!}</td>
                        <td>
                            <img src="movies/{!!$value->path!!}" alt="" style="width: 100px;"/>
                        </td>
                        <td>
                            {!!link_to_route('pelicula.edit', $title = 'Editar', $parameters = $value->id, $attributes = ['class' => 'btn btn-primary'])!!}
                        </td>
                    </tr>

                @endforeach
            </tbody>
        </table>

    @endsection
