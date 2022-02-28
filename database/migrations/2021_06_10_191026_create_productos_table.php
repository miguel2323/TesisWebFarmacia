<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');

            $table->text('description')->nullable();
            $table->string('codigo');
            
            $table->enum('status',[1,2])->default(1);
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('categoria_id');
    
            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');


            $table->foreign('categoria_id')
            ->references('id')
            ->on('categorias')
            ->onDelete('cascade');
           $table->timestamps();
        }); 
    }

    /**
     * Reverse the migrations.
     *
     * 
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
