

<div class="row row-cols-1 row-cols-md-3 ">

                      @foreach($productos as $producto)
                        <div class="col mb-4 mt-2 cards">
                                <div class=" card h-100">
                                <!--Card image-->
                                 <div class="-sm view overlay">
                                    
                                    <img alt="" class="card-img-top img-fluid" src="{{ asset('storage').'/'.$producto->foto }}"style="width: 18rem; height: 12rem;" />
                                
                                 </div>

                                <!--Card content-->
                                <div class=" card-body">

                                    <!--Title-->
                                    <h4 class="card-title">{{ $producto->nombre }}</h4>
                                    <!--Text-->
                                    <p class="card-text" style="">${{ $producto->precio }}</p> <br>
                                    <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" value="{{ $producto->id }}" name="producto_id">
                                      
                                        <button type="submit" class="boton btn btn-light-blue btn-md"
                                        @auth 
                                        @if( Auth::user()->name == $producto->user->name)
                                        disabled
                                        @endif
                                        @endauth
                                        >Agregar al carrito</button>
                                        

                                        
                                    </form>
                                    <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                                    

                                </div>

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
    

</style>