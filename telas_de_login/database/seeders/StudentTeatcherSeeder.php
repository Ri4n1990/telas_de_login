<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;
use App\Models\Discipline;
use App\Models\Teatcher;


class StudentTeatcherSeeder extends Seeder{

    public function run():void{

        $discipline = Discipline::factory()->create();

        Student::factory()->count(3)->hasAttached($discipline,
            fn () => [
                'id' => fake()->unique()->uuid()
            ]

            )->create();
        
        Teatcher::factory()->hasAttached($discipline,
        
            fn () => [
                'id' => fake()->unique()->uuid()
            ]
        
            )->create();
        
        




    }
}