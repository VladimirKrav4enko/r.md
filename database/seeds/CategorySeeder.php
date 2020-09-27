<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{

    static $categories = [
        'IT, Программирование',
        'Банки, кредитование',
        'Бухгалтерия, экономисты',
        'Водители',
        'Государственные учреждения',
        'Дизайн',
        'Закупки',
        'Инженеры',
        'Иностранные языки',
        'Кадры, HR, рекрутинг',
        'Красота, фитнес, спорт',
        'Культура, искусство',
        'Курсы, тренинги',
        'Маркетинг, реклама, PR',
        'Массмедиа, журналистика'
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (self::$categories as $category) {
            DB::table('categories')->insert(
                [
                    'name'       => $category,
                    'created_at' => date('Y-m-d H:i:s'),
                ]
            );
        }
    }
}
