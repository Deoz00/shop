<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>tiendita</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style type="text/css">
        .buscar:focus{
          border-style: none;
          border-color: #fff;
          box-shadow: inset 0 0 0 0px #fff;
        }
        .buscar{
          border-style: none;
        }
        
    </style>
  
  </head>
  <body style="background: #ededed;">
  
    
        @include('header')
        <div class="d-flex flex-column w-75 container p-0">
        @foreach(Cart::getContent()->sortBy('id') as $item)
  
          <div style="border-color:#cccccc!important;" class="border border-1 border-top-0 border-end-0 border-start-0 p-2 d-flex " >
            <div><img class=" rounded-1" style="width: 5rem; height: 3rem;" src="{{ asset('storage').'/'.$item->attributes->image}}" alt="d"></div>
            <div class="w-50 ms-3 fs-5">
               <div class="w-50 ms-3 fs-5">{{$item->name}} {{$item->id}}</div>

               <form action="{{ route('cart.remove') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" value="{{ $item->id }}" name="producto_id">
                                        
                                        <button type="submit" class="boton btn  btn-md" style="color:red" >Eliminar</button>
                                    </form>
            </div>

            <div class="w-25 ms-2"><input id="cantidad" style="width: 3rem; height: 2rem;" type="number" name="cantidad" value="{{$item->quantity}}"></div>

             


            <div id="precio" name="precio" class="text-end w-25 me-2">{{$item->price}}</div> 
            
            
          </div>
          <form action="update-cart" method="post" name="FQ">
                @csrf
                
                <input type="hidden" name="id" value="{{ $item->id }}">
                <input type="hidden" name="quantity" value="">
              </form>
          
          
        @endforeach

        </div>
        @if(count(Cart::getContent()) >0)
        <div class="w-75 container-fluid d-flex  flex-row-reverse">
            
            <p name="total"> 0</p>
            <p class="me-3">Total</p>
            <form action="" method="Post">
            @csrf
            <button type="submit">comprar</button>


            </form>

        </div>
        @else
        <h1 class="text-center">Carrito vacío</h1>
        @endif

        
        
       
      <script>

        let fq = document.getElementsByName("FQ");
        

        let total = document.getElementsByName('total');
        let cantidad = document.getElementsByName('cantidad');
        let precio = document.getElementsByName('precio');
        console.log(total[0].textContent);
        let sum = 0;

                for (let i = 0; i < precio.length; i++) {
                    sum += parseInt(precio[i].textContent);
                }
                total[0].textContent = sum;
                //console.log(sum);
               
        
        cantidad.forEach( function(valor, indice, array) {
           // console.log("En el índice " + indice + " hay este valor: " + valor.value);
           let p = precio[indice].textContent;
           
           precio[indice].textContent = p*valor.value;

           let sum = 0;

            for (let i = 0; i < precio.length; i++) {
                sum += parseInt(precio[i].textContent);
            }
            total[0].textContent = sum;
            console.log(sum);

           valor.addEventListener('change', (event) => {
            
                fq[indice].elements["quantity"].value = valor.value;
                
               // console.log(valor.value);

                precio[indice].textContent = p*valor.value;
               // total[0].textContent =0;

               
                sum = 0;
               for (let i = 0; i < precio.length; i++) {
                    sum += parseInt(precio[i].textContent);
                }
                total[0].textContent = sum;
                console.log("cambiooo");
                fq[indice].submit();
            });
           
           
        });
        
        

           //let precio = document.getElementById('precio');
          // let cantidad = document.getElementById('cantidad');
           //let p = precio.textContent;
           //console.log(cantidad.value);
           //precio.innerHTML = precio.textContent*cantidad.value;
           
/* 
           cantidad.addEventListener('change', (event) => {

           // console.log("change");
            precio.textContent = p*cantidad.value;
            });
           
            function updateValue() {
                
             
            } */


      </script>      
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>