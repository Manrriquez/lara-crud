<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            $table->id();
            $table->unsignedBigInteger('id_category');            
            //$table->foreign('id_category')->constrained()->onDelete('cascade');  
            $table->string('name');
            $table->string('price');
            $table->timestamps();
            $table->foreign('id_category')->references('id')->on('categories')->onDelete('cascade');          
        });

        //Schema::table('products', function (Blueprint $table) {

        //    $table->foreign('id_category')->references('id')->on('categories')->onDelete('cascade');

        //});

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
