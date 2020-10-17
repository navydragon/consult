<?php

use Illuminate\Database\Seeder;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('materials')->insert([
            'name' => 'ОХРАНА ОКРУЖАЮЩЕЙ СРЕДЫ ПРИ ПРОЕКТИРОВАНИИ И СТРОИТЕЛЬСТВЕ АВТОМОБИЛЬНЫХ ДОРОГ',
            'type_id' => 1,
            'url' => 'materials/Бобков А.В. Охрана окружающей среды про проектировании и строительстве автомобильных дорог  с учетом природоохранного законодательства.pdf'
        ]);
    }
}
