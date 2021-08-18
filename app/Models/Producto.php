<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categoria;
class Producto extends Model
{
    use HasFactory;
    
    protected $guarded =['id','created_at','updated_at'];

    //Relacion de uno a muchos (inversa)
   
    public function user(){
        return $this->belongsTo(User::class);
     }

     public function categoria(){
        return $this->belongsTo(Categoria::class);
     }
    
     // Relacion uno a uno polimorfica
     public function image()
     {
        return $this->morphOne(Image::class,'imageable');
     }

}
