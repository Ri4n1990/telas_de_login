<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Frequents;
use App\Models\Student;
use App\Models\Discipline;

use function Symfony\Component\Clock\now;

class FrequentsFactory extends Factory{

    protected $table = Frequents::class;

    public function definition(){

        return [

            'id' => fake()->unique()->uuid(),
            'id_student' => Student::Factory(),
            'id_discipline' => Discipline::factory(),
            'created_at' => today(),
            'updated_at' => today()





        ];


        
    }








}