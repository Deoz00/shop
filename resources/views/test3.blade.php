<form action="{{ url('/agregarusuario') }}" method="post">
@csrf

<input type="text" name="nombre" id="nombre" placeholder= "Nombre" value="{{ isset($usuario->nombre)?$usuario->nombre:'' }}"> <br>
   
   <input type="email" name="correo" id="correo" placeholder= "Email" value="{{ isset($usuario->correo)?$usuario->correo:'' }}"><br>
   <input type="password" name="contraseña" id="contraseña" placeholder= "Contraseña" value="{{ isset($usuario->contraseña)?$usuario->contraseña:'' }}"><br>
   
   <input type="submit" value="enviar"><br><br>
  



</form>