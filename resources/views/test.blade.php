<ul>
    @foreach($categorias as $categoria)
    <li>
        {{ $categoria->nombre }}
    </li>
    @endforeach
</ul>


<br><br><br>


<form action="{{ url('/agregarcategoria') }}" method="post">
    @csrf
  <div class="mb-3">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">categoria</label>
    <input type="txt" class="form-control" id="nombre" name="nombre">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>