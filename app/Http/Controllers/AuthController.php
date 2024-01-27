<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

use App\Models\User;


class AuthController extends Controller
{
    //

    public function autenticar(Request $request){
       

       
        if( $request['tipo']== 'ingresar'){
            

            $credentials = $request->validate([
                

                        'email' => ['required', 'email', 'string'],
                        'password' => ['required', 'string']
            
                    
                
                ]);
                $recuerdame = $request->filled('recuerdame');
                
                
             
            if(Auth::attempt($credentials, $recuerdame)){

                $request->session()->regenerate();
                return redirect('/');
            }
            
            throw ValidationException::withMessages([
                'login' => 'correo o contraseña incorrecta'
               ]);
            
       }

///////////Registrar/////////////
       if( $request['tipo']== 'registrar'){

        
        $credentials = $request->validate([
                
            'name' => ['required', 'string'],
            'email' => ['required', 'email', 'string'],
            'password' => ['required', 'string'],
            'password_confirmation' => ['required']

        ]);
        $request['password'] = bcrypt($request['password']);
        $user = user::create($request->only('name','email','password'));
        return redirect('/auth');
       
        }
       
    }


    public function logout(Request $request){

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
