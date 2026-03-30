<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('frequents', function (Blueprint $table) {

            $table->charset('utf8mb4');
            $table->collation('utf8mb4_unicode_ci');



            $table->uuid('id')->primary(true);
            $table->uuid('id_student')->nullable(false);
            $table->uuid('id_discipline')->nullable(false);

            $table->foreign('id_student')->references('id')->on('student')->onDelete('cascade')->onUpdate('cascade');
            
            $table->foreign('id_discipline')->references('cod_discipline')->on('discipline')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('frequents');
    }
};
