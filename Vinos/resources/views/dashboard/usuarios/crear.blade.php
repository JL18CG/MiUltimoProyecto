@extends('dashboard.main')

@section('content')
<a class="btn btn-danger mt-3 mb-3" href="{{ route('user.index') }}">
    Regresar
</a>
@include('dashboard.secciones.validation-error')
<h3 class="mt-1" >Agregar un Administrador</h3>
<form action="{{ route("user.store") }}" method="POST">
    @include('dashboard.usuarios._form',['mods' => "no"])
</form>

@endsection