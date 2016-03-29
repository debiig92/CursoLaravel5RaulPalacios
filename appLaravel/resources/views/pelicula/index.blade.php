@extends ('layouts.admin')

    @include('alerts.success')
    @section('content')

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
                        <td>Editar</td>
                    </tr>

                @endforeach
            </tbody>
        </table>

    @endsection
