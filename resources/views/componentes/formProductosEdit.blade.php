<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header ">
        <h1 class="text-center modal-title fs-5 " id="staticBackdropLabel">Editar producto</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form class="w-75 m-auto" action="{{ url('/home') }}" method="post" enctype="multipart/form-data">
      <input name="id" id="id1" type="hidden" >
      
@csrf
{{method_field('PUT')}}


<input class="container-fluid m-1" type="text" name="nombre" id="nombre1" placeholder= "Nombre"> <br>
@error('nombre')  <p style="color:red">{{$message}}</p>    @enderror
<input class="container-fluid m-1" type="text" name="descripcion" id="descripcion1" placeholder= "descripcion" ><br>
@error('descripcion')  <p style="color:red">{{$message}}</p>    @enderror
<!-- <input class="container-fluid m-1" type="text" name="categoria_id" id="categoria_id" placeholder= "categoria" > -->
<select class="container-fluid m-1" id="categoria_id1" name="categoria_id">
<option value="">Selecciona una categoría</option>
    @foreach($categorias as $categoria)
        <option value="{{ $categoria['id'] }}">{{ $categoria['nombre'] }}</option>
    @endforeach
            </select><br>
@error('categoria_id')  <p style="color:red">{{$message}}</p>    @enderror
<input class="container-fluid m-1" type="number" name="precio" id="precio1" placeholder= "precio" ><br>
@error('precio')  <p style="color:red">{{$message}}</p>    @enderror
<input class="container-fluid m-1" type="number" name="stock" id="stock1" placeholder= "stock" ><br>
@error('stock')  <p style="color:red">{{$message}}</p>    @enderror
<input class="container-fluid p-0 m-1" type="file" name="foto" id="foto1" value=""><br>
@error('foto')  <p style="color:red">{{$message}}</p>    @enderror
   
   
<input class="m-1 btn btn-success" type="submit"  data-bs-dismiss="modal" value="Editar"><br><br>
   
</form>
      </div>
    </div>
  </div>
</div>












