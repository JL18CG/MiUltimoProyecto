@extends('dashboard.main')

@section('content')


<a class="btn btn-success mt-3 mb-3" href="{{ route('vinos.create') }}">
    Agregar Vino
</a>
<table class="table">
    <thead class="thead-dark">
      <tr class="text-center">
        <th scope="col">Id</th>
        <th scope="col">Nombre</th>
        <th scope="col">Precio</th>
        <th scope="col">Region</th>
        <th scope="col">Añadido</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>

    <tbody>
        @foreach ($vinos as $vino)
    <tr class="text-center">
        <th > {{ $vino->id }}</th>
        <td> {{ $vino->nombre }}</td>
        <td> {{ $vino->precio }}</td>
        <td> {{ $vino->region }}</td>
        <td> {{ $vino->created_at->format('d-m-Y') }}</td>

        <td>
            <a href="{{ route('vinos.show',$vino->id) }}" class="btn btn-primary">Ver</a>
            <a href="#" class="btn btn-primary">Galeria Vino</a>
            <a href="{{ route('vinos.edit',$vino->id) }}" class="btn btn-primary">Actualizar</a>

        <button data-toggle="modal" data-target="#deleteModal" data-id="{{ $vino->id }}" data-nombre="{{ $vino->nombre}}"
                class="btn btn-danger">Eliminar</button>

        </td>
        
      </tr>
      @endforeach
    </tbody>
  </table>
  
  

{{ $vinos->links() }}


<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="confirm-d text-center"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Mejor no</button>

                <form id="formDelete" method="POST" action="{{ route('vinos.destroy',0) }}"
                    data-action="{{ route('vinos.destroy',0) }}">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger">Simón</button>
                </form>


            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function(){

  $('#deleteModal').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var id = button.data('id') // Extract info from data-* attributes
      // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
      // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
      var nombre= button.data('nombre');
      action = $('#formDelete').attr('data-action').slice(0,-1)
      action += id
      console.log(action)

      $('#formDelete').attr('action',action)

      var modal = $(this)
      modal.find('.confirm-d').text('Se eliminará el Vino '+id+ ': ' + nombre + ' , de manera permanente')
  })

});

</script>


@endsection