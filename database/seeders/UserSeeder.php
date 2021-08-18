<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
       User::create([
        'name'=>'Miguel Rojas',
        'email'=>'miguelrojas8143@gmail.com',
        'password'=>bcrypt('12345678')
     ])->assignRole('Admin');

     User::factory(99)->create();
    }
}
