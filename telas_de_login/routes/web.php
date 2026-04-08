<?php

use App\Models\Student;
use Illuminate\Support\Facades\Route;
use App\Models\Teatcher;
use App\Models\Discipline;
use App\Models\Frequents;


Route::get('/', function () {

    return response('hey man ',200);
    
    
});


Route::get('/criar_reg', function(){

    try{

        $discipline = Discipline::factory()->create();

        Student::factory()->count(3)->hasAttached($discipline,
        fn () => [
            'id' => fake()->uuid()
        ]
        
        
        )->create();

        echo 'deu certo';


    }catch(Exception $err){

        echo 'Algo saiu errado' . $err;

    }
    

});
