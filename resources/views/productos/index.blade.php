<x-app-layout>
   
     <div class="container py-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
       @foreach ($productos as $producto)
        <article class="mb-8 bg-white shadow-lg rounded-lg overflow-hidden w-full h-80 bg-cover bg-center
          @if($loop->first) md:col-span-2 @endif "style="background-image:url(@if($producto->image){{str_replace("localhost","localhost:8000",Storage::url($producto->image->url))}} 
            @else
                  https://cdn.pixabay.com/photo/2019/12/18/04/36/blue-4703011__340.jpg @endif)">
                  
            <div class="w-full h-full px-8 flex flex-col justify-center">
              
                 <!-- aqui colocar un carousel -->    
                  <h1 class="text-3xl text-white leading-8 font-bold mt-2">
                        <a href="{{route('productos.show',$producto)}}">
                              Nombre:{{$producto->name}}</a></h1>
                              <br>
                              <br>
                               <h5 class="tex-3xl leading-8 text-white font-bold mt-2">Precios:</h5>
                               
                         </div>
                   
                </article>  
                 
               @endforeach
                
          </div>
     </div>
      <div class="mt-4">
            <!--ir a la siguiente paginacion -->
            {{$productos->links()}}
      </div>
</x-app-layout>
