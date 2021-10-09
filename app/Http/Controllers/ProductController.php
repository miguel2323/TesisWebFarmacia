<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function index()
    {
      $productos = Producto::where('status',2)->latest('id')->paginate(8);
       return view('productos.index',compact('productos'));
     }

 
     //Metodo para ver varios articulos
     public function show(Producto $producto)
     {
       $similares =Producto::where('categoria_id',$producto->categoria_id)
       ->where('status',2)
       ->where('id','!=',$producto->id)
       ->latest('id')
       ->take(4)
       ->get();
       return view('productos.show',compact('producto','similares'));
     }
 
 
     public function categoria(Categoria $categoria){
      
       $productos=  Producto::where('categoria_id', $categoria->id)
       ->where('status',2)
       ->where('id','!=',$categoria->id)
       ->latest('id')
       ->paginate(4);
       return view('productos.categoria',compact('productos','categoria'));;

        
 }

 
 public function create()
 {
     return view('productos.create');
 }
 
     public function edit(Producto $producto)
     {
       return view('productos.edit',compact('producto'));
     }
 
     public function update(Request $request, Producto $producto)
     {//creando las validaciones
 
         $request->validate([ 
           'nombre'=> 'required',
             'descripcion'=>'required',
               'categoria'=> 'required'
             ]);
             $producto->nombre = $request->nombre;
             $producto->descrpcion = $request->descripcion;
             $producto->categoria= $request->categoria;
             $producto->save();
           //actualizar registro por adsinacion masiva
           //$articulo->update($request->all());// metodo simplificado me da error tambien
           return view('productos.show',compact('producto'));
     }
 
     public function destroy(Producto $producto){
    
     $producto->delete();
       
     return redirect()->route('productos.index');
        
 }
 
 }
