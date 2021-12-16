@extends('welcome')

@section('contenido')

<form action="/humidity" method="POST">
    @csrf
    <div class="container" style="padding: 25px;">
        <div class="card">
            <h5 class="card-header text-center">Consultar la humedad</h5>
            <div class="card-body">
                <h5 class="card-title">Consulte la humedad de las cuidades</h5>
                <p class="card-text">Seleccione entre las siguientes cuidades:</p>
                <div class="row g-0">
                    <div class="col-md-6 text-center">
                        <select class="form-select" name="city" id="city" required>
                            <option selected value="0">Seleccione ciudad..</option>
                            <option value="1">Miami</option>
                            <option value="2">New York</option>
                            <option value="3">Orlando</option>
                        </select>
                    </div>
                    <div class="col-md-6 text-center">
                        <button type="submit" class="btn btn-primary">Consultar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

@yield('resultado')

@endsection