<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('post_twos', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            // que es enum? este campo puede tener dos estados, borrador o publicado, por defecto el campo tendra el valor borrador
            $table->enum("status", ["draft", "published"])->default("draft");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_twos');
    }
};
