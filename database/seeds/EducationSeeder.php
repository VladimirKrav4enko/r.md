<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EducationSeeder extends Seeder
{

    static $educations = [
        'Любое',
        'Среднее',
        'Высшее'
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (self::$educations as $education) {
            DB::table('education')->insert(
                [
                    'name'       => $education,
                    'created_at' => date('Y-m-d H:i:s'),
                ]
            );
        }
    }
}
