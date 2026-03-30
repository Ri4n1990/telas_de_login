<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('student', function (Blueprint $table) {
            $table->collation('utf8mb4_unicode_ci');
            $table->charset('utf8mb4');

            $table->uuid('id')->primary(true);
            $table->string('name',256)->nullable(false);
            $table->string('email', 256)->nullable(false)->unique();
            $table->enum('gender',['masculino','feminino']);
            $table->date('birth');
            $table->integer('school_year');
            $table->string('education',30);
            $table->string('password')->nullable(false);
            $table->timestamps();
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('student');
    }
};
