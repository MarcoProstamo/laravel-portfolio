<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technologies = ['PHP', 'Laravel', 'Vue.js', 'React', 'Node.js'];

        foreach ($technologies as $tech) {
            Technology::create(['name' => $tech]);
        }
    }
}
