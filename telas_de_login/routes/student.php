<?php

use App\Models\Student;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;



Route::get('/', function () {

    $resp = Auth::guard('student')->check();
    
    return 'olá' . $resp;
    
});







    

