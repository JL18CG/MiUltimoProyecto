@extends('dashboard.main')

@section('content')

@include('dashboard.secciones.validation-error')
<a class="btn btn-danger mt-3 mb-3" href="{{ route('user.index') }}">
    Regresar
</a>
<form action="{{ route("user.update",$user->id) }}" method="POST">
    @method('PUT')
    @include('dashboard.usuarios._form',['mods' => "si"])
</form>

@endsection