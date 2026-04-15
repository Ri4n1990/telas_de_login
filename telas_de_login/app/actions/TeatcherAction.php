<?php

namespace App\actions;
use App\Models\Teatcher;
use Exception;
use Illuminate\Support\Facades\Auth;


class TeatcherAction{



    public function login($credentials):bool{
        try{

            
            return Auth::guard('teatcher')->attempt($credentials,true);


        }catch(Exception $err){
            
            throw new \RuntimeException('serviço de autenticação indisponível');

        }

    }


    public function disciplines( string $id){

        try{
            $teatcher = Teatcher::with('disciplines')->find($id);
            return $teatcher->disciplines;


        
        
        }catch(Exception $err){
            return false;

        }



    }
}