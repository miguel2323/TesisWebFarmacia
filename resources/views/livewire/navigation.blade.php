<nav class="bg-gray-800" x-data="{ open: false }">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
      <div class="relative flex items-center justify-between h-16">
        
        <link media="all" type="text/css" rel="stylesheet" href="./Laravel_files/bootstrap.min.css">
        <link media="all" type="text/css" rel="stylesheet" href="./Laravel_files/font-awesome.min.css">
        <link media="all" type="text/css" rel="stylesheet" href="./Laravel_files/helper.min.css">

         

        {{-- coloanco los demas estilos--}}


        <link rel="shortcut icon" href="http://www.lanube.cu.ma/galio/assets/img/favicon.ico"type="image/x-icon">
        <link media="all" type="text/css" rel="stylesheet" href="./Laravel_files/bootstrap.min.css">
        <link media="all" type="text/css" rel="stylesheet" href="./Laravel_files/font-awesome.min.css">
        <link media="all" type="text/css" rel="stylesheet" href="./Laravel_files/helper.min.css">
        <link media="all" type="text/css" rel="stylesheet" href="./Laravel_files/plugins.css">
        <link media="all" type="text/css" rel="stylesheet" href="./Laravel_files/style.css">
        <link media="all" type="text/css" rel="stylesheet" href="./Laravel_files/star-rating.css">
        <link media="all" type="text/css" rel="stylesheet" href="./Laravel_files/theme.css">
        

           <!-- Mobile menu button-->
        <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
           <button x-on:click="open = true" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <!--
              Icon when menu is closed.
  
              Heroicon name: outline/menu
  
              Menu open: "hidden", Menu closed: "block"
       -->
            <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>     
            <!--
              Icon when menu is open.
  
              Heroicon name: outline/x
  
              Menu open: "block", Menu closed: "hidden"
            -->
            <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
           </div>
            <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
            
            {{--logotipo --}}
            <a href="/" class="flex-shrink-0 flex items-center">
            <img class="block lg:hidden h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-500.svg" alt="Workflow">
            <img class="hidden lg:block h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-logo-indigo-500-mark-white-text.svg" alt="Workflow">
            </a>
   {{--Menu lg--}}
        
   <div style=" z-index:70 "class="hidden sm:block sm:ml-6">
            <div class="flex space-x-4">  
              <ul class="nav">
                  <li>
                    <a href="">Categorias</a>
                      <ul>
                        @foreach ($categorias as $categoria)
                         <li><a href="{{route('productos.categoria',$categoria)}}"
                             class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md
                               text-sm font-medium">{{$categoria->name}}</a>
                                </li>
                                 @endforeach
                                   </li>
                                  </ul>
                              </ul>
                            </div>
                           </div>
                       </div>  
           
           @auth
      <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
         <!-- aqui poner futuras notificaciones -->
     
         <!-- Perfiles-->
        <div class="ml-3 relative" x-data="{open: false}">
          <div>
            <button x-on:click="open = true" type="button" class="bg-gray-800 flex text-sm 
            rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 
                    focus:ring-white" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
              <span class="sr-only">Open user menu</span>
            <img class="h-8 w-8 rounded-full"src="{{auth()->user()->profile_photo_url}}" alt="">
            </button>
          </div>
             {{-- aqui modifice el menu
               <div x-show="open" x-on:click.away="open = false" class="origin-top-right absolute right-0
               mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
              --}}
        
        <div x-show="open" style="z-index:70 " x-on:click.away="open = false" class="origin-top-right absolute right-10 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
            <!-- Active: "bg-gray-100", Not Active: "" -->
         <a href="{{route('profile.show')}}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Tu Perfil</a>
         @can('admin.home')
            <a href="{{route('admin.home')}}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Dashboard</a>
          @endcan
        
          <form method="POST" action="{{ route('logout') }}">
              @csrf
            <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2" onclick="event.preventDefault();
            this.closest('form').submit();">
              Cerrar sesíon
            </a>
             </form>
          </div>
        </div>
      </div>
        @else
            <div>
              <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>
              <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
            </div>

       @endauth


    </div>
  </div>

  <!-- Menu Mobil. -->
  <div class="sm:hidden" style="z-index:70 " id="mobile-menu"  x-show="open" x-on:click.away="open = false" >
    <div class="px-2 pt-2 pb-3 space-y-1">
      <ul class="nav">
        <li><a href="">Categorias</a>
            <ul>
              @foreach ($categorias as $categoria)
               <li><a href="{{route('productos.categoria',$categoria)}}"
                   class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md
                     text-sm font-medium">{{$categoria->name}}</a>
                      </li>
                       @endforeach
                         </li>
                            </ul>
                            </div>
                          </div>
</nav>
 
   
<style type="text/css">
 .nav{
background-color: #4567;
color: #ffffff;
border: none;
padding: 16px; /* 16px arriba ,abajo derecha hisuierda*/
font-size: 18.5px;/*tamaño de la letra*/
    list-style: none;
  }

.nav li a {

background-color: #4567;
  padding: 16px;
  color: #ffffff;
  text-decoration:none;
}
.nav li a:hover{
  background-color: navy;
}

.nav >li {
  float: left;
}
 .nav li ul {
  display:none;
  position: absolute;
  min-width: 140px;
}

.nav li:hover>ul{
 display: block;
}
.nav li ul li{
position: relative;
}

.nav li ul li ul{
right: -140px;
top: 0px;

}
</style>