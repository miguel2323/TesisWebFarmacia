<x-app-layout>

<html class="js sizes websockets customelements history postmessage webworkers picture pointerevents webanimations webgl srcset flexbox cssanimations csscolumns csscolumns-width csscolumns-span csscolumns-fill csscolumns-gap csscolumns-rule csscolumns-rulecolor csscolumns-rulestyle csscolumns-rulewidth csscolumns-breakbefore csscolumns-breakafter csscolumns-breakinside" lang="es">
    
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   {{-- <meta name="description" content="TexvnOnline">--}}
        <title>FarmaUdo</title>
    <link rel="shortcut icon" href="http://www.lanube.cu.ma/galio/assets/img/favicon.ico"type="image/x-icon">
    <link media="all" type="text/css" rel="stylesheet" href="./Laravel_files/bootstrap.min.css">
    <link media="all" type="text/css" rel="stylesheet" href="./Laravel_files/font-awesome.min.css">
    <link media="all" type="text/css" rel="stylesheet" href="./Laravel_files/helper.min.css">
    <link media="all" type="text/css" rel="stylesheet" href="./Laravel_files/plugins.css">
    <link media="all" type="text/css" rel="stylesheet" href="./Laravel_files/style.css">
    <link media="all" type="text/css" rel="stylesheet" href="./Laravel_files/star-rating.css">
    <link media="all" type="text/css" rel="stylesheet" href="./Laravel_files/theme.css">
    </head>
<body>


<!-- page  wrapper start -->

<div class="page-main-wrapper">
    <div class="container">
       
            <!-- sidebar end -->
           
           
            <!-- product main wrap start -->
    <div class="col-lg-26 order-1">
                <!-- product view wrapper area start -->
         <div class="shop-product-wrapper pt-50">
                <!-- inicio del artículo del producto -->
            <div class=" shop-product-wrap  grid row">
                @foreach ($productos as $producto) 
                    <!--  inicio de elemento -->
            <div  class=" product-item fix  mb-30  col-lg-3 col-md-3 col-sm-6">
            <div class=" mb-8 bg-white shadow-lg overflow-hidden rounded-lg  product-thumb">
                <article class=" w-full h-80 bg-cover bg-center
                @if($loop->first) col-span-2 @endif" style="background-image:url(@if($producto->image){{str_replace("localhost","localhost:8000",Storage::url($producto->image->url))}} 
                        @else https://cdn.pixabay.com/photo/2019/12/18/04/36/blue-4703011__340.jpg @endif)">
                    <div class="product-label">
                        <span>
                            M-B
                        </span>
                    </div>
                </div>
            <div class="product-content">
            <h4><a href="{{route('productos.show',$producto)}}">
                    Nombre:{{$producto->name}}</a></h4>   
                <div class="pricebox">
                    <span class="regular-price">89.97/Bs</span>
                    
                </div>
                </article>  
                <div class="ratings">
            </div>
                </div>
                    </div>
                    @endforeach
             
           <div class="mt-4">
                {{$productos->links()}}
            </div>
                <!-- product single list item start -->
                </div>{{--Fin de Productos--}}
        
        <!-- start pagination area -->
            
        </div>
            <!-- product main wrap end -->
        </div>
   
    </div>

</div>
<!-- page wrapper end -->
      <footer>
            <!-- footer top start -->
           <div class="footer-top bg-black pt-10 pb-10">
             <div class="container">
            </div>
        </div>
            <!-- footer top end -->

            <!-- footer main start -->
            <div class="footer-widget-area pt-40 pb-38 pb-sm-4 pt-sm-30">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="footer-widget mb-sm-26">
                                <div class="widget-title mb-10 mb-sm-6">
                                    <h4>CONTACTO</h4>
                                </div>
                                <div class="widget-body">
                                    <ul class="location">
                                        <li>
                                            <i class="fa fa-envelope"></i>
                                            miguel@gmail.com
                                        </li>
                                        <li>
                                            <i class="fa fa-phone"></i>
                                            +51 958456154
                                        </li>
                                        <li>
                                            <i class="fa fa-map-marker"></i>
                                            Dirección: Boyaca V sector 07 casa #5
                                        </li>
                                    </ul>
                                    <a class="map-btn" href="https://goo.gl/maps/f6qPrvtSZUhf9DzS7" target="_blank">Abrir en Google Map</a>
                                </div>
                            </div> <!-- single widget end -->
                        </div> <!-- single widget column end -->
                    </div>
                </div>
            </div>
            <!-- footer main end -->
        </footer>
        <!-- footer area end -->
    <!-- Quick view modal start -->
    
    <!-- Quick view modal end -->

    <!-- Scroll to top start -->
    <div class="scroll-top not-visible">
        <i class="fa fa-angle-up"></i>
    </div>
    <!-- Scroll to Top End -->
</body>

</x-app-layout>
