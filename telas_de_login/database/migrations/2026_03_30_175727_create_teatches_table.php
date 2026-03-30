<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('teatches', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->uuid('id_teatcher')->nullable(false);
            $table->uuid('id_discipline')->nullable(false);
            $table->foreign('id_teatcher')->references('id')->on('teatcher')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_discipline')->references('cod_discipline')->on('discipline')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('teatches');
    }
};
