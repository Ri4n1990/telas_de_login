<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Teatcher;
use Illuminate\Support\Facades\Date;

use function Symfony\Component\Clock\now;

class TeatcherFactory extends Factory{

    protected $model = Teatcher::class;

    public function definition(){

        return [

            'id' => fake()->unique()->uuid(),
            'name' => fake()->userName(),
            'email' => fake()->safeEmail(),
            'gender' => fake()->randomElement(['masculino','feminino']),
            'birth' => fake()->date(),
            'password' => fake()->password(),
            'created_at' => today(),
            'updated_at' => today()
            






        ];
        
    }





}

