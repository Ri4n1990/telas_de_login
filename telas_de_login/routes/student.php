<?php

use App\Models\Discipline;
use Illuminate\Support\Facades\Route;
use App\actions\DisciplineAction;
use App\actions\StudentAction;

use App\Http\Resources\StudentDisciplineResource;
use Illuminate\Support\Facades\Auth;


Route::get('/', function (StudentAction $student) {

    $info = ['email' => 'rianmagnus5791@gmail.com', 'password' => 'password'];
    $resp = $student->login($info);

    echo $resp;
    
    return 'olá';


    
});

Route::get('/pega/{id}', function(DisciplineAction $discipline , string $id){
    
    return 'oi';

});










    

