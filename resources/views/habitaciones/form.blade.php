Tipo:
<input type="text" name="Tipo" id="Tipo" value="{{ isset($habitaciones)?$habitaciones->Tipo:'' }}">

Precio:
<input type="number" name="Precio" id="Precio" value="{{ isset($habitaciones)?$habitaciones->Precio:'' }}">

Disponibilidad:
<input type="text" name="Disponibilidad" id="Disponibilidad"
  value="{{ isset($habitaciones)?$habitaciones->Disponibilidad:'' }}">

<button type="submit">Save</button>