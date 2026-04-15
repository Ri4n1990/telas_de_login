<?php

namespace App\actions;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Models\Student;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Exception;

class StudentAction {

    public function login($credentials):bool{
        try{

            
            return Auth::guard('student')->attempt($credentials,true);


        }catch(Exception $err){
            
            throw new \RuntimeException('serviço de autenticação indisponível');

        }

    }

    public function exists($id):bool{

    
        $resp = Student::where('id' , $id)->exists();
        return $resp;

    }

    public function create($credentials):bool{
        DB::beginTransaction();

        try{

           $student =  Student::create($credentials);
           DB::commit();
           
           if($student->exists){
            return true;
           }
           return false;


        }catch(Exception $err){
            DB::rollBack();
            return false;

        }

    


    }



    

}