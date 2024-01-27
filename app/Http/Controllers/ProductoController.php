<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\categorias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $productos = Producto::where('usuario_id',Auth::user()->id)->get();
        $categorias = categorias::select('id', 'nombre')->get();
        
        
        return view('home', compact('productos', 'categorias'));     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $credentials = $request->validate([
                
            'nombre' => ['required', 'string'],
            'descripcion' => ['required', 'string'],
            'categoria_id' => ['required'],
            'stock' => ['required','numeric'],  
            'precio' => ['required','numeric'],
            'foto' => ['required']

        ]);
       
        //}
        //$datosUsuario = request()->all();
        $datos = request()->except('_token');
        if($request->hasFile('foto')){
           $credentials['foto']=$request->file('foto')->store('uploads', 'public'); 
           

           $credentials['usuario_id']= Auth::user()->id;
        }
       //dd($credentials);

        Producto::create($credentials);
        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        //
        dd("dd");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
      

        $credentials = $request->validate([
                
            'nombre' => ['required', 'string'],
            'descripcion' => ['required', 'string'],
            'categoria_id' => ['required'],
            'stock' => ['required','numeric'],  
            'precio' => ['required','numeric'],
        ]);
       
        //}
        //$datosUsuario = request()->all();
        $id = $request->id;
        $datos = request()->except('_token','_method','id');
        if($request->hasFile('foto')){
            $rutaImagen = Producto::select('foto')->find($id)->foto;
           
           $datos['foto']=$request->file('foto')->store('uploads', 'public'); 
           Storage::delete($rutaImagen);

        }

        Producto::findOrFail($id)->update($datos);

        return redirect('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        Producto::destroy($id);
        return redirect('home');
    }

    public function productList()
    {
        $products = Product::all();

       // return view('products', compact('products'));
    }

    
}
