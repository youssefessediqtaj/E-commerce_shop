<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('image'); 
            $table->string('titre'); 
            $table->decimal('prix', 8, 2);
            $table->string('contenu');  
            $table->timestamps(); 
        });
    }

    public function down()
    {
        Schema::dropIfExists('articles');
    }
}