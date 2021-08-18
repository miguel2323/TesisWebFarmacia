<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {

      return true;
      
         /* if ($this->user_id== auth()->user()->id) {
            
            return true;
          }
          else{
              return false; 
          }
*/
        
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
         $producto =$this->route()->parameter('productos');//actualizano la informacion del producto
           

 
        $rules = [
           'name'=>'required',
           'slug'=>'required|unique:productos',
           'status'=>'required|in:1,2'
          
        ];
         // Regla de validacion para actualizar un registro
         if ($producto) {
             $rules['slug']= 'required|unique:productos.slug'.$producto->id;
         }//-------------------------------------------------------------------
         
         
         if ($this->status == 2) {

              $rules =array_merge($rules,[
               'categoria_id'=>'required',
               'codigo'=>'required',
               'description'=>'required'
               ]);
          }

          return $rules;
    }
}
