<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // Correr migraciones 
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100)->nullable(false);
            $table->text('description');
            $table->enum('status', ['active','inactive'])-> default('active')->nullable(false);
            $table->timestamps();
        });
    }



    //Rehacer migraciones
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
