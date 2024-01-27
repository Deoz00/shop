<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
@include('header')


    <div class="d-flex container-fluid justify-content-between w-75">
        
        <div class="container-fluid p-2">
            <div class="container-fluid border border-1 border-top-0 border-end-0 border-start-0 mb-4"><p> Ingresar</p></div>
            
            <form method="post">
            @csrf
            @error('login')  <p style="color:red">{{$message}}</p>    @enderror
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Correo</label>
                    <input type="text"  class="form-control" name="email" value="{{ old('email')}}" aria-describedby="emailHelp">
                    @error('email')  <p style="color:red">{{$message}}</p>    @enderror
                    
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">contraseña</label>
                    <input type="password"  class="form-control" name="password">
                    @error('password')  <p style="color:red">{{$message}}</p>    @enderror
                </div>
                <input type="checkbox" name="recuerdame" id="">
                recuerdame <br><br>
                <button type="submit" class="btn btn-primary">Ingresar</button>
                <input type="hidden" name="tipo" value="ingresar">
            </form>
            

        </div>


        <div class="container-fluid p-2 ms-5">
        <div class="container-fluid border border-1 border-top-0 border-end-0 border-start-0 mb-4"><p> Registrar</p></div>
            <form method="post">
                @csrf
                @error('register')  <p style="color:red">{{$message}}</p>    @enderror
            <div class="mb-3">
                    <label for="usuario" class="form-label">Usuario</label>
                    <input type="text" class="form-control" name="name">
                    @error('name')  <p style="color:red">{{$message}}</p>    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Correo</label>
                    <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
                    @error('email')  <p style="color:red">{{$message}}</p>    @enderror
                    
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Contrseña</label>
                    <input type="password" class="form-control" name="password">
                    @error('password')  <p style="color:red">{{$message}}</p>    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Confirmar contraseña</label>
                    <input type="password" class="form-control" name="password_confirmation">
                    @error('password_confirmation')  <p style="color:red">{{$message}}</p>    @enderror
                </div>
               
                <button type="submit" class="btn btn-primary">Registrar</button>
                <input type="hidden" name="tipo" value="registrar">
            </form>

        </div>


    </div>
</body>
</html>