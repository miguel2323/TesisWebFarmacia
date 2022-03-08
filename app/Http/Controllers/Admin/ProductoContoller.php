<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Models\Producto;
use  Illuminate\Support\Facades\Storage;
use App\Http\Requests\ProductoRequest;

use Illuminate\Http\Request;

class ProductoContoller extends Controller
{
 
//metodo para limitar funciones a los logger
public function __construct(){

    $this->middleware('can:admin.productos.index')->only('index'); 
    $this->middleware('can:admin.productos.create')->only('create','store'); 
    $this->middleware('can:admin.productos.edit')->only('edit','update');
    $this->middleware('can:admin.productos.destroy')->only('destroy');      
  }   
  

    public function index()
    {
        return view('admin.productos.index');
       //return "holaqhace";
    }

    public function create()
    { 
         $categorias = Categoria::pluck('name','id');
        return view('admin.productos.create', compact('categorias'));
    }

    public function store(ProductoRequest $request)
    {

   $producto =Producto::create($request->all());
  
   
    //  return $request->all('file')['file'];
       
      if ($request->file('file')) {
      // echo "hay archivo;";
             $url = Storage::put('productos',$request->file('file'));// aqui me mada como resultado el numero 1
              $producto->image()->create([
               'url'=>$url]);  
                return redirect()->route('admin.productos.edit',$producto);
    }
      }
         public function edit(Producto $producto)
            {
                $categorias = Categoria::pluck('name','id');
            
            return view('admin.productos.edit', compact('producto','categorias'));
            }


    public function update(ProductoRequest  $request, Producto $producto)
    {
        $producto->update($request->all());
       if ($request->file('file')) {
          
           $url= Storage::put('productos', $request->file('file'));
        
           if ($producto->image) {
             Storage::delete($producto->image->url);

              $producto->image->update([
               'url'=>$url
              ]);

               } else {
                $producto->image->create([
                    'url'=>$url
                   ]);
                }
            }
            return redirect()->route('admin.productos.edit',$producto)->with('info','El producto se actualió con éxito');
        }


    public function destroy(Producto $producto)
    {
      $producto->delete();
         return redirect()->route('admin.productos.index')->with('info', 'El producto se a eliminado con exito');
    }
}
 