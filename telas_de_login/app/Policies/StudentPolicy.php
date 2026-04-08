<?php

namespace App\Policies;

use App\Models\Student;
use Illuminate\Auth\Access\Response;


class StudentPolicy{
    
    public function update(Student $authstudent , Student $student ){

        return $authstudent->id === $student->id ;

    }
    
}
