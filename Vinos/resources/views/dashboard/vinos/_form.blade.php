@csrf



<div class="form-group">
    <label for="name">Nombre</label>
    <input class="form-control" type="text" name="nombre" id="name" value="{{ old('nombre',$vino->nombre) }}">
</div>

<div class="form-group">
    <label for="surname">Marca</label>
    <input class="form-control" type="text" name="marca" id="apellido" value="{{ old('marca',$vino->marca) }}">
</div>

<div class="form-group">
    <label for="email">Precio</label>
    <input class="form-control" type="number" min="0" name="precio" id="email" value="{{ old('precio',$vino->precio) }}">
</div>

<div class="form-group">
    <label for="content">Descripción</label>
    <textarea class="form-control" id="content" name="descripcion" rows="3">{{ old('descripcion',$vino->descripcion) }}</textarea>
</div>

<div class="form-group">
    <label for="email">Región</label>
        <select name="region" class="form-control">
            <option value="mexico" {{$vino->region == 'mexico'?'selected' : ''}} >México</option>
            <option value="argentina" {{$vino->region == 'argentina'?'selected' : ''}}>Argentina</option>
            <option value="francia" {{$vino->region == 'francia'?'selected' : ''}}>Francia</option>
        </select>
</div>

<div class="form-group">
    <label for="email">Color</label>
        <select name="color" class="form-control">
            <option value="tinto" {{$vino->color == 'tinto'?'selected' : ''}}>Tinto</option>
            <option value="rosado"{{$vino->color == 'rosado'?'selected' : ''}}>Rosado</option>
            <option value="blanco"{{$vino->color == 'blanco'?'selected' : ''}}>Blanco</option>
        </select>
</div>




<div class="form-group">
    <label for="">Tiempo en: </label>
        <select name="tipo" class="form-control">
            <option value="barrica" {{$vino->tipo == 'barrica'?'selected' : ''}}>Barrica</option>
            <option value="botella" {{$vino->tipo == 'botella'?'selected' : ''}}>Botella</option>
        </select>
</div>

<div class="form-group">
    <label for="">Clasificación de Azúcar residual: </label>
        <select name="t_azucar" class="form-control">
            <option value="secos" {{$vino->t_azucar == 'secos'?'selected' : ''}} >Secos</option>
            <option value="abocados" {{$vino->t_azucar == 'abocados'?'selected' : ''}}>Abocados</option>
            <option value="semisecos" {{$vino->t_azucar == 'semisecos'?'selected' : ''}}>Semiseco</option>
            <option value="semidulces" {{$vino->t_azucar == 'semidulces'?'selected' : ''}}>Semidulce</option>
            <option value="dulces" {{$vino->t_azucar == 'dulces'?'selected' : ''}}>Dulce</option>
        </select>
</div>


<div class="form-group">
    <label for="">Tiempo en meses</label>
    <input class="form-control" type="number" min="0" name="meses_tiempo" id="email" value="{{ old('meses_tiempo',$vino->meses_tiempo) }}">
</div>

<input type="submit" value="Enviar" class="btn btn-primary mb-5">

