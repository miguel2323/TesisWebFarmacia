<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;


use Spatie\Permission\Models\Role;

class UserController extends Controller
{
//metodo para eliminar funciones a los logger
  public function __construct(){

    $this->middleware('can:admin.usuarios.index')->only('index');  
    $this->middleware('can:admin.usuarios.edit')->only('edit','update');     
}   
  
 public function index()
    {
    return view('admin.usuarios.index');
    }

    public function edit(User $user)
    {
         $roles =Role::all();

        return view('admin.usuarios.edit',compact('user','roles')); 
    }


    public function update(Request $request, User $user)
    {
        $user->roles()->sync($request->roles);
       return redirect()->route('admin.usuarios.edit',$user)
                ->with('info','Se asigno los roles correctamente');
    }

}
