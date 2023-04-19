<?php

namespace Database\Seeders;
use App\Models\Proj;
use App\Models\Type;
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

        $types=Type::all()->pluck('id');

        for ($i=0;$i < 20;$i++){
            $proj=new Proj;
            $proj->type_id = $faker->randomElement($types);
            $proj->title=$faker->word();
            $proj->description=$faker->sentence();
            $proj->image=$faker->imageUrl(640, 480, 'animals', true);
            $proj->save();
        }
    }
}
