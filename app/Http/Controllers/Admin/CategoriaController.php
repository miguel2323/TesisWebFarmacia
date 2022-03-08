<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categoria;
class CategoriaController extends Controller
{
  

//metodo para limitar funciones a los logger
public function __construct(){

  $this->middleware('can:admin.categorias.index')->only('index'); 
  $this->middleware('can:admin.categorias.create')->only('create','store'); 
  $this->middleware('can:admin.categorias.edit')->only('edit','update');
  $this->middleware('can:admin.categorias.destroy')->only('destroy');      
}   

  public function index()
    {   
         $categorias = Categoria::all();

        return view('admin.categorias.index',compact('categorias'));
    }


    public function create()
    {
        return view('admin.categorias.create');
    }

    public function store(Request $request)
    {
     //$echo('store categoria');
      
      //validaciones de los campos 
        $request->validate([
          'name'=>'required',
          'slug'=>'required|unique:categorias'
       ]); 
      
      $categoria = Categoria::create($request->all());
       
      return redirect()->route('admin.categorias.edit',$categoria)->with('info','La categoria se creo con éxito');
    }


    public function edit( Categoria $categoria)
    {
        return view('admin.categorias.edit',compact('categoria'));
    }

    public function update(Request $request, Categoria $categoria)
    {
       
          //validaciones de los campos 
          $request->validate([
            'name'=>'required',
            'slug'=>"required|unique:categorias,slug,$categoria->id"
         ]); 
        
         $categoria->update($request->all());
          return redirect()->route('admin.categorias.edit',$categoria)->with('info','La categoria se actualizo con éxito');

    }

    public function destroy(Categoria $categoria)
    {
        $categoria->delete();
       return redirect()->route('admin.categorias.index')->with('info','La categoria se elimino con éxito');
       
       
       
    }
}
