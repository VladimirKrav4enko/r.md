<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExperienceSeeder extends Seeder
{

    static $experiences = [
        'Без опыта',
        'Любой',
        'От 1 года',
        'От 2-х лет',
        'От 3-х лет',
        'От 4-х лет',
        '5 лет и более',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (self::$experiences as $experience) {
            DB::table('experiences')->insert(
                [
                    'name'       => $experience,
                    'created_at' => date('Y-m-d H:i:s'),
                ]
            );
        }
    }
}
