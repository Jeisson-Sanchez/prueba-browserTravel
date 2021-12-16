@extends('viewHumidity')

@section('resultado')

<div class="container" style="padding: 25px;">
  <div class="card mb-3">
    <div class="row g-0">
      <div class="col-md-4">
        <div class="card-body">
            <h5 class="card-title">{{ $data["city"]->name }}</h5>
            <p class="card-text">Humedad: {{ $data["weather"]->humid_pct }}</p>
            <p class="card-text"><small class="text-muted">Información sumistrada de: <br>Weather Unlocked</small></p>
        </div>
      </div>
      <div class="col-md-8">
        {!! Mapper::render() !!}
      </div>
    </div>
  </div>
</div>

@endsection