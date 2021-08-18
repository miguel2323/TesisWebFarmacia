<?php

namespace Database\Seeders;

use App\Models\Categoria;
use str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {  
        Storage::deleteDirectory('productos');
        Storage::makeDirectory('productos');
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        Categoria::factory(4)->create();
        $this->call(ProductoSeeder::class);
    }
}
