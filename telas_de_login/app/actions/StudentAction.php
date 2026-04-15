<?php

namespace App\actions;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Models\Student;
use Illuminate\Support\Facades\DB;
use Exception;

class StudentAction {

    public function exists($id):bool{

    
        $resp = Student::where('id' , $id)->exists();
        return $resp;

    }

    public function create($credentials){
        DB::beginTransaction();

        try{

           $student =  Student::create($credentials);
           DB::commit();
           if($student->exists){
            return true;
           }
           return false;


        }catch(Exception $err){
            echo 'passei aqui';
            DB::rollBack();
            return $err;

        }

    


    }



    

}