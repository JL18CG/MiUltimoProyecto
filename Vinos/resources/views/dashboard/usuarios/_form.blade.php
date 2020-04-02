@csrf



<div class="form-group">
    <label for="name">Nombre</label>
    <input class="form-control" type="text" name="name" id="name" value="{{ old('name',$user->name) }}">
</div>

<div class="form-group">
    <label for="surname">Apellido</label>
    <input class="form-control" type="text" name="apellido" id="apellido" value="{{ old('apellido',$user->apellido) }}">
</div>

<div class="form-group">
    <label for="email">Correo Electrónico</label>
    <input class="form-control" type="email" name="email" id="email" value="{{ old('email',$user->email) }}">
</div>



@if ($mods =='si')
<div class="form-group">
    <label for="email">Rol de Usuario</label>
        <select name="rol" class="form-control">
            <option value="admin"   {{$user->rol == 'admin' ? 'selected' : ''}} >Privilegios de Administrador</option>
            <option value="mortal"  {{$user->rol == 'mortal' ? 'selected' : ''}}>Provilegios de Mortal</option>
        </select>
</div>

<br>
<div class="dropdown-divider"></div>
<div class="form-group">
    <label for="password">Generar Nueva Contraseña (si no se altera, no se vera afectada la contraseña actual)</label>
    <input class="form-control" type="password" name="pass1">
</div>


<div class="form-group">
    <label for="password">Repetir Contraseña</label>
    <input class="form-control" type="password" name="pass2">
</div>
@else  

<div class="form-group">
    <label for="password">Contraseña</label>
    <input class="form-control" type="password" name="password">
</div>
@endif

<input type="submit" value="Enviar" class="btn btn-primary mb-5">

