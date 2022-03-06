<x-app-layout>

  <div class="container py-8">
   <p class="text-4xl font-bold text-gray-600">
      <strong>Producto:</strong>{{$producto->name}}</p>
   
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6" >
   {{--Contenido Principal--}}
    
   <div class="lg:col-span-2">
       <figure>
         @if ($producto->image)
               <img class="w-full h-80 object-cover object-center" 
               src="{{str_replace("localhost","localhost:8000",Storage::url($producto->image->url))}}" alt="imegen">
           @else 
              <img class="w-full h-80 object-cover object-center"src="https://cdn.pixabay.com/photo/2019/12/18/04/36/blue-4703011__340.jpg " alt="imegen">
            @endif
      
       </figure>
       <div class="text-base text-gray-500 mt-4">
         <p><strong>Descripcion:</strong>{!!$producto->description!!}</p>
       </div>
      <h5 class="text-lg text-gray-500 mt-4"><strong>Precios:{!!$producto->precios!!}</strong></h5>
      
      <h5 class="text-lg text-gray-500 mt-4"><strong>Cantidad:{!!$producto->cantidad!!}</strong></h5>
     
   </div>
{{-- productos relacionados--}}
  <aside>
 <h1 class="text-2xl fon-bold text-gray-600 mb-4"> Mas en: {{$producto->categoria->name}}</h1>
      <ul>
         @foreach ($similares as $similar)
            <li class="mb-4">
            <a class="flex" href="{{route('productos.show',$similar)}}">
         @if ($similar->image)
         <img class="w-36 h-20 object-cover object-center"
             src="{{str_replace("localhost","localhost:8000",
              Storage::url($similar->image->url))}}" alt="imegen">
          @else 
              <img class="w-36 h-20 object-cover object-center"
               src="https://cdn.pixabay.com/photo/2019/12/18/04/36/blue-4703011__340.jpg " alt="imegen">
          @endif
              <span class="ml-2 text-gray-600">{{$similar->name}}</span>
               </a>   
             </li> 
         @endforeach
      </ul>
 </aside>
   </div>
</div>

</x-app-layout>