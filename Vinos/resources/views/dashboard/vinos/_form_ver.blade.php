@csrf



<div class="form-group">
    <label for="name">Nombre</label>
    <input readonly class="form-control" type="text" name="nombre" id="name" value="{{ $vino->nombre }}">
</div>

<div class="form-group">
    <label for="surname">Marca</label>
    <input readonly class="form-control" type="text" name="marca" id="apellido" value="{{ $vino->marca }}">
</div>

<div class="form-group">
    <label for="email">Precio</label>
    <input readonly class="form-control" type="number" min="0" name="precio" id="email" value="{{ $vino->precio  }}">
</div>

<div class="form-group">
    <label for="content">Descripción</label>
    <textarea  readonly class="form-control" id="content" name="descripcion" rows="3">{{ $vino->descripcion }}</textarea>
</div>

<div class="form-group">
    <label for="email">Región</label>
    <input readonly class="form-control" type="text" name="precio" id="email" value="{{ $vino->region  }}">
</div>

<div class="form-group">
    <label for="email">Color</label>
    <input readonly class="form-control" type="text" name="precio" id="email" value="{{ $vino->color  }}">
</div>

<div class="form-group">
    <label for="email">Tiempo en: </label>
    <input readonly class="form-control" type="text" name="precio" id="email" value="{{ $vino->tipo  }}">
</div>

<div class="form-group">
    <label for="email">Clasificación de Azúcar residual: </label>
    <input readonly class="form-control" type="text" name="precio" id="email" value="{{ $vino->t_azucar  }}">
</div>

<div class="form-group">
    <label for="">Tiempo en meses</label>
    <input readonly class="form-control" type="number" min="0" name="meses_tiempo" id="email" value="{{ $vino->meses_tiempo }}">
</div>


