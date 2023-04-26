<h1>Nuevo registro de Habitacion</h1>

<form action="{{ url('/habitaciones') }}" method="POST">
  @csrf

  @include('habitaciones.form')
</form>