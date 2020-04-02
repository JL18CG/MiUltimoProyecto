@extends('dashboard.main')

@section('content')

<a class="btn btn-danger mt-3 mb-3" href="{{ route('user.index') }}">
    Regresar
</a>


<div class="form-group">
    <label for="name">Nombre</label>
    <input readonly class="form-control" type="text" name="name" id="name" value="{{ $user->name }}">
</div>
<div class="form-group">
    <label for="surname">Apellido</label>
    <input readonly class="form-control" type="text" name="surname" id="surname" value="{{ $user->apellido }}">
</div>

<div class="form-group">
    <label for="surname">Correo Electrónico</label>
    <input readonly class="form-control" type="text" name="surname" id="surname" value="{{ $user->email }}">
</div>


<div class="form-group">
    <label for="surname">Permisos</label>
    <input readonly class="form-control" type="text" name="surname" id="surname" value="{{ $user->rol }}">
        {{$user->rol == 'admin' ? ('Actualmente posee todos los provilegios'): ('Actualmente es un usuario Mortal')}}
</div>

@endsection