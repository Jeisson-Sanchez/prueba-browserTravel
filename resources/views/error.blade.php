@extends('viewHumidity')

@section('resultado')

<div class="container" style="padding: 25px;">
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>UPS!</strong> {{$error}}.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
</div>

@endsection