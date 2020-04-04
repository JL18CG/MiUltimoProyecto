@extends('dashboard.main')

@section('content')
<a class="btn btn-danger mt-3 mb-3" href="{{ route('vinos.index') }}">
    Regresar
</a>
@include('dashboard.secciones.validation-error')
<h3 class="mt-1" >Detalles vino</h3>
<form action="{{ route("vinos.store") }}" method="POST">
    @include('dashboard.vinos._form_ver',['mods' => "no"])
</form>

@endsection