<?php

use App\Models\Student;
use App\Models\Teatcher;
use Illuminate\Support\Facades\Route;
use App\actions\StudentAction;
use App\Http\Resources\StudentDisciplineResource;


Route::get('/', function () {

    return 'olá';


    
});

Route::get('/existe/{id}', function(StudentAction $student, string $id){
    try{

        $credenciais = [
            'name' => 'jorge loko',
            'email' => 'jorge44@loko.com',
            'gender' => 'masculino',
            'birth' => '2001-10-12',
            'school_year' => 1,
            'education' => 'ensino médio'
        ];

        return $student->create($credenciais);
        
    }catch(Exception $err){

        return response('o',500);

    }

});









    

