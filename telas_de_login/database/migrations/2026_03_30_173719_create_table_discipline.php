<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration{

    public function up():void{
        Schema::create('discipline', function(Blueprint $table){

            $table->collation('utf8mb4_unicode_ci');
            $table->charset('utf8mb4');
            $table->uuid('cod_discipline')->primary(true);
            $table->string('name',150);
            $table->timestamps();



        });

    }


    public function down():void{
        Schema::dropIfExists('discipline');
        

    }







};








