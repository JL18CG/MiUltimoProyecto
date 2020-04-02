@extends('dashboard.main')

@section('content')
    <h2>Mi perfil</h2>
    <p>
        Nombre: {{auth()->user()->name}} <br>
        Apellido: {{auth()->user()->apellido}} <br>
        Correo electrónico: {{auth()->user()->email}} <br>
        Rol: {{auth()->user()->rol}} <br>
        Img Perfil: "mi_perfil.png" <br>
    </p>
@endsection