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
  <body style="background: white;"> 
    
        @include('header')
        
       
        <div class="w-75 container " >
            <div class="row">
                 
                    <div class="p-2 col border-1" style="border-radius: 5px; background-color:#FFFFFF">
                    @include('formProductos') <br>
                           
                            @include('componentes/homeTable')
                            
                            
                            
                    </div>
                    
             </div>
        
        </div>
        
<br><br><br><br>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>