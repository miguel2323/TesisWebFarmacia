<x-app-layout>
   <div class=" max-w-5xl mx-auto px-2 sm:px-6 lg:px-8 py-8">
      <h1 class="uppercase text-center text-3xl font-bold">
      {{-- Categoria: --}}{{$categoria->name}} </h1>
        
      {{-- un for para llamar a todos las categorias--}}
      @foreach ($productos as $producto)
          
          <article style=" width:450px;height:450px;" class="mb-8 bg-white shadow-lg rounded-lg overflow-hidden">
         @if ($producto->image)
         <img  class="w-full h-80 object-cover object-center" style=" width:250px;height:200px;"
         src="{{str_replace("localhost","localhost:8000",
             Storage::url($producto->image->url))}}" alt="imegen">
             
        @else 
            <img class="w-full h-80 object-cover object-center" 
            src="https://cdn.pixabay.com/photo/2019/12/18/04/36/blue-4703011__340.jpg "
            alt="imegen">
  
         @endif

        <div class="px-6 py-4">
            <h1 class=" font-bold tect-xl mb-2">
            <a href="{{route('productos.show',$producto)}}">{{$producto->name}}</a>
            </h1>

            <div class="text-gray-700 text-base">
                {!!$producto->description!!}
            </div>
            <div class="text-gray-700 text-base">
                {!!$producto->precios!!}
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