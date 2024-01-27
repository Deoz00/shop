<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\categorias;
use Illuminate\Http\Request;

class buscarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      //
      $categorias['categorias']=categorias::all();
      
        
        if(isset($request->categoria)){
            $productos['productos']=Producto::where('categoria_id', $request->categoria)->where('stock','>',0)->get();
           
        } elseif(isset($request->b)){
                    

            $productos['productos']=Producto::where('nombre', 'LIKE', '%' .$request->b.'%')->where('stock','>',0)->get();
           
        }else{
    

           // $productos['productos']=Producto::where('stock','>',0)->get();

        }
        
       
        
      //  return $productos;
        return view ('buscar',$categorias, $productos);
    }

    public function inicio(Request $request){
        
        $categorias['categorias']=categorias::all();
        $productos['productos']=Producto::where('stock','>',0)->get();
        return view ('inicio',$categorias, $productos);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
