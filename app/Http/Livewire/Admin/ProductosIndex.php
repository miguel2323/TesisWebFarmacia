<?php

namespace App\Http\Livewire\Admin;
use Livewire\Component;
use App\Models\Producto;
use Livewire\WithPagination;

class ProductosIndex extends Component
{ 
   use WithPagination;

      protected $paginationTheme ="bootstrap";
      public $search;

      // este metodo sirve para ir actualizando la busqueda y me regrese a la pagina 1
      public function updatingSearch()
      {
          $this->resetPage();
        }

     //---------------------------------------------------------------------   
      public function render()
      {
        $productos =Producto::where('user_id',auth()->user()->id)
        ->where('name','LIKE', '%' . $this->search . '%') 
        ->latest('id')
        ->paginate();
           return view('livewire.admin.productos-index',compact('productos'));
      }


}
