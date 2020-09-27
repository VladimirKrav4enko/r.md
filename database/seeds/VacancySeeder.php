<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\City;
use App\Models\Category;
use App\Models\Experience;
use App\Models\Education;
use Faker\Generator as Faker;

class VacancySeeder extends Seeder
{


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Vacancy::class, 20)->create();
    }
}
