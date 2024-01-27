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
      <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop1" name="btnn" data-datos="{{ json_encode($producto) }}" >
Editar producto
</button>

        |
          <form action="{{ url('/home/'.$producto->id) }}" method="post">
        @csrf
        {{method_field('DELETE')}}
        <input type="submit" value="Borrar">
      </form></td>
    </tr>
 @endforeach

  </tbody>
</table>

@include("componentes/formProductosEdit")

<script>
    var abrirModalBtns = document.querySelectorAll('[data-bs-target="#staticBackdrop1"]');
    var nombre1 = document.getElementById('nombre1');
    var descripcion1 = document.getElementById('descripcion1');
    var categoria_id1 = document.getElementById('categoria_id1');
    var precio1 = document.getElementById('precio1');
    var stock1 = document.getElementById('stock1');
    //var stock1 = document.getElementById('stock1');


    abrirModalBtns.forEach(function(abrirModalBtn) {

      abrirModalBtn.addEventListener('click', function() {
      // Obtener los datos del atributo 'data-datos' y convertirlos de JSON a objeto
      var datos = JSON.parse(abrirModalBtn.getAttribute('data-datos'));
      console.log(datos);
      nombre1.value = datos.nombre;
      descripcion1.value = datos.descripcion;
      categoria_id1.selectedIndex  = datos.categoria_id;
      precio1.value = datos.precio;
      stock1.value = datos.stock;
      
      id1.value = datos.id;
    });

      // Construir una cadena con la información del array
     
    });
</script>