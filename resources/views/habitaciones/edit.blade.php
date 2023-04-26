<h1>Editar Habitaciones</h1>

<form action="{{ url('/habitaciones/'. $habitaciones->id) }}" method="POST">
  @csrf
  {{ method_field('PUT') }}
  @include('habitaciones.form')
</form>