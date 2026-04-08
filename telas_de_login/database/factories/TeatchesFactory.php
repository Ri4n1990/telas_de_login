<?php

namespace Database\Factories;

use App\Models\Discipline;
use App\Models\Teatcher;
use App\Models\Teatches;
use Illuminate\Database\Eloquent\Factories\Factory;

class TeatchesFactory extends Factory{

    protected $table = Teatches::class;

    public function definition(){

        return [

            'id' => fake()->unique()->uuid(),
            'id_teatcher' => Teatcher::factory(),
            'id_discipline' => Discipline::factory(),
            'created_at' => today(),
            'updated_at' => today()

        ];
        
    }





}
