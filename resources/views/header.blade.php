
  <header class=" mb-4 shadow-s">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
    <div class="container-fluid   w-75"  >
      <a class="navbar-brand" href="/">AvcALON</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        
        <div class="d-flex justify-content-between container-fluid" >
          
          <div class=" ms-auto me-auto w-50 p-2 bd-highlight ms-5 container-fluid ">
            <form class="d-flex" role="search" action="/buscar">
              <input style="border-radius: 8px 0px 0px 8px;" class=" buscar form-control me-0" name="b" type="search" placeholder="Buscar" aria-label="Buscar">
              <button style="border-radius: 0px 8px 8px 0px;" class=" btn btn-light" type="submit">Buscar</button>
            </form>
            </div>
            <div  class="d-flex justify-content-end w-25 pt-2 bd-highlight text-end navbar-dark ">
              
              <a href="/carrito">
              <img style="width: 2rem; height: 2rem;" class="mt-1" src="{{ asset('storage').'/uploads/carrito.png' }}" alt="">
              </a>
                @if(count(Cart::getContent()) )
                <p style="color:white;" class="text-center mt-1 ">{{ count(Cart::getContent()) }}</p>
                @endif
              @auth
               
              

              <div class="dropdown" >
                <button class="btn btn-black text-white dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                {{ Auth::user()->name }}
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item" href="/home">Home</a></li>
                  <li class="" style="border-style:none">

                    <form class="dropdown-item"  action="/logout" method="POST">
                      @csrf
                      <a href="#" onclick="this.closest('form').submit()" class="dropdown-item p-0">Cerar sesión</a>
                    </form>

                  </li>
                 
                </ul>
              </div>
             
              @else
              <a style="" class="btn btn-black link-light  rounded-2 p-2 shadow" href="/auth">Acceder</a>
              @endauth
            </div>
            
      </div>

      </div>
    </div>
  </nav>

</header>

