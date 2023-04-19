<?php

namespace Database\Seeders;
use App\Models\Proj;
use App\Models\Technology;

use Faker\Generator as Faker;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjTechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        
        $technologies=Technology::all()->pluck('id');

        for($i=1;$i < 20;$i++){
            $proj=Proj::find($i);
            $proj->technologies()->attach($faker->randomElements($technologies, 3));
        }
    }
}
