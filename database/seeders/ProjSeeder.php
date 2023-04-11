<?php

namespace Database\Seeders;
use App\Models\Proj;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0;$i < 20;$i++){
            $proj=new Proj;
            $proj->title=$faker->word();
            $proj->description=$faker->sentence();
            $proj->image=$faker->imageUrl(640, 480, 'animals', true);
            $proj->save();
        }
    }
}
