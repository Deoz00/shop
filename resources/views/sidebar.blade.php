<div class="d-flex flex-column bd-highlight mb-3">
    
  <div style="border-color:#9e9e9e!important;" class=" p-2 bd-highlight navbar-dark  rounded-0 border border-1 border-top-0 border-end-0 border-start-0 border-dark">Categorias</div>
  @foreach($categorias as $categoria)
    <div style="border-color:#e0e0e0!important;" class="border border-1 border-top-0 border-end-0 border-start-0 mb-1 siderBarElement p-2 bd-highlight rounded-1">
    <form action="/buscar">  
         <input  id="prodId" name="categoria" type="hidden" value="{{ $categoria->id }}">
         <button style="border:none; background-color: transparent;" type="submit">{{ $categoria->nombre }}</button>
    </form>
</div>
    @endforeach
</div>



<style>

.siderBarElement{
    transition: background-color .1s;
    border-radius:5px;
    
}
    .siderBarElement:hover{
        background-color: #cccccc;
        
        

    }
</style>