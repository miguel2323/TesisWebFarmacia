<?php

namespace Database\Factories;

use App\Models\Producto;
use App\Models\Categoria;
use App\Models\User;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class ProductoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Producto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {    
        $name = $this->faker->unique()->sentence();
       
        return [
            'name'=>$name,
             'slug'=>Str::slug($name),
              'description'=>$this->faker->paragraph(),   
               'codigo'=> Str::random(10),
                'status'=> $this->faker->randomElement([1,2]),
                 'categoria_id'=>Categoria::all()->random()->id,
                  'user_id'=>User::all()->random()->id
        ];
    }
}
