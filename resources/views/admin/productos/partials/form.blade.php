 <div class="form-group">
            {!! Form::label('name','Nombre:')!!}
            {!! Form::text('name',null, ['class'=>'form-control','placeholder'=>'Ingrese el nombre del producto']) !!}
           
            @error('name')
            <small class="text-danger">{{$message}}</small>
            @enderror
     </div>

            <div class="form-group">
                {!! Form::label('slug','Slug')!!}
                {!! Form::text('slug',null, ['class'=>'form-control','placeholder'=>'Ingrese el slug del producto','readonly']) !!}
                
                @error('slug')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div> 
                        
                        <div class="form-group">
                            {!! Form::label('categoria_id','Categoria:')!!}
                            {!! Form::select('categoria_id',$categorias, null, ['class'=>'form-control']) !!}
                        
                                @error('categoria_id')
                                  <small class="text-danger">{{$message}}</small>
                                     @enderror
                                    </div>
                                                        
                                <div class="form-group">
                                    {!! Form::label('cantidad','Cantidad:')!!}
                                    {!! Form::text('cantidad', null, ['class'=>'form-control','placeholder'=>'cantidad del producto']) !!}
                                
                                    @error('cantidad')
                                    <small class="text-danger">{{$message}}</small>
                                    @enderror
                                
                                </div>
                                                
                                                <div class="form-group">
                                                    {!! Form::label('precios','Precios:')!!}
                                                    {!! Form::text('precios', null, ['class'=>'form-control','placeholder'=>'Ingrese el Precio del producto']) !!}
                                                
                                                    @error('precios')
                                                    <small class="text-danger">{{$message}}</small>
                                                    @enderror
                                                
                                                </div>

                  
        <div class="form-group">
            <p class="font-weight-bold">Estado</p>

            <label>
                {!! Form::radio('status',1,true) !!}
                Borrador
            </label>
                   
            <label>
                {!! Form::radio('status',2) !!}
                Publicado
            </label> 
           
            @error('status')
            <br>
            <small class="text-danger">{{$message}}</small>
            @enderror

        </div>
       
        <div class="row mb-3">
            <div class="col">
                <div class="image-wrapper">
             
                   @isset($producto->image)
                          <img id="picture" src="{{str_replace("localhost","localhost:8000",
                                Storage::url($producto->image->url))}}" alt="imegen">
                      @else
                      <img id="picture" class="w-full h-80 object-cover object-center" 
                      src="https://cdn.pixabay.com/photo/2019/12/18/04/36/blue-4703011__340.jpg " alt="imegen">
            
                   @endisset

                  
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    {!! Form::label('file','Imagen que se mostrara en el producto')!!}
                    {!! Form::file('file',['class'=>'form-control-file','accept'=>'image/*'])!!}
                     @error('file')
                <span class="text-danger">{{$message}}</span>
                        
                    @enderror

                </div>

               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, dolor nam quibusdam, repellat obcaecati laudantium dolorum inventore earum fugit accusantium minus unde incidunt aliquam consequatur saepe molestias repellendus sunt necessitatibus?</p>
            </div>
          </div>

        <div class="form-group">
            {!! Form::label('description','Descripcion del producto:')!!}
            {!! Form::textarea('description',null,['form-control']) !!}
           
            @error('description')
            <small class="text-danger">{{$message}}</small>
            @enderror
        
        </div>
     