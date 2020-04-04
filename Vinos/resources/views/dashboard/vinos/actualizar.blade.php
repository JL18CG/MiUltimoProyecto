@extends('dashboard.main')

@section('content')

@include('dashboard.secciones.validation-error')
<a class="btn btn-danger mt-3 mb-3" href="{{ route('vinos.index') }}">
    Regresar
</a>
<form action="{{ route("vinos.update",$vino->id) }}" method="POST">
    @method('PUT')
    @include('dashboard.vinos._form',['mods' => "si"])
</form>

@endsection