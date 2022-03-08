<x-app-layout>
   <div class=" max-w-5xl mx-auto px-2 sm:px-6 lg:px-8 py-8">
      <h1 class="uppercase text-center text-3xl font-bold">
      {{-- Categoria: --}}{{$categoria->name}} </h1>
        
      {{-- un for para llamar a todos las categorias--}}
      @foreach ($productos as $producto)
          
          <article  sizes="(max-width: 320px) 280px,
            (max-width: 480px) 440px,
            800px" class="mb-8 bg-white shadow-lg rounded-lg overflow-hidden">
         @if ($producto->image)
         <img  class="w-full h-80 object-cover object-center" style=" width:350px;height:300px;"
         src="{{str_replace("localhost","localhost:8000",
             Storage::url($producto->image->url))}}" alt="imegen">
             
        @else 
            <img class="w-full h-80 object-cover object-center" 
            src="https://cdn.pixabay.com/photo/2019/12/18/04/36/blue-4703011__340.jpg "
            alt="imegen">
  
         @endif

        <div class="px-6 py-4">
            <h1 class=" font-bold tect-xl mb-2">
            <a href="{{route('productos.show',$producto)}}">Nombre:{{$producto->name}}</a>
            </h1>
               <div class="font-bold tect-xl mb-2">
                <strong>Descripcion:</strong><a class="text-gray-700">{{$producto->description}}</a>
               </div>
            <div class="text-gray-700 text-base">
                Cantidad:{{$producto->cantidad}}
             </div>
            <div class="pricebox">
                <span class="regular-price">Precios:{{$producto->precios}}/Bs</span>
            </div>
          
         
        </div>
        
        {{--Para colocar fururas estiquetas--}}
    </article>     
      @endforeach
     <div class="mt-4">
         {{$productos->links()}}
     </div>

   </div>
 

</x-app-layout>