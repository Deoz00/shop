

<div class="d-flex flex-column  p-0 svg-shadow shadow-gray shadow-intensity-l">

                @foreach($productos as $producto)
                   
                     
                            <div style="border-color:#e0e0e0!important;" class="cards border border-1 border-top-0 border-end-0 border-start-0  p-0 d-flex flex-row  card h-100 rounded-1" >
                                <!--Card image-->
                                 <div class=" view overlay">
                                    
                                    <img alt="" class=" m-2 rounded-2 card-img-top img-fluid" src="{{ asset('storage').'/'.$producto->foto }}"style="width: 18rem; height: 12rem;" />
                                
                                 </div>

                                <!--Card content-->
                                <div class="  card-body">

                                    <!--Title-->
                                    <h2 class="card-title">{{ $producto->nombre }}</h2>
                                    <!--Text-->
                                    <h4 class="card-text" style="">${{ $producto->precio }}</h4>
                                    <h4 class="card-text" style="">vendedor: {{ $producto->user->name }}</h4>
                                    <!-- Provides extra visual weight and identifies the primary action in a set of buttons --> <br> <br>

                                    <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" value="{{ $producto->id }}" name="producto_id">
                                        <input type="hidden" value="1" name="quantity">
                                        <button type="submit" class="boton btn btn-light-blue btn-md" 
                                         @if( Auth::user()->name == $producto->user->name)
                                        disabled
                                        @endif
                                        >Agregar al carrito</button>
                                    </form>

                                    

                                </div>

                             
                         
                    </div> 
                @endforeach    
    </div>







   <style>
.cards{

}

.cards:hover .boton{
    border-color:gray;
    background-color: #f2f2f2;
    color: black;
}

.boton{
   border-color:white;
   color:white;
}
.boton:hover{
    background-color: red;
}
.boton:disabled{
    border-color:white;
   color:white;
}


</style>