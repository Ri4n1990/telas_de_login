<?php

namespace App\actions;

use Exception;
use App\Models\Discipline;

class DisciplineAction{

    public function StudentFrequents($idDiscipline){
        try{

            $result = Discipline::with('student')->find($idDiscipline);
            return $result;


        }catch(Exception $err){
            return false;

        }

    }
}