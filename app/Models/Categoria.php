<?php

namespace App\Models;

use BaconQrCode\Renderer\RendererStyle\Fill;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use App\Models\Categoria::factory();
class Categoria extends Model
{
    use HasFactory;

   protected $fillable=['name','slug'];
    //Relacion de uno a muchos
     

    public function getRouteKeyName()
    {
        return 'slug';
    }



public function productos()
{

    return $this->hasMany(Producto::class);
       }


}
