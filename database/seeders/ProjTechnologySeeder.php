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
        $projs=Proj::all()->pluck('id');
        $technologies=Technology::all()->pluck('id');

        for($i=0;$i<40;$i++){
            $proj=Proj::find($faker->randomElement($projs));
            $proj->attach($faker->randomElement($technologies));
        }
    }
}
