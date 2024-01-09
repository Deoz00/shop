<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use cart;
use App\Models\Producto;

class CarController extends Controller
{
    //
    public function cartList()
    {
        $cartItems = \Cart::getContent();
        // dd($cartItems);
        return view('carrito', compact('cartItems'));
    }


    public function addToCart(Request $request)
    {

        $producto = Producto::find($request->producto_id); 
        \Cart::add([
            
            'id' => $producto->id,
            'name' => $producto->nombre,
            'price' => $producto->precio,
            'quantity' => 1,
            'attributes' => array(
                'image' => $producto->foto,
            )
        ]);
        session()->flash('success', 'Product is Added to Cart Successfully !');
        return back();

       // return redirect()->route('cart.list');
    }

    public function updateCart(Request $request)
    {
        
        \Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity
                ],
            ]
        );

        session()->flash('success', 'Item Cart is Updated Successfully !');

        return redirect()->route('cart.list');
    }

    public function removeCart(Request $request)
    {
        \Cart::remove($request->producto_id);
        session()->flash('success', 'Item Cart Remove Successfully !');

        return redirect()->route('cart.list');
    }

    public function clearAllCart()
    {
        \Cart::clear();

        session()->flash('success', 'All Item Cart Clear Successfully !');

        return redirect()->route('cart.list');
    }

    public function comprar(){
        

        $lista = \Cart::getContent();
        
        foreach ($lista as $item) {
            # code...
            //return $item;
            $producto = Producto::find($item->id);
            $resta = $producto->stock - $item->quantity;
            
            if($resta < 0){
                return "no hay stock";
            }
          
        }
        $producto->stock = $resta;
        // return $producto;
         $producto->update(); 
        //producto::where('id','=', $item->id)->update($producto);
        Cart::clear();
         return redirect("/carrito");
    }
}
