<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMissingColumnsToArticlesTable extends Migration
{
    public function up()
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->string('image')->after('id'); // Add the image column
            $table->string('titre')->after('image'); // Add the titre column
            $table->decimal('prix', 8, 2)->after('titre'); // Add the prix column
            $table->string('contenu')->after('prix'); // Add the contenu column
        });
    }

    public function down()
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->dropColumn(['image', 'titre', 'prix', 'contenu']); // Remove the columns if rolling back
        });
    }
}