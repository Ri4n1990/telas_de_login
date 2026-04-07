<?php

use App\Models\Student;
use Illuminate\Support\Facades\Route;
use App\Models\Teatcher;
use App\Models\Discipline;

Route::get('/', function () {

    return response('hey man ',200);
    
    
});
