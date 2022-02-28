<div class="card">
 <div class="card-header">
     <input wire:model="search" class="form-control" placeholder="Ingrese el nombre de un producto">
 </div>

@if ($productos->count())
  
<div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Precio</th>
                    <th colspan="2"></th>
                </tr>
            </thead>

            <tbody>
                    @foreach ($productos as $producto)
                        <tr>
                        <td>{{$producto->id}}</td>
                        <td>{{$producto->name}}</td>
                        <td>{{$producto->precios}}</td>
                        <td with="10px">
                          <a class="btn btn-primary btn-sm" href="{{route('admin.productos.edit',$producto)}}">Editar</a>
                        </td>
                          
                            <td with="10px">
                        
                                <form action="{{route('admin.productos.destroy',$producto)}}" method="POST">
                                @csrf
                                @method('delete')
                             <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                            
                            </form>
                            </td>
                            </td>
                        </tr>
                    @endforeach
             
            </tbody>
        </table>
    </div>

    <div class="card-footer">
        {{$productos->links()}}
    </div>
   @else
     <strong>No hay ningún registro......</strong>
    @endif



</div>
