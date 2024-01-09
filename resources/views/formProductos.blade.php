<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
Agregar producto
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header ">
        <h1 class="text-center modal-title fs-5 " id="staticBackdropLabel">Agregar producto</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form class="w-75 m-auto" action="{{ url('/home') }}" method="post" enctype="multipart/form-data">
@csrf

<input class="container-fluid m-1" type="text" name="nombre" id="nombre" placeholder= "Nombre"> <br>
@error('nombre')  <p style="color:red">{{$message}}</p>    @enderror
<input class="container-fluid m-1" type="text" name="descripcion" id="descripcion" placeholder= "descripcion" ><br>
@error('descripcion')  <p style="color:red">{{$message}}</p>    @enderror
<input class="container-fluid m-1" type="text" name="categoria_id" id="categoria_id" placeholder= "categoria" ><br>
@error('categoria_id')  <p style="color:red">{{$message}}</p>    @enderror
<input class="container-fluid m-1" type="number" name="precio" id="precio" placeholder= "precio" ><br>
@error('precio')  <p style="color:red">{{$message}}</p>    @enderror
<input class="container-fluid m-1" type="number" name="stock" id="stock" placeholder= "stock" ><br>
@error('stock')  <p style="color:red">{{$message}}</p>    @enderror
<input class="container-fluid p-0 m-1" type="file" name="foto" id="foto" value=""><br>
@error('foto')  <p style="color:red">{{$message}}</p>    @enderror
   
   
<input class="m-1 btn btn-success" type="submit"  data-bs-dismiss="modal" value="Agregar"><br><br>
   
</form>
      </div>
    </div>
  </div>
</div>












