<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {
            $newProject = new Project();
            $newProject->project_name = $faker->unique()->word;
            $newProject->client_name = $faker->name();
            $newProject->project_description = $faker->paragraph();
            $newProject->type_id = rand(1, 10);
            $newProject->save();
        }
    }
}
