<?php


namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Student;


class StudentFactory extends Factory{

    protected $model = Student::class;

    public function definition(){

        return [

            'id' => fake()->unique()->uuid(),
            'name' => fake()->userName(),
            'email' => fake()->safeEmail(),
            'gender' => fake()->randomElement(['masculino', 'feminino']),
            'birth' => fake()->date(),
            'school_year' =>  fake()->randomNumber(1,9),
            'education' => fake()->word(),
            'password' => fake()->password(),
            'created_at' => today(),
            'updated_at' => today()









        ];
        
    }










}