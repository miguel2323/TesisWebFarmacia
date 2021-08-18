<?php

namespace Database\Seeders;
use App\Models\Producto;
use App\Models\Image;

use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $productos = Producto::factory(300)->create();
    
      foreach( $productos as $producto){
                Image::factory(1)->create([ 
               'imageable_id'=> $producto->id,
               'imageable_type'=>Producto::class]);

      }

  

    }
}
