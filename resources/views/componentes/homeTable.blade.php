<table class="table">
  <thead>
    <tr>
    <th scope="col">imagen</th>
      <th scope="col">nombre</th>
      <th scope="col">descripcion</th>
      <th scope="col">stock</th>
      <th scope="col">precio</th>
      <th scope="col">accion</th>
      
    </tr>
  </thead>
  <tbody>

  @foreach($productos as $producto)
    <tr>
      <td> <img src="{{ asset('storage').'/'.$producto->foto }}" style="width: 8rem; height: 5rem;" alt=""></td>
      <td>{{ $producto->nombre }}</td>
      <td>{{ $producto->descripcion }}</td>
      <td>{{ $producto->stock }}</td>
      <td>{{ $producto->precio }}</td>
      <td>edita |  <form action="{{ url('/home/'.$producto->id) }}" method="post">
        @csrf
        {{method_field('DELETE')}}
        <input type="submit" value="Borrar">
      </form></td>
    </tr>
 @endforeach

  </tbody>
</table>