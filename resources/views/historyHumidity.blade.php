@extends('welcome')

@section('contenido')

<div class="container" style="padding: 25px;">
    <div class="card">
        <h5 class="card-header text-center">Historial de consulta</h5>
        <div class="card-body">
            <table class="table">
                <thead class="table-dark">
                    <tr>
                    <th scope="col">Ciudad</th>
                    <th scope="col">Humedad</th>
                    <th scope="col">Fecha</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($records as $record)
                    <tr>
                        <td>{{ $record["city"]->name }}</td>
                        <td>{{ $record->humidity }}</td>
                        <td>{{ $record->created_at }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
