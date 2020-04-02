@if ($errors->any())
@foreach ($errors->all() as $error)
<div class="alert alert-danger mt-1">
    {{ $error }}
</div>
@endforeach
@endif