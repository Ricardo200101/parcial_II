<h1>Listado de Habitaciones</h1>
<a href="{{ url('habitaciones/create') }}">Nuevo Registro</a>

<table>
  <thead>
    <th>#</th>
    <th>Tipo</th>
    <th>Precio</th>
    <th>Disponibilidad</th>
    <th>Actions</th>
  </thead>
  <tbody>
    @foreach($habitaciones as $habitacion)
    <tr>
      <td>{{ $habitacion->id }}</td>
      <td>{{ $habitacion->Tipo }}</td>
      <td>{{ $habitacion->Precio }}</td>
      <td>{{ $habitacion->Disponibilidad }}</td>

      <form action="{{ url('/habitaciones/'.$habitacion->id) }}" method="POST">
        @csrf
        {{ method_field('DELETE') }}
        <td>
          <a href="{{ route('habitaciones.edit', $habitacion->id) }}">Editar</a>
          <input type="submit" value="Delete" onclick="return confirm('Desea eliminar el registro ?')">
        </td>
      </form>
    </tr>
    @endforeach
  </tbody>
</table>