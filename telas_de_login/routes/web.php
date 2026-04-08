<?php

use App\Models\Student;
use Illuminate\Support\Facades\Route;
use App\Models\Teatcher;
use App\Models\Discipline;
use App\Models\Frequents;
use App\Models\Teatches;


Route::get('/', function () {

    return response('hey man ',200);
    
    
});


Route::get('/criar_reg', function(){

    try{

        Teatches::factory()->count(3);

        

        echo 'deu certo';


    }catch(Exception $err){

        echo 'Algo saiu errado' . $err;

    }
    

});
