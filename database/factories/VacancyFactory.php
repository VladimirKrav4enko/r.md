<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Vacancy;
use \App\Models\City;
use \App\Models\Category;
use Faker\Generator as Faker;

$factory->define(
    Vacancy::class,
    function (Faker $faker) {
        $cities = [City::CITY_ID_CHISHINAU, City::CITY_ID_BALTI];
        $categories = [
            Category::CATEGORY_ID_IT,
            Category::CATEGORY_ID_BANK,
            Category::CATEGORY_ID_DRIVERS
        ];
        return [
            'name'          => $faker->jobTitle,
            'company_name'  => $faker->company,
            'city_id'       => $cities[array_rand($cities, 1)],
            'category_id'   => $categories[array_rand($categories, 1)],
            'experience_id' => \App\Models\Experience::EXPERIENCE_ID_ANY,
            'education_id'  => \App\Models\Education::EDUCATION_ID_ANY,
            'salary'        => rand(1000, 25000),
            'description'   => $faker->text(500),
            'phone'         => $faker->phoneNumber,
            'email'         => $faker->companyEmail,
            'created_at'    => date('Y-m-d H:i:s', strtotime('-' . rand(1, 9999) . 'minutes')),
        ];
    }
);
