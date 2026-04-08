<?php


namespace Database\Factories;
use App\Models\Discipline;
use Illuminate\Database\Eloquent\Factories\Factory;


class DisciplineFactory extends Factory{

    protected $table = Discipline::class;

    public function definition(){

        return [
            'cod_discipline' => fake()->unique()->uuid(),
            'name' => fake()->word(),
            'created_at' => today(),
            'updated_at' => today()

        ];
    }






}